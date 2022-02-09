@extends('customer.layout')
@section('title', 'Đặt hàng')

@section('css') 
@endsection()


@section('body')

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Checkout</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Checkout</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec checkout page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                    <!-- checkout content Start -->
                    <div class="ec-checkout-content">
                        <div class="ec-checkout-inner"> 
                            <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                <div class="ec-checkout-block ec-check-bill">
                                    <h3 class="ec-checkout-title">Thông tin đặt hàng</h3>
                                    <div class="ec-bl-block-content"> 
                                        <div class="ec-check-bill-form">
                                            <form action="#" method="post">
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Họ và tên*</label>
                                                    <input type="text" name="username" id="username" value="<?php echo $customer_data['name'] ?>" required />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Email*</label>
                                                    <input type="email" name="email" id="email" value="<?php echo $customer_data['email'] ?>" required />
                                                </span>
                                                <span class="ec-bill-wrap">
                                                    <label>Địa chỉ nhận hàng</label>
                                                    <input type="text" name="address" id="address" value="<?php echo $customer_data['address'] ?>" />
                                                </span>
                                                <span class="ec-bill-wrap">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" name="phone" id="telephone" value="<?php echo $customer_data['phone'] ?>" />
                                                </span> 
                                                <div >
	                                                <div>
	                                                    <input type="radio" id="account1" value="1" name="payment_method" checked="" style="width: auto; height: auto;">
	                                                    <label for="account1">Thanh toán khi nhận hàng</label>
	                                                </div>
	                                                <div>
	                                                    <input type="radio" id="account2" value="2" name="payment_method" style="width: auto; height: auto;">
	                                                    <label for="account2">Thanh toán ngay với VNPay</label>
	                                                </div>
		                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <span class="d-flex justify-content-center">
                                <a class="btn btn-primary  order-action m-r-10" href="#">Đặt hàng</a> 
                            </span>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-checkout-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Thanh toán</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-checkout-summary"> 
                                    <div class="ec-checkout-summary-total">
                                        <span class="text-left">Tổng</span>
                                        <span class="text-right real-total"> </span>
                                    </div>
                                </div>
                                <div class="ec-checkout-pro cart-list">

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <section class="section ec-new-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Sản phẩm mới</h2>
                        <h2 class="ec-title">Sản phẩm mới</h2>
                    </div>
                </div>
            </div>
            <div class="row new-product">  </div>
        </div>
    </section>
@endsection()


@section('sub_layout') 
@endsection()


@section('js')

<script src="{{ asset('customer/assets/js/page/checkout.js') }}"></script>

@endsection()