<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use DB;

class DisplayController extends Controller
{
    public function index(Request $request){
        $customer_data = static::generate_logined($request);
        $page       = "page-template-template-homepage-v1";
        return view("customer.index", compact("page", "customer_data"));
    }
    public function product(Request $request){
        $customer_data = static::generate_logined($request);
        $page       = "page home page-template-default single-product full-width normal";
        return view("customer.product", compact("page", "customer_data"));
    }
    public function category(Request $request){
        $customer_data = static::generate_logined($request);
        $page       = "left-sidebar";
        return view("customer.category", compact("page", "customer_data"));
    }
    public function cart(Request $request){
        $customer_data = static::generate_logined($request);
        $page       = "page home page-template-default";
        return view("customer.cart", compact("page", "customer_data"));
    }
    public function checkout(Request $request){
        $customer_data = static::generate_logined($request);
        $page       = "page home page-template-default";
        return view("customer.checkout", compact("page", "customer_data"));
    }
    public function profile(Request $request){
        $customer_data = static::generate_logined($request);
        $page       = "page home page-template-default";
        return view("customer.profile", compact("page", "customer_data"));
    }
    public function login(Request $request){
        $customer_data = static::generate_logined($request);
        $page       = "page home page-template-default";
        return view("customer.auth", compact("page", "customer_data"));
    }
    public function register(Request $request){
        $customer_data = static::generate_logined($request);
        $page       = "page home page-template-default";
        return view("customer.register", compact("page", "customer_data"));
    }
    public function generate_logined($request){
        $user_login = [
            'id'        => null,
            'token'     => null,
            'email'     => null,
            'name'      => null,
            'phone'     => null,
            'avatar'    => null,
            'address'   => null,
            'is_login'  => false
        ];
        if ($request->cookie('_token_')) {
            list( $user_id, $token) = explode('$', $request->cookie('_token_'));
            $sql_getAuth    = 'SELECT   customer_auth.id,
                                        customer_auth.email,
                                        customer_detail.name,
                                        customer_detail.phone,
                                        customer_detail.avatar,
                                        customer_detail.address
                                FROM customer_auth 
                                LEFT JOIN customer_detail
                                ON customer_auth.id = customer_detail.customer_id
                                WHERE customer_auth.id = "'.$user_id.'"';
            $hasAuth    = DB::select($sql_getAuth);
            if (count($hasAuth) != 0) {
                $user_login['id']           = $hasAuth[0]->id;
                $user_login['token']        = $token;
                $user_login['email']        = $hasAuth[0]->email;
                $user_login['name']         = $hasAuth[0]->name;
                $user_login['avatar']       = $hasAuth[0]->avatar;
                $user_login['phone']        = $hasAuth[0]->phone;
                $user_login['address']      = $hasAuth[0]->address;
                $user_login['is_login']     = true;
            }
        }
        
        return $user_login;
    }
}
