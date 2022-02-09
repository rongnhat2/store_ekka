@extends('customer.layout')
@section('title', 'Giỏ hàng')

@section('css') 
@endsection()


@section('body') 
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Giỏ hàng</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="ec-breadcrumb-item active">Giỏ hàng</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec cart page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                    <div class="ec-cart-content">
                        <div class="ec-cart-inner">
                            <div class="row">
                                <form action="#">
                                    <div class="table-content cart-table-content">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <th>Đơn giá</th>
                                                    <th style="text-align: center;">Số lượng</th>
                                                    <th>Thành tiền</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody class="cart-list">

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                <a href="category?tag=0">Tiếp tục mua hàng</a>
                                                <a href="checkout" class="btn btn-primary action-checkout">Đặt hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Thanh toán</h3>
                            </div> 
                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <span class="text-left">Tạm tính</span>
                                            <span class="text-right sub-total"> </span>
                                        </div> 
                                        <div>
                                            <span class="text-left">Giảm giá</span>
                                            <span class="text-right discount-total"> </span>
                                        </div> 
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Tổng</span>
                                            <span class="text-right real-total"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Product Start -->
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

<script src="{{ asset('customer/assets/js/page/cart.js') }}"></script>

@endsection()