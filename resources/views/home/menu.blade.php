<ul class="menu-main menu-main__parent">
  <li class="menu-main__item">
    <a class="menu-main__link" href="#">
      <span class="text">Sản phẩm</span>
      <img class="icon img-fluid" src="{{ asset('img/web/icon-down.svg') }}" alt="icon">
      <img class="icon-w img-fluid" src="{{ asset('img/web/icon-down-w.svg') }}" alt="icon">
    </a>
    <ul class="menu-main__child animate__animated" style="visibility: hidden">
      <li>
        <a href="{{ asset('/products/cash-flow-dissection') }}">Bóc tách dòng tiền</a>
      </li>
      <li>
        <a href="{{ asset('/products/cash-flow-execution') }}">Thực thi dòng tiền chuyên sâu</a>
      </li>
      <li>
        <a href="{{ asset('/products/loss-control') }}">Kiểm soát thất thoát doanh nghiệp</a>
      </li>
    </ul>
  </li>
  <li class="menu-main__item">
    <a class="menu-main__link" href="#">
      <span class="text">Dịch vụ</span>
      <img class="icon img-fluid" src="{{ asset('img/web/icon-down.svg') }}" alt="icon">
      <img class="icon-w img-fluid" src="{{ asset('img/web/icon-down-w.svg') }}" alt="icon">
    </a>
    <ul class="menu-main__child animate__animated" style="visibility: hidden">
      <li>
        <a href="{{ asset('/products/data-convert') }}">Chuyển đổi dữ liệu</a>
      </li>
      <li>
        <a href="{{ asset('/products/operate-digital') }}">Vận hành số chuyên sâu</a>
      </li>
    </ul>
  </li>
  <li class="menu-main__item">
    <a class="menu-main__link" href="{{ asset('package') }}">
      <span class="text">Gói giải pháp</span>
    </a>
  </li>
  <li class="menu-main__item">
    <a class="menu-main__link" href="{{ asset('about-us') }}">
      <span class="text">Về chúng tôi</span>
    </a>
  </li>
  <li class="menu-main__item button-control">
    <a href="{{ route('customers-register', ['service_product_id' => 1]) }}"
      class="btn btn-primary btn-size-full btn-register">Tạo tài khoản</a>
    <a href="{{ route('login') }}" class="btn btn-stroke btn-size-full btn-login">Đăng nhập</a>
  </li>
</ul>
