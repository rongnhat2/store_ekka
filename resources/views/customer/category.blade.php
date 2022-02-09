@extends('customer.layout')
@section('title', 'Danh mục')

@section('css') 
@endsection()


@section('body')

 	<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Danh mục</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="ec-breadcrumb-item active">Danh mục</li>
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
                <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-6 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn btn-grid active"><i class="fas fa-th-large"></i></button>
                                <button class="btn btn-list"><i class="fas fa-list"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 ec-sort-select">
                            <span class="sort-by">Sắp xếp</span>
                            <div class="ec-select-inner">
                                <select name="ec-select" id="ec-select">
                                    <option value="0">Sắp xếp theo</option>
                                    <option value="1">Mới nhất</option>
                                    <option value="2">Tên , A đến Z</option>
                                    <option value="3">Tên , Z đến A</option>
                                    <option value="4">Giá tiền, Thấp đến Cao</option>
                                    <option value="5">Giá tiền, Cao đến Thấp</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner" id="list-view">
                            <div class="row products">
                                 
                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            {{-- <span class="showing-item">Showing 1-12 of 21 item(s)</span> --}}
                            <div class="pagination-wrapper">

                            </div>
                        </div>
                        <!-- Ec Pagination End -->
                    </div>
                </div>
                <div class="ec-shop-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div id="shop_sidebar" class="" style=""><div class="inner-wrapper-sticky" style="position: relative;">
                        <div class="ec-sidebar-heading">
                            <h1>Filter</h1>
                        </div>
                        <div class="ec-sidebar-wrap">
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Danh mục<div class="ec-sidebar-res"><i class="ecicon eci-angle-down"></i></div></h3>
                                </div>
                                <div class="ec-sb-block-content ec-sidebar-dropdown">
                                    <ul class="category-list-filter">
                                        <li>
                                            <div class="ec-sidebar-block-item" category-id="0">
                                                <input type="radio" name="category" category-id="0"> <a href="#">Tất cả sản phẩm</a><span class="checked"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
	                        <div class="ec-sidebar-block">
	                            <div class="ec-sb-title">
	                                <h3 class="ec-sidebar-title">Price</h3>
	                            </div>
	                            <div class="ec-sb-block-content es-price-slider">
	                                <div class="ec-price-filter">
	                                    <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="2000000"
	                                        data-step="100000"></div>
	                                    <div class="ec-price-input">
	                                        <label class="filter__label"><input type="text" class="filter__input"></label>
	                                        <span class="ec-price-divider"></span>
	                                        <label class="filter__label"><input type="text" class="filter__input"></label>
	                                    </div>
	                                </div>
                                    <button type="button" class="btn btn-primary w-100 m-t-20 filter-prices">Lọc</button>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                </div>
            </div>
        </div>
    </section>

@endsection()


@section('sub_layout') 

@endsection()


@section('js')

<script src="{{ asset('customer/assets/js/page/category.js') }}"></script>

@endsection()