@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/profit.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section profit-add">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <span class="current">Tính lợi nhuận kinh doanh</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="box-search">
          <div class="control">
            <a href="{{ route('profits-index') }}" class="btn btn-primary btn-edit">Chỉnh sửa</a>
            <a href="{{ route('profits-history', ['id' => 0]) }}" class="btn btn-primary btn-history">Lịch sử</a>
          </div>
        </div>
        <div class="box-form">
          <div class="form-group">
            <label for="managementcosts">Chi phí quản lý doanh nghiệp<span>*</span>:</label>
            <input type="text" class="form-control" name="managementcosts" id="managementcosts" value="18,010,000,000"
              onkeyup="" placeholder="Nhập..." readonly>
          </div>
          <div class="form-group">
            <label for="sellingcosts">Chi phí bán hàng<span>*</span>:</label>
            <input type="text" class="form-control" name="sellingcosts" id="sellingcosts" value="18,010,000,000"
              onkeyup="" placeholder="Nhập..." readonly>
          </div>
          <div class="form-group">
            <label for="financialcosts">Chi phí tài chính<span>*</span>:</label>
            <input type="text" class="form-control" name="financialcosts" id="financialcosts" value="18,010,000,000"
              onkeyup="" placeholder="Nhập..." readonly>
          </div>
          <div class="form-group">
            <label for="othercosts">Chi phí khác<span>*</span>:</label>
            <input type="text" class="form-control" name="othercosts" id="othercosts" value="18,010,000,000"
              onkeyup="" placeholder="Nhập..." readonly>
          </div>
        </div>
      </div>

      <div class="box box-primary">
        <h6 class="box-title">Nhập số liệu tính toán</h6>
        <p class="box-des">Nhập thông tin để tính lợi nhuận kinh doanh của bạn.</p>
        <div class="box-form">
          <div class="form-group">
            <label for="turnover">Doanh thu<span>*</span>:</label>
            <input type="text" class="form-control" name="turnover" id="turnover" value="" onkeyup=""
              placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="ratio">Tỷ lệ GVHB/DT <span>*</span>:</label>
            <input type="text" class="form-control" name="ratio" id="ratio" value="" onkeyup=""
              placeholder="Nhập..." required>
          </div>
        </div>
        <a href="{{ route('profits-result', ['id' => 0]) }}" class="btn btn-primary btn-analysis">Phân tích</a>
      </div>
    </div>
  </div>
@endsection
