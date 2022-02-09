<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\OrderRepository;
use App\Models\Order;
use App\Models\OrderDetail;

use App\Repositories\Manager\ProductRepository;
use App\Models\Product;

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class OrderController extends Controller
{

    protected $order;

    public function __construct(Order $order, OrderDetail $order_detail, Product $product){
        $this->order             = new OrderRepository($order);
        $this->order_detail      = new OrderRepository($order_detail);

        $this->product           = new ProductRepository($product);
    }
    public function get(Request $request, $id){
        $data = $this->order_detail->get_sub_order($id);
        return $this->order_detail->send_response(200, $data, null);
    }
    public function create(Request $request){

        list( $user_id, $token) = explode('$', $request->cookie('_token_'), 2);
        $data_login     = $request->data_login;

        $data_item      = explode("-",$request->data_item);
        $data_quantity  = explode("-",$request->data_quantity);
        $data_prices    = $request->data_prices;
        
        $data_username  = $request->data_username;
        $data_address   = $request->data_address;
        $data_telephone = $request->data_telephone;
        $data_email     = $request->data_email;
        $data_payment   = $request->data_payment;

        $data_order_create = [
            "customer_id"           => $user_id,
            "status_customer"       => $data_login,
            "subtotal"              => $data_prices,
            "discount"              => 0,
            "total"                 => $data_prices,
            "username"              => $data_username,
            "email"                 => $data_email,
            "address"               => $data_address,
            "telephone"             => $data_telephone,
            "payment"               => $data_payment,
        ];
        $order_create = $this->order->create($data_order_create);

        foreach ($data_item as $key => $item_id) {
            $item = $this->product->get_one($item_id);
            $total_price = $data_quantity[$key] * ( $item[0]->prices - ($item[0]->prices/100*$item[0]->discount) );
            $data_detail = [
                "order_id"      => $order_create->id,
                "product_id"    => $item_id,
                "quantity"      => $data_quantity[$key],
                "discount"      => $item[0]->discount,
                "price"         => $item[0]->prices,
                "total_price"   => $total_price,
            ];
            $this->order_detail->create($data_detail);
        }

        return $order_create;
    }
}
