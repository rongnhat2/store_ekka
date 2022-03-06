@extends('admin.layout')
@section('title', '')

@section('css')

@endsection()


@section('body')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Thống kê tổng quan</h4>
 

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card bg-primary border-primary">
                    <div class="card-body">
                        <div class="mb-4"> 
                            <h5 class="card-title mb-0 text-white">Doanh thu</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0 text-white data-turnover"> </h2>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div> <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="card bg-success border-success">
                    <div class="card-body">
                        <div class="mb-4"> 
                            <h5 class="card-title mb-0 text-white">Sản phẩm đã bán</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0 text-white data-item_sell"> </h2>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div> <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="card bg-warning border-warning">
                    <div class="card-body">
                        <div class="mb-4"> 
                            <h5 class="card-title mb-0 text-white">Đơn hàng</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0 text-white data-order_time"> </h2>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div> <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="card bg-primary border-primary">
                    <div class="card-body">
                        <div class="mb-4"> 
                            <h5 class="card-title mb-0 text-white">Khách hàng</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0 text-white data-customer_buy"> </h2>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div> <!-- end col--> 
        </div> 

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Top mặt hàng hot nhất</h4> 
                        <div class="table-responsive">
                            <table class="table table-centered table-hover table-xl mb-0" id="recent-orders">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Mã sản phẩm</th>
                                        <th class="border-top-0">Hình ảnh</th>
                                        <th class="border-top-0">Số lượng đã bán</th>
                                        <th class="border-top-0">Số lượng trong kho</th> 
                                    </tr>
                                </thead>
                                <tbody class="sale-list">
                                </tbody>
                            </table>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col --> 
        </div>

    </div> 
</div>
            
@endsection()


@section('sub_layout')

@endsection()


@section('js')
    <script src="{{ asset('manager/assets/js/page/statistic.js') }}"></script>
@endsection()