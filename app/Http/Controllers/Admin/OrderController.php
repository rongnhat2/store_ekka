<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\OrderRepository;
use App\Models\Order;
use App\Models\OrderDetail;

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class OrderController extends Controller
{
    protected $order;
    protected $order_detail;

    public function __construct(Order $order, OrderDetail $order_detail ){
        $this->order            = new OrderRepository($order);
        $this->order_detail     = new OrderRepository($order_detail);
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

}
