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

    <form role="form" action="{{ route('profits-updateConfig', ['id' => $model->id]) }}?continue=true" method="post" id="frm">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <input type='hidden' name='typereport' value=''>
    <input type='hidden' name='customer_id' value='{{ $customer_id }}'>
    <div class="box-content">
      <div class="box box-primary">
        <h6 class="box-title">Nhập số liệu tính toán</h6>
        <div class="box-form">
          <div class="form-group">
            <label for="financialcosts">Chi phí tài chính<span>*</span>:</label>
            <div class="input-group">
              <input type="text" class="form-control number" name="chiphitaichinh" id="chiphitaichinh" value="{{ formatNumber($model->chiphitaichinh, 1, 0, 0) }}"
                placeholder="Nhập..." onkeyup='this.value=formatNumberDecimal(this.value)' required>
              <span class="input-group-addon">&#8363;</span>
            </div>
          </div>
          <div class="form-group">
            <label for="sellingcosts">Chi phí bán hàng<span>*</span>:</label>
            <div class="input-group">
              <input type="text" class="form-control number" name="chiphibanhang" id="chiphibanhang" value="{{ formatNumber($model->chiphibanhang, 1, 0, 0) }}"
                onkeyup='this.value=formatNumberDecimal(this.value)' required placeholder="Nhập...">
              <span class="input-group-addon">&#8363;</span>
            </div>
          </div>
          <div class="form-group">
            <label for="managementcosts">Chi phí quản lý doanh nghiệp<span>*</span>:</label>
            <div class="input-group">
              <input type="text" class="form-control number" name="chiphiquanlydoanhnghiep" id="chiphiquanlydoanhnghiep" value="{{ formatNumber($model->chiphiquanlydoanhnghiep, 1, 0, 0) }}"
                onkeyup='this.value=formatNumberDecimal(this.value)' required placeholder="Nhập...">
              <span class="input-group-addon">&#8363;</span>
            </div>
          </div>
          <div class="form-group">
            <label for="othercosts">Chi phí khác<span>*</span>:</label>
            <div class="input-group">
              <input type="text" class="form-control number" name="chiphikhac" id="chiphikhac" value="{{ formatNumber($model->chiphikhac, 1, 0, 0) }}"
                onkeyup='this.value=formatNumberDecimal(this.value)' required placeholder="Nhập...">
              <span class="input-group-addon">&#8363;</span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-analysis">Cập nhật</button>
      </div>
    </div>
    </form>
  </div>

@endsection
