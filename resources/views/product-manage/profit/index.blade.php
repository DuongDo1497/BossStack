@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/profit.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section profit-index">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <span class="current">Tính lợi nhuận kinh doanh</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <h6 class="box-title">Nhập số liệu tính toán</h6>
        <p class="box-des">Nhập thông tin để tính lợi nhuận kinh doanh của bạn.</p>
        <div class="box-form">
          <div class="form-group">
            <label for="managementcosts">Chi phí quản lý doanh nghiệp<span>*</span>:</label>
            <input type="text" class="form-control" name="managementcosts" id="managementcosts" value=""
              onkeyup="" placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="sellingcosts">Chi phí bán hàng<span>*</span>:</label>
            <input type="text" class="form-control" name="sellingcosts" id="sellingcosts" value="" onkeyup=""
              placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="financialcosts">Chi phí tài chính<span>*</span>:</label>
            <input type="text" class="form-control" name="financialcosts" id="financialcosts" value=""
              onkeyup="" placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="othercosts">Chi phí khác<span>*</span>:</label>
            <input type="text" class="form-control" name="othercosts" id="othercosts" value="" onkeyup=""
              placeholder="Nhập..." required>
          </div>
        </div>
        <a href="{{ route('profits-add') }}" class="btn btn-primary btn-analysis">Phân tích</a>
      </div>
    </div>
  </div>

  {{-- <a href="{{ route('profits-add') }}" class="btn btn-default">Tạo mới</a><br>
<a href="{{ route('profits-edit',['id'=> 0]) }}" class="btn btn-default">Chỉnh sửa</a><br>
<a href="{{ route('profits-history',['id'=> 0]) }}" class="btn btn-default">Lịch sử</a><br>
<a href="{{ route('profits-result',['id'=> 0]) }}" class="btn btn-default">Kết quả</a><br> --}}
@endsection
