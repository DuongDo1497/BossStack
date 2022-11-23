@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/payments.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <h1 class="banner-default__title text-center">Thanh toán</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-payment payment">
    <div class="container">
      <div class="wrap">
        <div class="payment-left">
          <div class="payment-customer">
            <h6 class="payment-title">Thông tin khách hàng</h6>
            <div class="payment-content">
              <p>
                <span class="title">Họ và tên</span>
                <span class="text">Tên khách hàng</span>
              </p>
              <p>
                <span class="title">Email</span>
                <span class="text">mailkhachhang@gmail.com</span>
              </p>
              <p>
                <span class="title">Địa chỉ</span>
                <span class="text">Landmark 81 Vinhomes Central Park, 720A Điện Biên Phủ, Phường 22,
                  Quận Bình Thạnh, Tp Hồ Chí Minh.</span>
              </p>
              <p>
                <span class="title">Điện thoại</span>
                <span class="text">0123456789</span>
              </p>
            </div>
          </div>
          <div class="payment-form">
            <h6 class="payment-title">Hình thức thanh toán</h6>
          </div>
        </div>
        <div class="payment-right">
          <div class="payment-order">
            <h6 class="payment-title">Thông tin đơn hàng</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
