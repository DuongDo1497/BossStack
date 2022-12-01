@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="{{ asset('css/pages/page/cashasset.css') }}">

{{-- <style type="text/css">
    .box-body .form-group .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .box-body .form-group .row .item:nth-child(2n-1) {
        align-self: center;
        margin-bottom: 10px;
    }

    @media only screen and (max-width: 768px) {
        .box-body .form-group {
            margin-bottom: 0;
        }

        .box-body .form-group .row .item:nth-child(2n+2) {
            margin-bottom: 15px;
        }

        .box-body .form-group .row .item label {
            margin-bottom: 0;
        }

        .box-body .form-group:last-child .row .item label {
            margin-bottom: 5px;
        }
    }
</style> --}}
@endsection

@section('content')

@if(session()->has('success'))
@include('layouts.partials.messages.success')
@endif

<div class="section cashasset-edit">
    <div class="breadcrumb">
        <span>Danh mục tài sản - nợ</span> / <span class="current">Chỉnh sửa {{
            $assetstatustypes[$model->assetstatustype] }}</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('cashassets-update', ['id' => $model->id]) }}?continue=true" method="post"
        name="frm" id="frm" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <input type='hidden' name='typereport' value=''>
        <input type='hidden' name='customer_id' value='{{ $customer_id }}'>
        <input type='hidden' name='assetstatustype' value='{{ $model->assetstatustype }}'>
        <input type='hidden' name='cashaccount_id' value='{{ $cashaccount_id }}'>
        <input type='hidden' name='cashaccount_amount' value='{{ $cashaccount_amount }}'>
        <div class="box-content">
            <div class="box box-primary">
                <p class="box-des">Nhập thông tin chi tiết các tài sản - nợ của khách hàng. Để xem lại thông tin chi
                    tiết
                    các tài sản - nợ. Vui lòng xem <a href="#">[tại đây]</a></p>
                <div class="box-form">
                    <div class="form-group">
                        <label for="assetdate">Ngày<span>*</span>:</label>
                        <input type="text" class="form-control" name="assetdate" id="assetdate"
                            value="{{ ConvertSQLDate($model->assetdate) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="assetname">Tài sản<span>*</span>:</label>
                        <input type="text" class="form-control" name="assetname" id="assetname"
                            value="{{ $model->assetname }}" required>
                    </div>
                    <div class="form-group">
                        <label for="assettype">Loại<span>*</span>:</label>
                        <select class="form-control select2" id="assettype" name="assettype" required>
                            <option selected>Chọn loại</option>
                            @foreach($assettypes as $item)
                            @if($item->id == $model->assettype)
                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                            @else
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="assettypedetail">Chi tiết<span>*</span>:</label>
                        <select class="form-control select2" id="assettypedetail" name="assettypedetail" required>
                            <option selected>Chọn chi tiết</option>
                            @foreach($assettypedetails as $item)
                            @if($item->id == $model->assettypedetail)
                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                            @else
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="amount">Số tiền<span>*</span>:</label>
                        <input type="text" class="form-control" name="amount" id="amount"
                            value="{{ formatNumber($model->amount, 1, 0, 0) }}"
                            onkeyup='this.value=formatNumberDecimal(this.value)' required>
                    </div>
                    <div class="form-group">
                        <label for="description">Ghi chú:</label>
                        <input type="text" class="form-control" name="description" id="description"
                            value="{{ $model->description }}">
                    </div>
                    <div class="form-group">
                        <label for="fImages">Hóa đơn chứng từ kèm theo:</label>
                        <div class="form-div">
                            <input type="hidden" name="document" value="{{ $model->document }}">
                            <input type="file" class="form-control" name="fImages" id="fImages">
                            <small>Lưu ý: Gửi kèm các hóa đơn, chứng từ,... kèm theo</small>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-save" onclick="processReports('frm', 'update')">Lưu</button>
            </div>
        </div>
    </form>
</div>

{{-- <div class="row">
    <form role="form" action="{{ route('cashassets-update', ['id' => $model->id]) }}?continue=true" method="post"
        name="frm" id="frm" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">THÔNG TIN {{ mb_strtoupper($assetstatustypes[$model->assetstatustype]) }}</h3>
                    <br><br>
                    <h4 class="box-title">
                        <font color='#000080'>Chỉnh sửa</font>
                    </h4>
                </div>
                {{ csrf_field() }}
                {{ method_field('put') }}
                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='customer_id' value='{{ $customer_id }}'>
                <input type='hidden' name='assetstatustype' value='{{ $model->assetstatustype }}'>
                <input type='hidden' name='cashaccount_id' value='{{ $cashaccount_id }}'>
                <input type='hidden' name='cashaccount_amount' value='{{ $cashaccount_amount }}'>

                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Ngày <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2 col-xs-8 item">
                                <input type='text' class="form-control" name="assetdate" id='assetdate'
                                    value="{{ ConvertSQLDate($model->assetdate) }}" />
                                @if($errors->has('assetdate'))<span class="text-danger">{{ $errors->first('assetdate')
                                    }}</span>@endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Tài sản <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-8 item">
                                <input type='text' class="form-control" name="assetname" id='assetname'
                                    value="{{ $model->assetname }}" />
                                @if($errors->has('assetname'))<span class="text-danger">{{ $errors->first('assetname')
                                    }}</span>@endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Loại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-8 item">
                                <select class="form-control select2" name="assettype">
                                    <option value=""></option>
                                    @foreach($assettypes as $item)
                                    @if($item->id == $model->assettype)
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if($errors->has('assettype'))<span class="text-danger">{{ $errors->first('assettype')
                                    }}</span>@endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Chi tiết :</label>
                            </div>
                            <div class="col-md-4 col-xs-8 item">
                                <select class="form-control select2" name="assettypedetail">
                                    <option value=""></option>
                                    @foreach($assettypedetails as $item)
                                    @if($item->id == $model->assettypedetail)
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if($errors->has('assettypedetail'))<span class="text-danger">{{
                                    $errors->first('assettypedetail') }}</span>@endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Số tiền <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2 col-xs-8 item">
                                <input type="text" class="form-control" name="amount"
                                    value="{{ formatNumber($model->amount, 1, 0, 0) }}"
                                    onkeyup='this.value=formatNumberDecimal(this.value)'>
                                @if($errors->has('amount'))<span class="text-danger">{{ $errors->first('amount')
                                    }}</span>@endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-12">
                                <label>Ghi chú: </label>
                            </div>
                            <div class="col-md-5 col-xs-12">
                                <textarea class="form-control" name="description"
                                    rows="2">{{ $model->description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-12 item">
                                <label>Hóa đơn, chứng từ kèm theo :</label>
                            </div>
                            <div class="col-md-7 col-xs-12 item">
                                <input type="hidden" name="document" value="{{ $model->document }}">
                                <div class="box-body">
                                    <input type="file" name="fImages" style="width: 100%">
                                    <p class="text-danger" style="margin-top: 10px;"><u>Lưu ý:</u> gửi kèm các hóa đơn,
                                        chứng từ ... kèm theo</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <button class="btn btn-success" style="width: 15%;" onclick="processReports('frm', 'update')">Lưu</button>
            <br>
            <hr>
            <a href="{{ route('cashassets-index') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>

        </div>
    </form>
</div> --}}

@endsection

@section('scripts')
@include('product-manage.cashasset.partials.script')
@endsection