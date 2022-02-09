@extends('admin.layout')
@section('title', 'Danh mục')

@section('css')
    <link href="{{ asset("manager/plugins/datatables/dataTables.bootstrap4.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("manager/plugins/datatables/responsive.bootstrap4.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("manager/plugins/datatables/buttons.bootstrap4.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("manager/plugins/datatables/select.bootstrap4.css") }}" rel="stylesheet" type="text/css" />
@endsection()


@section('body')

<div class="page-content">
    <div class="container-fluid">


        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-10">
                            <div class="col-sm-12 col-md-6">
                                <h4 class="card-title">Danh mục sản phẩm</h4>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="align-justify-center">
                                    <a href="#" class="btn btn-default btn-sm flex-right modal-control" data-toggle="modal" atr="Create">Danh mục<i class="fas fa-plus m-l-5"></i></a> 
                                </div>
                            </div>
                        </div>
                        <table id="data-table" class="table dt-responsive nowrap"> </table>
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

<script src="{{ asset('manager/assets/js/page/category.js') }}"></script>

@endsection()