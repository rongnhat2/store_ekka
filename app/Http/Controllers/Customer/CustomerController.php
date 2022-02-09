<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\CustomerRepository;
use App\Models\Customer;
use App\Models\CustomerAuth;
use App\Models\CustomerDetail;
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class CustomerController extends Controller
{
    protected $customer;
    protected $customer_auth;
    protected $customer_detail;

    public function __construct(Customer $customer, CustomerAuth $customer_auth, CustomerDetail $customer_detail){
        $this->customer         = new CustomerRepository($customer);
        $this->customer_auth    = new CustomerRepository($customer_auth);
        $this->customer_detail  = new CustomerRepository($customer_detail);
    }
    public function get_profile(Request $request){
        list( $user_id, $token) = explode('$', $request->cookie('_token_'), 2);
        $data = $this->customer_auth->get_profile($user_id);
        return $this->customer_auth->send_response(200, $data, null);
    }
    public function update_profile(Request $request){
        list( $user_id, $token) = explode('$', $request->cookie('_token_'), 2);
        $data = [
            "name"      => $request->data_name,
            "phone"     => $request->data_phone,
            "address"   => $request->data_address,
        ];
        $this->customer_auth->update_profile($user_id, $data);
        return $this->customer_auth->send_response(200, null, null);
    }
    public function get_order(Request $request){
        list( $user_id, $token) = explode('$', $request->cookie('_token_'), 2);
        $data = $this->customer_auth->get_order($user_id);
        return $this->customer_auth->send_response(200, $data, null);
    }
    public function update_password(Request $request){
        list( $user_id, $token) = explode('$', $request->cookie('_token_'), 2);
        $auth_user = $this->customer_auth->get_oldpass($user_id);
        if (count($auth_user) > 0) {
            if (Hash::check($request->data_old, $auth_user[0]->password)) {
                $secret_key = mt_rand(1, 9999999);
                $this->customer_auth->update(["password" => Hash::make($request->data_new),"secret_key"    => $secret_key,], $user_id);
                // cập nhật thành công, tự động đăng nhập, bỏ token Guest, tạo token Auth
                Cookie::queue(Cookie::forget('_token_'));
                $tokenAuth = '1$'. $user_id . '$' . Hash::make($user_id . '$' . $secret_key);
                Cookie::queue('_token_', $tokenAuth, 2628000);
                return $this->customer_auth->send_response(200, null, null);
            }else{
                return $this->customer_auth->send_response(500, "cant find", null);
            }
        }else{
            return $this->customer_auth->send_response(500, "password incorrect", null);
        }
    }

}
