@extends('customer.layout')
@section('title', 'Trang cá nhân')

@section('css') 
@endsection()


@section('body') 
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Trang cá nhân</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="ec-breadcrumb-item active">Trang cá nhân</li>
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
            @if ( Session::has('error') )
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if ( Session::has('success') )
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="I-profile">
                <div class="tab-control">
                    <a data-name="profile" class="tab-control-item"><i class="far fa-user m-r-10"></i>Thông tin</a>
                    <a data-name="order" class="tab-control-item"><i class="far fa-list-alt m-r-10"></i>Đơn mua</a>
                    <a data-name="password" class="tab-control-item"><i class="fas fa-key m-r-10"></i>Đổi mật khẩu</a>
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" ><i class="fas fa-sign-out-alt m-r-10"></i>Đăng xuất</a>
                    <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <div class="tab-body">

                </div>
            </div>
        </div>
    </section> 
@endsection()


@section('sub_layout') 
    <div class="I-modal modal-order" modal-block="Order">
        <div class="modal-wrapper">
            <div class="modal-dialog">
                <div class="dialog-content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Giảm giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody class="data-full-list"> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()


@section('js')

<script src="{{ asset('customer/assets/js/page/profile.js') }}"></script>

@endsection()