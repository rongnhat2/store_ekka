<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\OrderRepository;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Repositories\Manager\WarehouseRepository;
use App\Models\Warehouse;

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class OrderController extends Controller
{
    protected $order;
    protected $order_detail;
    protected $warehouse;

    public function __construct(Order $order, OrderDetail $order_detail, Warehouse $warehouse ){
        $this->order            = new OrderRepository($order);
        $this->order_detail     = new OrderRepository($order_detail);
        $this->warehouse                    = new WarehouseRepository($warehouse);
    }
    public function index(){
        return view("admin.manager.order");
    }

    public function get(Request $request){
        $id = $request->id;
        $data = $this->order->get_order($id);
        return $this->order->send_response(201, $data, null);
    }
    public function get_one(Request $request){
        $data_order = $this->order->get_in_order($request->id);
        $data_sub = $this->order_detail->get_full_order($request->id);
        $data = [
            "data_order" => $data_order,
            "data_sub" => $data_sub,
        ];
        return $this->order_detail->send_response(200, $data, null);
    }
    public function update(Request $request){
        if ($request->data_status == 1) {

        }else if ($request->data_status == 2) {
            $this->order_detail->update_status($request->data_id);
            $data_sub = $this->order_detail->get_full_order($request->data_id);
            foreach ($data_sub as $key => $value) {
                $warehouse_item = $this->warehouse->warehouse_get_item($value->product_id);
                if (count($warehouse_item) > 0 && $warehouse_item[0]->quantity > $value->quantity) {
                    $this->warehouse->update_item($value->product_id, $warehouse_item[0]->quantity -= $value->quantity);
                }else{
                    return $this->order->send_response(500, null, null);
                }
            }
        }else if ($request->data_status == 3) {

        }else if ($request->data_status == 4) {
            $this->order_detail->update_status($request->data_id);
            $data_sub = $this->order_detail->get_full_order($request->data_id);
            foreach ($data_sub as $key => $value) {
                $warehouse_item = $this->warehouse->warehouse_get_item($value->product_id);
                if (count($warehouse_item) > 0 && $warehouse_item[0]->quantity > $value->quantity) {
                    $this->warehouse->update_item($value->product_id, $warehouse_item[0]->quantity += $value->quantity);
                }else{
                    return $this->order->send_response(500, null, null);
                }
            }
        }
        $this->order->update(["order_status" => $request->data_status], $request->data_id);
        return $this->order->send_response(201, null, null);
    }


    // Statistic
    public function get_total(){
        $turnover = $this->order->get_turnover();
        $item_sell = $this->order->get_item_sell();
        $order_time = $this->order->get_order_time();
        $customer_buy = $this->order->get_customer_buy();

        $data = [
            "turnover"  => $turnover,
            "item_sell"  => $item_sell,
            "order_time"  => $order_time,
            "customer_buy"  => $customer_buy,
        ];
        return $data;
    }
    public function get_best_sale(){
        $best_sale = $this->order->get_best_sale();
        return $best_sale;
    }
    public function get_customer(){
        $customer_new = $this->order->get_customer_new();
        $customer_free = $this->order->get_customer_free();
        $data = [
            "customer_new"  => $customer_new,
            "customer_free"  => $customer_free,
        ];
        return $data;
    }
}
