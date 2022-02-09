@extends('admin.layout')
@section('title', 'Thống kê')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="statistic-group | statistic">
@endsection()


@section('css')
    <link href="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection()


@section('body')

    <h1>Mua bản đầy đủ hoặc cao cấp để mở khóa thêm các tính năng</h1>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                            <i class="anticon anticon-dollar"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">$23,523</h2>
                            <p class="m-b-0 text-muted">Doanh thu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-line-chart"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">+ 17.21%</h2>
                            <p class="m-b-0 text-muted">Tăng trưởng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                            <i class="anticon anticon-profile"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">3,685</h2>
                            <p class="m-b-0 text-muted">Đơn hàng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-purple">
                            <i class="anticon anticon-user"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">1,832</h2>
                            <p class="m-b-0 text-muted">Khách hàng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Thống kê theo ngày </h5>
                        <div class="dropdown dropdown-animated scale-left">
                            <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                <i class="anticon anticon-ellipsis"></i>
                            </a>
                            <div class="dropdown-menu">
                                <button class="dropdown-item" type="button">
                                    <i class="anticon anticon-printer"></i>
                                    <span class="m-l-10">Print</span>
                                </button>
                                <button class="dropdown-item" type="button">
                                    <i class="anticon anticon-download"></i>
                                    <span class="m-l-10">Download</span>
                                </button>
                                <button class="dropdown-item" type="button">
                                    <i class="anticon anticon-file-excel"></i>
                                    <span class="m-l-10">Export</span>
                                </button>
                                <button class="dropdown-item" type="button">
                                    <i class="anticon anticon-reload"></i>
                                    <span class="m-l-10">Refresh</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-space m-t-50">
                        <div class="completion-chart p-r-10">
                            <canvas class="chart" id="completion-chart"></canvas>
                        </div>
                        <div class="calendar-card border-0">
                            <div data-provide="datepicker-inline"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Khách hàng thân thiết</h5>
                        <div>
                            <a href="#" class="btn btn-default btn-sm">Xem tất cả</a> 
                        </div>
                    </div>
                    <div class="m-t-30">
                        <div class="avatar-string m-l-5">
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Erin Gonzales">
                                <div class="avatar avatar-image team-member">
                                    <img src="manager/assets/images/avatars/thumb-1.jpg" alt="">
                                </div>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Darryl Day">
                                <div class="avatar avatar-image team-member">
                                    <img src="manager/assets/images/avatars/thumb-2.jpg" alt="">
                                </div>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Marshall Nichols">
                                <div class="avatar avatar-image team-member">
                                    <img src="manager/assets/images/avatars/thumb-3.jpg" alt="">
                                </div>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Virgil Gonzales">
                                <div class="avatar avatar-image team-member">
                                    <img src="manager/assets/images/avatars/thumb-4.jpg" alt="">
                                </div>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Nicole Wyne">
                                <div class="avatar avatar-image team-member">
                                    <img src="manager/assets/images/avatars/thumb-5.jpg" alt="">
                                </div>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Riley Newman">
                                <div class="avatar avatar-image team-member">
                                    <img src="manager/assets/images/avatars/thumb-6.jpg" alt="">
                                </div>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Pamela Wanda">
                                <div class="avatar avatar-image team-member">
                                    <img src="manager/assets/images/avatars/thumb-7.jpg" alt="">
                                </div>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Add Member">
                                <div class="avatar avatar-icon avatar-blue team-member">
                                    <i class="anticon anticon-plus font-size-22"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Lịch sử nhập xuất kho</h5>
                        <div>
                            <a href="#" class="btn btn-default btn-sm">Xem tất cả</a> 
                        </div>
                    </div>
                    <div class="m-t-30">
                        <div class="d-flex m-b-20">
                            <div class="text-center">
                                <div class="avatar avatar-text avatar-blue avatar-lg rounded">
                                    <span class="font-size-22">17</span>
                                </div>
                            </div>
                            <div class="m-l-20">
                                <h5 class="m-b-0">
                                    <a class="text-dark">Nhập kho</a>
                                </h5>
                                <p class="m-b-0">Chi tiết</p>
                            </div>
                        </div>
                        <div class="d-flex m-b-20">
                            <div class="text-center">
                                <div class="avatar avatar-text avatar-cyan avatar-lg rounded">
                                    <span class="font-size-22">21</span>
                                </div>
                            </div>
                            <div class="m-l-20">
                                <h5 class="m-b-0">
                                    <a class="text-dark">Nhập kho</a>
                                </h5>
                                <p class="m-b-0">Chi tiết</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="text-center">
                                <div class="avatar avatar-text avatar-gold avatar-lg rounded">
                                    <span class="font-size-22">25</span>
                                </div>
                            </div>
                            <div class="m-l-20">
                                <h5 class="m-b-0">
                                    <a class="text-dark">Xuất kho</a>
                                </h5>
                                <p class="m-b-0">Chi tiết</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Thống kê Tổng đơn hàng</h5>
                        <div>
                            <div class="btn-group">
                                <button class="btn btn-default active">
                                    <span>Tháng</span>
                                </button>
                                <button class="btn btn-default">
                                    <span>Năm</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-50" style="height: 330px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas class="chart chartjs-render-monitor" id="revenue-chart" style="display: block; width: 989px; height: 330px;" width="989" height="330"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="m-b-0">Khách hàng</h5>
                    <div class="m-v-60 text-center" style="height: 200px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas class="chart chartjs-render-monitor" id="customers-chart" style="display: block; width: 454px; height: 200px;" width="454" height="200"></canvas>
                    </div>
                    <div class="row border-top p-t-25">
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0">350</h4>
                                        <p class="m-b-0 muted">Mới</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0">450</h4>
                                        <p class="m-b-0 muted">Quay lại</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0">100</h4>
                                        <p class="m-b-0 muted">Khác</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="m-b-0">$17,267</h2>
                            <p class="m-b-0 text-muted">Tổng doanh thu</p>
                        </div>
                        <div>
                            <span class="badge badge-pill badge-cyan font-size-12">
                                <span class="font-weight-semibold m-l-5">+5.7%</span>
                            </span>
                        </div>
                    </div>
                    <div class="m-t-50" style="height: 375px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                         <canvas class="chart chartjs-render-monitor" id="avg-profit-chart" style="display: block; width: 454px; height: 375px;" width="454" height="375"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between align-items-center">
                        <h5>Top Sản phẩm</h5>
                        <div>
                            <a href="javascript:void(0);" class="btn btn-sm btn-default">Xem tất cả</a>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Đã bán</th>
                                        <th>Doanh thu</th>
                                        <th style="max-width: 70px">Còn lại</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="manager/assets/images/others/thumb-9.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Gray Sofa</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>81</td>
                                        <td>$1,912.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-success" style="width: 82%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    82
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="manager/assets/images/others/thumb-10.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Gray Sofa</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>26</td>
                                        <td>$1,377.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-success" style="width: 61%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    61
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="manager/assets/images/others/thumb-11.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Wooden Rhino</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>71</td>
                                        <td>$9,212.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-danger" style="width: 23%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    23
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="manager/assets/images/others/thumb-12.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Red Chair</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>79</td>
                                        <td>$1,298.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-warning" style="width: 54%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    54
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="manager/assets/images/others/thumb-13.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Wristband</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>60</td>
                                        <td>$7,376.00</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-success" style="width: 76%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    76
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection()


@section('sub_layout')

<div class="modal fade" id="update-modal">
    <input type="hidden" class="_token" value="{{ csrf_token() }}">
    <div class="modal-dialog tab-2">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body"> </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-modal" data-dismiss="modal"></button>
            </div>
        </div>
    </div>
</div>

@endsection()
@section('js')
    
    <script src="{{ asset('manager/assets/js/pages/dashboard-default.js') }}"></script>
    <script src="{{ asset('manager/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('manager/assets/js/pages/dashboard-project.js') }}"></script>
@endsection()