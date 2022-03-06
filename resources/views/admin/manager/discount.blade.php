@extends('admin.layout')
@section('title', 'Sản phẩm')

@section('css')
    <link href="{{ asset('manager/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection()


@section('body')

<div class="page-content">
    <div class="container-fluid">
        <div class="main-body">
            <div class="main-tab on-show" tab-name="Main">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <h4 class="m-b-0">Sản phẩm đang giảm giá</h4>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="align-justify-center">
                                    <a href="#" class="btn btn-default btn-sm flex-right modal-control" data-toggle="modal" atr="Create">Giảm giá<i class="fas fa-plus m-l-5"></i></a> 
                                </div>
                            </div>
                        </div>
                        <div class="m-t-25">
                            <table id="data-table" class="table"> </table>
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
    <div class="modal-dialog">
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
<div class="modal modal-right fade quick-view show" id="modal-update">
    <div class="modal-dialog">
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
<div class="modal modal-right fade quick-view show" id="modal-delete">
    <div class="modal-dialog">
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
    
    <script src="{{ asset('manager/assets/js/page/discount.js') }}"></script>

@endsection()