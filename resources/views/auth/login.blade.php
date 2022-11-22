@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/login.css') }}">
@endsection

@section('content')
  <div class="section section-login login">
    <div class="container">
      <div class="wrap">
        <form action="{{ route('login') }}" method="post" class="login-form">
          {{ csrf_field() }}
          <img class="img-fluid logo" src="{{ asset('img/web/logo.svg') }}" alt="">
          <div class="login-form__info">
            <div class="form-group">
              <label class="form-label" for="email">Email <span>*</span></label>
              <input type="text" class="form-control" id="email" name="email"
                placeholder="Email *" value="{{ env('TEST_USERNAME') }}" required>
            </div>
            <div class="form-group form-password">
              <label class="form-label" for="password">Mật khẩu <span>*</span></label>
              <input type="password" class="form-control" id="password" name="password"
                placeholder="Mật khẩu *" value="{{ env('TEST_PASSWORD') }}" required>
              <span class="icon-show"><i class="fa-solid fa-eye"></i></span>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="captchacode">Mã kiểm tra <span>*</span></label>
                <input type="captchacode" class="form-control" id="captchacode" name="captchacode"
                  placeholder="Mã kiểm tra *" required>
              </div>
              <img id="captcha" class="img-fluid" name="captcha"
                src="{{ route('apiadmin-getCaptcha') }}">
            </div>
          </div>
          <a class="forgot-password" href="{{ route('customers-forgotPassword') }}">Quên mật khẩu?</a>
          <div class="login-form__button">
            <button type="submit" class="btn btn-second btn-size-lg btn-login">Đăng nhập</button>
            <a href="{{ route('customers-register', ['service_product_id' => 1]) }}"
              class="btn btn-stroke btn-size-lg btn-register">Tạo tài khoản</a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/web/password.js') }}"></script>
@endsection
