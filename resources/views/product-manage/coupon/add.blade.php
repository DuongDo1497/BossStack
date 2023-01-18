@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/coupon.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section coupon-add">
    <div class="breadcrumb">
      <span>Quản lý khách hàng</span> / <a href="#" class="prev">Coupon</a> / <span class="current">Thêm mới
        coupon</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('coupons-store') }}?continue=true" method="post" id="customer-form">
      {{ csrf_field() }}
      <div class="box-content">
        <div class="box box-primary">
          <div class="box-form">
            <div class="form-group">
              <label for="typecoupon">Loại<span>*</span>:</label>
              <select class="form-select select2" name="typecoupon" id="typecoupon">
                <option selected>Chọn loại</option>
                @foreach ($coupontypes as $key => $value)
                  @if ($key == old('typecoupon'))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="key">Mã giảm giá<span>*</span>:</label>
              <input type="text" class="form-control" name="key" id="key" placeholder="Nhập mã coupon"
                required>
            </div>
            <div class="form-group">
              <label for="percent">% giảm giá<span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="percent" id="percent"
                  onkeyup='this.value=formatNumberDecimal(this.value)' placeholder="0" required>
                <span class="input-group-addon">%</span>
              </div>
            </div>
            <div class="form-group">
              <label for="quantity">Số lượng<span>*</span>:</label>
              <input type="text" class="form-control number" name="quantity" id="quantity" placeholder="Nhập số lượng"
                onkeyup='this.value=formatNumberDecimal(this.value)' required>
            </div>
            <div class="form-group">
              <label for="description">Ghi chú:</label>
              <textarea class="form-control" name="description" id="description" rows="5" placeholder="Nhập ghi chú"></textarea>
            </div>
          </div>
          <div class="box-search">
            <div class="control">
              <a href="{{ route('coupons-index') }}" class="btn btn-primary btn-cancel">
                Hủy bỏ
              </a>
              <button type="submit" class="btn btn-primary btn-save">
                Lưu
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  {{-- <div class="row">
    <form role="form" action="{{ route('coupons-store') }}?continue=true" method="post" id="customer-form">
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{ 'Tạo mới mã giảm giá' }}</h3>
          </div>
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label>{{ 'Loại' }}</label>
              <select class="form-control select" name="typecoupon">
                @foreach ($coupontypes as $key => $value)
                  @if ($key == old('typecoupon'))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group{{ $errors->has('key') ? ' has-error' : '' }}">
              <label>{{ 'Mã giảm giá' }}</label>
              <input type="text" class="form-control" placeholder="{{ 'Mã giảm giá' }}" name="key">
              @if ($errors->has('key'))
                <span class="help-block">{{ $errors->first('key') }}</span>
              @endif
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>{{ '% giảm giá' }}</label>
              <input type="text" class="form-control" placeholder="{{ '% giảm giá' }}" name="percent"
                onkeyup='this.value=formatNumberDecimal(this.value)'>
              @if ($errors->has('percent'))
                <span class="text-danger">{{ $errors->first('percent') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label>{{ 'Số lượng' }}</label>
              <input type="text" class="form-control" placeholder="{{ 'Số lượng' }}" name="quantity"
                onkeyup='this.value=formatNumberDecimal(this.value)'>
              @if ($errors->has('quantity'))
                <span class="text-danger">{{ $errors->first('quantity') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label>{{ 'Ghi chú' }}</label>
              <input type="text" class="form-control" placeholder="{{ 'Ghi chú' }}" name="description">
              @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{ 'Chức năng' }}</h3>
          </div>
          <div class="box-body">
            <button type="submit" class="btn btn-primary btn-save" tabindex="9">{{ 'Lưu' }}</button>
            <a href="{{ route('coupons-index') }}" class="btn btn-default btn-cancel"
              tabindex="10">{{ 'Trở về' }}</a>
          </div>
        </div>
      </div>
    </form>
  </div> --}}
@endsection
