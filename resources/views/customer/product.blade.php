@extends('customer.layout')
@section('title', 'Sản phẩm')

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
                            <h2 class="ec-breadcrumb-title product-name"> </h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="">Trang chủ</a></li>
                                <li class="ec-breadcrumb-item active">Sản phẩm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img single-pro-img-no-sidebar">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover"> 
                                        </div>
                                        <div class="single-nav-thumb"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc single-pro-desc-no-sidebar">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title product-name"> </h5> 
                                        <div class="ec-single-desc product-description"> </div>
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price product-prices">
                                                <span class="ec-single-ps-title">Giá bán</span>
                                            </div>
                                        </div>

                                        <div class="ec-pro-variation">
                                            <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                <span>SIZE</span>
                                                <div class="ec-pro-variation-content product-size-list">
                                                    <ul class="product-size"> 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ec-pro-variation-inner ec-pro-variation-color">
                                                <span>Màu</span>
                                                <div class="ec-pro-variation-content product-color-list">
                                                    <ul class="product-color"> 
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ec-single-qty"> 
                                            <div class="ec-single-cart ">
                                                <button class="btn btn-primary action-add-to-card" atr="Add to card"> </button>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#ec-spt-nav-details" role="tablist">Mô tả</a>
                                    </li> 
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc product-detail"> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section ec-releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Sản phẩm liên quan</h2>
                        <h2 class="ec-title">Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30 product-related"> 
            </div>
        </div>
    </section>
@endsection()


@section('sub_layout') 
@endsection()


@section('js')

<script src="{{ asset('customer/assets/js/page/product.js') }}"></script>

@endsection()