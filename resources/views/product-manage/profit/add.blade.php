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
    <form role="form" action="{{ route('profits-process') }}?continue=true" method="post" id="frm">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value=''>
      <input type='hidden' name='customer_id' value='{{ $customer_id }}'>

      <div class="box-content">
        <div class="box box-primary">
          <div class="box-search">
            <div class="control">
              <a href="{{ route('profits-editConfig', ['id' => $profitbusinessconfig->id]) }}"
                class="btn btn-primary btn-edit">Chỉnh sửa</a>
            </div>
          </div>
          <div class="box-form">
            <div class="form-group">
              <label for="financialcosts">Chi phí tài chính:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="chiphitaichinh" id="chiphitaichinh"
                  value="{{ formatNumber($profitbusinessconfig->chiphitaichinh, 1, 0, 0) }}" placeholder="Nhập..."
                  onkeyup='this.value=formatNumberDecimal(this.value)' readonly>
                <span class="input-group-addon">&#8363;</span>
              </div>
            </div>
            <div class="form-group">
              <label for="sellingcosts">Chi phí bán hàng:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="chiphibanhang" id="chiphibanhang"
                  value="{{ formatNumber($profitbusinessconfig->chiphibanhang, 1, 0, 0) }}"
                  onkeyup='this.value=formatNumberDecimal(this.value)' readonly placeholder="Nhập...">
                <span class="input-group-addon">&#8363;</span>
              </div>
            </div>
            <div class="form-group">
              <label for="managementcosts">Chi phí quản lý doanh nghiệp:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="chiphiquanlydoanhnghiep"
                  id="chiphiquanlydoanhnghiep"
                  value="{{ formatNumber($profitbusinessconfig->chiphiquanlydoanhnghiep, 1, 0, 0) }}"
                  onkeyup='this.value=formatNumberDecimal(this.value)' readonly placeholder="Nhập...">
                <span class="input-group-addon">&#8363;</span>
              </div>
            </div>
            <div class="form-group">
              <label for="othercosts">Chi phí khác:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="chiphikhac" id="chiphikhac"
                  value="{{ formatNumber($profitbusinessconfig->chiphikhac, 1, 0, 0) }}"
                  onkeyup='this.value=formatNumberDecimal(this.value)' readonly placeholder="Nhập...">
                <span class="input-group-addon">&#8363;</span>
              </div>
            </div>
            <div class="form-group">
              <label for="total">Tổng cộng:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="tongcong" id="tongcong"
                  value="{{ formatNumber($profitbusinessconfig->chiphitaichinh + $profitbusinessconfig->chiphibanhang + $profitbusinessconfig->chiphiquanlydoanhnghiep + $profitbusinessconfig->chiphikhac, 1, 0, 0) }}"
                  onkeyup='this.value=formatNumberDecimal(this.value)' readonly placeholder="Nhập...">
                <span class="input-group-addon">&#8363;</span>
              </div>
            </div>
          </div>
        </div>

        <div class="box box-primary">
          <h6 class="box-title">Nhập số liệu tính toán</h6>
          <p class="box-des">Nhập thông tin để tính lợi nhuận kinh doanh của bạn.</p>
          <div class="box-form">
            <div class="form-row">
              <div class="form-group">
                <label for="">Tháng:</label>
                <input type="text" class="form-control" name="month" id="month" value=""
                  placeholder="Nhập..." onkeypress='return numbersonly(this, event)' required>
              </div>
              <div class="form-group">
                <label for="">Năm:</label>
                <input type="text" class="form-control" name="year" id="year" value=""
                  placeholder="Nhập..." onkeypress='return numbersonly(this, event)' required>
              </div>
            </div>
            <div class="form-group">
              <label for="turnover">Doanh thu thuần<span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="doanhthuthuan" id="doanhthuthuan"
                  value="" placeholder="Nhập..." onkeyup='this.value=formatNumberDecimal(this.value)' required>
                <span class="input-group-addon">&#8363;</span>
              </div>
            </div>
            <div class="form-group">
              <label for="profitother">Doanh thu TC + TN khác<span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="doanhthutc_tnkhac" id="doanhthutc_tnkhac"
                  value="" placeholder="Nhập..." onkeyup='this.value=formatNumberDecimal(this.value)' required>
                <span class="input-group-addon">&#8363;</span>
              </div>
            </div>
            <div class="form-group">
              <label for="ratio">Tỷ lệ GVHB/DT <span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="tylegvhb_dt" id="tylegvhb_dt" value=""
                  placeholder="Nhập..." onkeyup='this.value=formatNumberDecimal(this.value)' required>
                <span class="input-group-addon">&#37;</span>
              </div>
            </div>
            <div class="form-group">
              <label for="expectedprofit">Tỷ suất Lợi Nhuận kỳ vọng <span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="tisuatloinhuankyvong"
                  id="tisuatloinhuankyvong" value="" placeholder="Nhập..."
                  onkeyup='this.value=formatNumberDecimal(this.value)' required>
                <span class="input-group-addon">&#37;</span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-analysis">Phân tích</button>
        </div>
      </div>
    </form>
  </div>
@endsection
