@extends('admin.layout')
@section('title', 'Sản phẩm')

@section('css')
    <link href="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection()


@section('body')

<div class="page-content I-warehouse">
    <div class="container-fluid">
        <div class="main-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" class="btn btn-default btn-sm flex-right w-100 modal-control" data-toggle="modal" atr="Create">Nhập kho<i class="fas fa-plus m-l-5"></i></a> 
                            <div class="status-list"> 
                                <div class="status-event" atr="Item" data-id="">
                                    <div class="d-flex align-items-center">
                                        <div class="badge badge-primary badge-dot m-r-10"></div>
                                        <div>Kho hàng</div>
                                    </div>
                                </div>
                                <div class="status-event is-select" atr="History" data-id="">
                                    <div class="d-flex align-items-center">
                                        <div class="badge badge-success badge-dot m-r-10"></div>
                                        <div>Lịch sử nhập kho</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-t-25 data-table-wrapper">
                                <table id="data-table" class="table"> </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div>

@endsection()


@section('sub_layout')

<div class="modal modal-right fade quick-view show" id="modal-create">
    <div class="modal-dialog warehouse-modal-view">
        <div class="modal-content">
            <div class="modal-header justify-content-between align-items-center">
                <h5 class="modal-title"> </h5>
            </div>
            <div class="modal-body scrollable ps-container ps-theme-default">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-modal m-r-10" ></button>
                <button type="button" class="btn btn-primary push-modal" atr="Push"></button>
            </div>
        </div>
    </div>            
</div>
<div class="modal modal-right fade quick-view show" id="update-modal">
    <div class="modal-dialog warehouse-modal-view">
        <div class="modal-content">
            <div class="modal-header justify-content-between align-items-center">
                <h5 class="modal-title"> </h5>
            </div>
            <div class="modal-body scrollable ps-container ps-theme-default">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-modal m-r-10" ></button>
                <button type="button" class="btn btn-primary push-modal" atr="Push"></button>
            </div>
        </div>
    </div>            
</div>


@endsection()

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/warehouse.js') }}"></script>

@endsection()