<header class="header animate__animated">
  <div class="container">
    <div class="wrap">
      <a href="{{ asset('/') }}" class="logo">
        <img class="img-fluid logo-w" src="{{ asset('img/web/logo-w.svg') }}" alt="">
        <img class="img-fluid logo-cl" src="{{ asset('img/web/logo.svg') }}" alt="">
      </a>
      @include('home.menu')
      <div class="button-control">
        <a href="#" class="btn btn-stroke btn-size-md btn-register">Đăng ký</a>
        <a href="#" class="btn btn-primary btn-size-md btn-login">Đăng nhập</a>
      </div>
      <button type="button" class="nav-bars">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </div>
</header>
