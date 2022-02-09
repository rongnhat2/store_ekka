<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Customer;
use Session;
use Hash;
use DB;

class AuthCustomer
{ 
    public function handle(Request $request, Closure $next, $middleware)
    {
        $token = $request->cookie('_token_');
        // vào UI login
        if ($middleware == 'auth') {
            if ($token) {
                list($user_id, $token) = explode('$', $request->cookie('_token_'), 2);
                $sql_getAuth    = 'SELECT * FROM customer_auth WHERE id = "'.$user_id.'"';
                $hasAuth        = DB::select($sql_getAuth);
                if (count($hasAuth) > 0) {
                    if (Hash::check($user_id . '$' . $hasAuth[0]->secret_key, $token)) {
                        return redirect()->route('customer.view.index');  
                    }else{
                        Cookie::queue(Cookie::forget('_token_'));
                        return $next($request);
                    }
                }else{
                    Cookie::queue(Cookie::forget('_token_'));
                    return $next($request);
                }
            }else{
                return $next($request);
            }
        }else{ 
            if ($token) {
                list($user_id, $token) = explode('$', $request->cookie('_token_'), 2);
                $sql_getAuth    = 'SELECT * FROM customer_auth WHERE id = "'.$user_id.'"';
                $hasAuth    = DB::select($sql_getAuth);
                if (count($hasAuth) > 0) {
                    // Kiểm tra phiên đăng nhập hiện tại
                    if (Hash::check($user_id . '$' . $hasAuth[0]->secret_key, $token)) {
                        return $next($request);
                    }else{
                        Cookie::queue(Cookie::forget('_token_'));
                        return redirect()->route('customer.view.login')->with('error', 'Đăng nhập hết hạn !!');  
                    }
                }else{
                    Cookie::queue(Cookie::forget('_token_'));
                    return $next($request);
                }
            }else{
                return redirect()->route('customer.view.login')->with('error', 'Bạn cần đăng kí để vào trang này !!');  
            }
        }
    }
}
