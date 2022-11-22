<header class="header animate__animated">
  <div class="container">
    <div class="wrap">
      <a href="{{ asset('/') }}" class="logo">
        <img class="img-fluid logo-w" src="{{ asset('img/web/logo-w.svg') }}" alt="">
        <img class="img-fluid logo-cl" src="{{ asset('img/web/logo.svg') }}" alt="">
      </a>
      @include('home.menu')
      <div class="button-control">
        <a href="{{ route('login') }}" class="btn btn-stroke btn-size-md btn-login">Đăng nhập</a>
        <a href="{{ route('customers-register', ['service_product_id' => 1]) }}"
          class="btn btn-primary btn-size-md btn-register">Tạo tài khoản</a>
      </div>
      <button type="button" class="nav-bars">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </div>
</header>
