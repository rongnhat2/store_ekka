@extends('customer.layout')
@section('title', 'Trang chủ')

@section('css') 
@endsection()


@section('body')
    <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper slider-wrapper">

            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Top sản phẩm theo danh mục</h2>
                        <h2 class="ec-title">Top sản phẩm theo danh mục</h2>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <ul class="ec-pro-tab-nav nav justify-content-center category-tab-list">

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pro-for-all">
                            <div class="row data-category-render">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

    <!--  services Section Start -->
    <section class="section ec-services-section section-space-p">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner"> 
                        <div class="ec-service-desc">
                            <h2>Miễn phí ship</h2>
                            <p>Free shipping toàn quốc</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner"> 
                        <div class="ec-service-desc">
                            <h2>24X7 Hỗ trợ</h2>
                            <p>Liên hệ với chúng tôi 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner"> 
                        <div class="ec-service-desc">
                            <h2>Đổi trả hàng trong 30 ngày</h2>
                            <p>Trả hàng trong 30 ngày nếu có lỗi</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner"> 
                        <div class="ec-service-desc">
                            <h2>Thanh toán trực tuyến</h2>
                            <p>Tích hợp thanh toán online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-p section-space-m offer-wrapper">
        
    </section>
    <!-- offer Section End -->

    <!-- New Product Start -->
    <section class="section ec-new-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Sản phẩm mới</h2>
                        <h2 class="ec-title">Sản phẩm mới</h2>
                        <p class="sub-title">Danh sách sản phẩm mới</p>
                    </div>
                </div>
            </div>
            <div class="row new-product">

            </div>
        </div>
    </section>
    <!-- New Product end -->

            
@endsection()


@section('sub_layout') 

@endsection()


@section('js')

<script src="{{ asset('customer/assets/js/page/index.js') }}"></script>

@endsection()