@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/noti.css') }}">
@endsection

@section('content')
  <div class="section section-noti noti">
    <div class="container">
      <div class="wrap">
        <div class="noti-top">
          <h5 class="noti-top__title">App BossStack Coming soon</h5>
          <p class="noti-top__des">Vui lòng trải nghiệm trên phiên bản website</p>
          <img class="img-fluid noti-img" src="{{ asset('img/web/noti-img-1.png') }}" alt="noti-image">
          <div class="noti-top__icon">
            <img class="img-fluid" src="{{ asset('img/web/noti-icon-1.png') }}" alt="">
            <img class="img-fluid" src="{{ asset('img/web/noti-icon-2.png') }}" alt="">
          </div>
        </div>
        <div class="noti-line">hoặc</div>
        <div class="noti-bottom">
          <p class="noti-bottom__text">Liên hệ với chúng tôi để biết thêm thông tin chi tiết</p>
          <a class="noti-bottom__link" href="{{ route('contact') }}">
            Đến trang liên hệ
            <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
