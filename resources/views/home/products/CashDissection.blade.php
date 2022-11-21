@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/products/CashDissection.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <div class="banner-default__link">
            <img class="icon img-fluid" src="{{ asset('img/web/link-icon.svg') }}" alt="" />
            <span class="text">Sản phẩm</span>
          </div>
          <h1 class="banner-default__title text-start">GIẢI PHÁP BÓC TÁCH DÒNG TIỀN</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-benefits benefits-product">
    <div class="container">
      <div class="wrap">
        <div class="benefits-product__list">
          <div class="benefits-product__item no-bg">
            <div class="benefits-product__content">
              <h4 class="section-title">Lợi ích của Giải pháp bóc tách dòng tiền</h4>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-cyan-cl">
              <img src="{{ asset('img/web/cash-dissection-1.svg') }}" alt=""
                class="icon img-fluid">
              <p>Bóc tách dòng tiền cá nhân ra khỏi dòng tiền đầu tư, tự doanh, dòng tiền doanh nghiệp
              </p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-purple-cl">
              <img src="{{ asset('img/web/cash-dissection-2.svg') }}" alt=""
                class="icon img-fluid">
              <p>Phân bổ và thiết lập hệ thống dòng tiền bằng <b>phần mềm BossStack</b></p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-green-cl">
              <img src="{{ asset('img/web/cash-dissection-3.svg') }}" alt=""
                class="icon img-fluid">
              <p>Phân tích nền tảng dòng tiền, xử lý và bóc tách các mảnh ghép trong dòng tiền tổng
                quan
                cá nhân</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-why why-product">
    <div class="container">
      <div class="wrap">
        <div class="why-product__content">
          <h4 class="section-title">Tại sao chủ doanh nghiệp cần giải pháp bóc tách dòng tiền?</h4>
          <div class="why-product__list">
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-1.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text"><b>Làm mãi không dư</b></span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-2.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text"><b>Luôn bất an</b> vì không biết cách kiểm soát dòng tiền, dự phòng
                tiền cho tương lai</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-3.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text"><b>Lẫn lộn tiền bạc</b> gia đình, cá nhân và đầu tư, kinh
                doanh</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-4.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text"><b>Không có công cụ</b> để xử lý dòng tiền cá nhân, tự doanh và
                doanh nghiệp</span>
            </div>
          </div>
        </div>
        <img src="{{ asset('img/web/cash-dissection-img-1.png') }}" alt=""
          class="why-product__img img-fluid">
      </div>
    </div>
  </div>

  <div class="section section-help help-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">BossStack giúp bạn bóc tách dòng tiền như thế nào?</h4>
        <div class="help-product__process">
          <div class="help-product__list">
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-1.svg') }}" alt="" class="img-fluid">
              </div>
              <p><b>Hỗ trợ khách hàng</b> xử lý các tình huống thực tế</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-2.svg') }}" alt="" class="img-fluid">
              </div>
              <p><b>Chuyên gia BossStack</b> đồng hành cùng khách hàng trong suốt quá trình thực hiện
                giải pháp</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-3.svg') }}" alt="" class="img-fluid">
              </div>
              <p>Sử dụng <b>phần mềm BossStack</b> để phân tích, đánh giá và hỗ trợ ra quyết định về
                tiền</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-advertise advertise bg-img-w">
    <div class="container">
      <div class="wrap">
        <h3 class="advertise-title">Chúng tôi giải phóng chủ doanh nghiệp khỏi gánh nặng quản lý</h3>
        <a class="btn btn-second btn-size-lg btn-contact" href="{{ asset('contact') }}">Liên hệ</a>
      </div>
    </div>
  </div>
@endsection
