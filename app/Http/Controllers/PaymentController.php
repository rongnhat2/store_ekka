<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Repositories\Manager\OrderRepository;
use App\Models\Order;

use Carbon\Carbon;
use Hash;
use DB;

class PaymentController extends Controller
{

    protected $order;

    public function __construct(Order $order){
        $this->order             = new OrderRepository($order);
    }
    public function create_pay(Request $request){ 
        $prices = $request->data_prices;
        $item_id = $request->data_id;

        session(['url_prev' => '/profile', 'item_id' => $item_id]);
        $vnp_TmnCode = "6NE7KUNZ"; //Mã website tại VNPAY 
        $vnp_HashSecret = "USUYDLXTCYCNCTNTVRUCQCJBUIELNVGF"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:8000/return-vnpay";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $prices * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version"   => "2.0.0",
            "vnp_TmnCode"   => $vnp_TmnCode,
            "vnp_Amount"    => $vnp_Amount,
            "vnp_Command"   => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode"  => "VND",
            "vnp_IpAddr"    => $vnp_IpAddr,
            "vnp_Locale"    => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef"    => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return $vnp_Url;
    }
    public function return_pay(Request $request)
    {
        $url = session('url_prev','/profile');
        if($request->vnp_ResponseCode == "00") {
            $this->order->update(["status" => 2], session('item_id') );
            return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');
        }
        session()->forget('url_prev');
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
}
