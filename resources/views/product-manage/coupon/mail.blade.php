@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/coupon.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section coupon-mail">
    <div class="breadcrumb">
      <span>Quản lý khách hàng</span> / <a href="#" class="prev">Coupon</a> / <span class="current">Gửi mail khách
        hàng mã khuyến mãi</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('coupons-sendMail', ['id' => $model->id]) }}?continue=true" method="post"
      id="coupons-form">
      {{ csrf_field() }}
      {{ method_field('put') }}
      <div class="box-content">
        <div class="box box-primary">
          <div class="box-form">
            <div class="form-group">
              <label>Loại:</label>
              <div class="form-text">
                @foreach ($coupontypes as $key => $value)
                  @if ($key == $model->typecoupon)
                    {{ $value }}
                  @endif
                @endforeach
              </div>
            </div>
            <div class="form-group">
              <label for="key">Mã giảm giá:</label>
              <input type="text" class="form-control" name="key" id="key" value="{{ $model->key }}"
                readonly>
            </div>
            <div class="form-group">
              <label for="percent">% giảm giá:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="percent" id="percent"
                  value="{{ $model->percent }}" readonly>
                <span class="input-group-addon">%</span>
              </div>
            </div>
            <div class="form-group">
              <label for="quantity">Số lượng<span>*</span>:</label>
              <input type="text" class="form-control number" name="quantity" id="quantity"
                value="{{ $model->quantity }}" readonly>
            </div>
            <div class="form-group">
              <label for="description">Ghi chú:</label>
              <textarea class="form-control" name="description" id="description" rows="5" readonly>{{ $model->description }}</textarea>
            </div>
            <div class="form-group">
              <label for="email">Email nhận<span>*</span>:</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Nhập email nhận..."
                required>
            </div>
          </div>
          <div class="box-search">
            <div class="control">
              <a href="{{ route('coupons-index') }}" class="btn btn-primary btn-cancel">
                Hủy bỏ
              </a>
              <button type="submit" class="btn btn-primary btn-save">
                <img class="icon" src="{{ asset('img/icon-send-mail-w.svg') }}" alt="">
                Gửi mail
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  {{-- <div class="row">
    <form role="form" action="{{ route('coupons-sendMail', ['id' => $model->id]) }}?continue=true" method="post"
      id="coupons-form">
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{ 'Gửi mail khách hàng mã khuyến mãi' }}</h3>
          </div>
          {{ csrf_field() }}
          {{ method_field('put') }}
          <input type="hidden" name="quantitied" value="{{ $model->quantitied }}">
          <div class="box-body">
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-xs-5 item">
                  <label>Loại:</label>
                </div>
                <div class="col-md-4 col-xs-7 item">
                  @foreach ($coupontypes as $key => $value)
                    @if ($key == $model->typecoupon)
                      {{ $value }}
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="form-group{{ $errors->has('key') ? ' has-error' : '' }}">
              <div class="row">
                <div class="col-md-3 col-xs-5 item">
                  <label>Mã giảm giá:</label>
                </div>
                <div class="col-md-4 col-xs-7 item">
                  {{ $model->key }}
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-xs-5 item">
                  <label>% giảm giá:</label>
                </div>
                <div class="col-md-4 col-xs-7 item">
                  {{ $model->percent }}
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-xs-5 item">
                  <label>Số lượng:</label>
                </div>
                <div class="col-md-4 col-xs-7 item">
                  {{ $model->quantity }}
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-xs-5 item">
                  <label>Số lượng chưa sử dụng:</label>
                </div>
                <div class="col-md-4 col-xs-7 item">
                  {{ $model->quantitied }}
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-xs-5 item">
                  <label>Ghi chú:</label>
                </div>
                <div class="col-md-4 col-xs-7 item">
                  {{ $model->description }}
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-xs-5 item">
                  <label>Email nhận:</label>
                </div>
                <div class="col-md-8 col-xs-7 item">
                  <input type="text" class="form-control" name="email" value="" tabindex="1">
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>
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
            <button type="submit" class="btn btn-primary btn-save" tabindex="9">{{ 'Gửi mail' }}</button>
            <a href="{{ route('coupons-index') }}" class="btn btn-default btn-cancel"
              tabindex="10">{{ 'Trở về' }}</a>
          </div>
        </div>
      </div>
    </form>
  </div> --}}
@endsection

@section('scripts')
  <script>
    $(function() {
      $('.btn-save').click(function() {
        $('#coupons-form').submit();
      });
    });
  </script>
@endsection
