@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">

LỊCH SỬ TÀI SẢN

        </div>
        <!-- /.box -->
    </div>
</div>

<a href="javascript:closeWindow();" style="width: 16%;"><i class="far fa-times-circle"></i> Thoát</a>   

@endsection

@section('scripts')
@include('product-manage.cashasset.partials.script')
@endsection

