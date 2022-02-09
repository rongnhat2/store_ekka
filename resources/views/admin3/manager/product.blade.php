@extends('admin.layout')
@section('title', 'Sản phẩm')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="manager-group | product">
@endsection()


@section('css')
    <link href="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection()


@section('body')

<div class="main-body">
    <div class="main-tab" tab-name="Main">
        <div class="page-header no-gutters has-tab">
            <div class="d-md-flex m-b-15 align-items-center justify-content-between notification relative" id="notification">
                <div class="media align-center justify-content-between m-b-15 w-100">
                    <div class="m-l-15">
                        <h4 class="m-b-0">Sản phẩm</h4>
                    </div>
                    @include('admin.alert')
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="align-justify-center">
                            <a href="#" class="btn btn-default btn-sm flex-right main-tab-control" atr="Create">Sản phẩm<i class="fas fa-plus m-l-5"></i></a> 
                        </div>
                    </div>
                </div>
                <div class="m-t-25">
                    <table id="data-table" class="table"> </table>
                </div>
            </div>
        </div>
    </div>
    <div class="main-tab on-show" tab-name="Create">
        <div class="page-header no-gutters has-tab">
            <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                <div class="media align-items-center m-b-15">
                    <div class="avatar avatar-image rounded" style="height: 70px; width: 70px">
                        <img class="item-image" src="{{ asset("manager/images_global/noimage.jpg") }}" alt="">
                    </div>
                    <div class="m-l-15">
                        <h4 class="m-b-0" valid-appended="name-append"></h4>
                    </div>
                </div>
                <div class="m-b-15">
                    <button class="btn btn-primary push-data" atr="Create">
                        <i class="anticon anticon-save"></i>
                        <span>Lưu lại</span>
                    </button>
                    <button class="btn btn-defaul m-l-5 main-tab-close">
                        <span>Hủy</span>
                    </button>
                </div>
            </div>
            <ul class="nav nav-tabs" >
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#product-edit-basic">Thông tin cơ bản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-edit-option">Thông tin bổ sung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-edit-description">Mô tả</a>
                </li>
            </ul>
        </div>
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="product-edit-basic" >
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-semibold" for="productName">Tên sản phẩm</label>
                            <input type="text" class="form-control product-name name-append" valid-append="name-append" valid-data="valid-text" id="productName" placeholder="Tên sản phẩm" value="" >
                            <div class="valid-data"></div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="productPrice">Đơn giá</label>
                            <input type="text" class="form-control product-prices" valid-data="valid-number" id="productPrice" placeholder="Đơn giá" value="">
                            <div class="valid-data"></div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="productCategory">Danh mục</label>
                            <select class="custom-select product-category" id="productCategory">

                            </select>
                        </div>
                        <div class="form-group image-select-group">
                            <div class="form-header">
                                <label>Hình ảnh * </label>
                                <label class="image-select" for="image_list"><i class="fas fa-upload m-r-10"></i>Chọn ảnh</label>
                                <input type="file" class="form-control image-upload-label product-images" id="image_list" name="image_list[]" required="" accept="image/*" multiple="">
                            </div>
                            <div class="form-preview multi-upload">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="product-edit-option">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label class="font-weight-semibold">Size</label>
                                    <div class="metadata-render size-list">
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <input type="text" class="form-control metadata-value product-size" value="">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <button class="btn btn-primary metadata-create" atr="Size">Thêm size</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label class="font-weight-semibold">Color</label>
                                    <div class="metadata-render color-list">
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <input type="color" class="form-control metadata-value product-color " value="">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <button class="btn btn-primary metadata-create" atr="Color">Thêm màu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="productColors">Mô tả ngắn</label>
                            <textarea name="" class="form-control product-description" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="product-edit-description">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group summernote">
                            <textarea class="form-control product-detail " name="detail" placeholder="Mô tả đầy đủ" rows="4" required=""></textarea>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()


@section('sub_layout')



@endsection()

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/product.js') }}"></script>

@endsection()