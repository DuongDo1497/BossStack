@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/products/DataConvert.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <div class="banner-default__link">
            <img class="icon img-fluid" src="{{ asset('img/web/link-icon.svg') }}" alt="" />
            <span class="text">Dịch vụ</span>
          </div>
          <h1 class="banner-default__title text-start">GIẢI PHÁP CHUYỂN ĐỔI DỮ LIỆU</h1>
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
              <h4 class="section-title">Lợi ích giải pháp chuyển đổi dữ liệu</h4>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-cyan-cl">
              <img src="{{ asset('img/web/cash-dissection-10.svg') }}" alt=""
                class="icon img-fluid">
              <p>BossStack giúp doanh nghiệp phân tích sản phẩm lõi và xác định mô hình kinh doanh</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-purple-cl">
              <img src="{{ asset('img/web/cash-dissection-11.svg') }}" alt=""
                class="icon img-fluid">
              <p>Hệ thống hóa và quản trị dữ liệu bằng phần mềm Microsoft 365 Business</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-green-cl">
              <img src="{{ asset('img/web/cash-dissection-12.svg') }}" alt=""
                class="icon img-fluid">
              <p>Thiết lập luồng cơ bản dữ liệu doanh nghiệp</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-why why-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Tại sao chủ doanh nghiệp cần <br />giải pháp chuyển đổi dữ liệu?
        </h4>
        <div class="why-product__content">
          <div class="why-product__list">
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-11.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text"><b>Dữ liệu, thông tin lưu trữ không đồng bộ</b>, chồng chéo, khó
                kiểm soát</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-12.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text"><b>Khó khăn</b> trong việc <b>bảo mật thông tin</b> tài liệu</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-13.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text"><b>Ra quyết định</b> thiếu chính xác vì không đủ dữ liệu báo
                cáo</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-14.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text">Không có thông tin kịp thời cho các cuộc họp quan trọng, làm việc
                với đối tác và khách hàng</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-15.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text"><b>Thất thoát dữ liệu</b> khi thay đổi nhân sự</span>
            </div>
          </div>
        </div>
        <img src="{{ asset('img/web/cash-dissection-img-3.png') }}" alt=""
          class="why-product__img img-fluid">
      </div>
    </div>
  </div>

  <div class="section section-help help-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">BossStack giúp doanh nghiệp chuyển đổi dữ liệu như thế nào?</h4>
        <div class="help-product__process">
          <div class="help-product__list">
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-11.png') }}" alt="" class="img-fluid">
              </div>
              <p>Hỗ trợ khách hàng xử lý các tình huống thực tế về chuyển đổi dữ liệu doanh nghiệp</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-12.png') }}" alt="" class="img-fluid">
              </div>
              <p>Chuyên gia BossStack đồng hành cùng khách hàng trong suốt quá trình thực hiện giải
                pháp</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-13.png') }}" alt="" class="img-fluid">
              </div>
              <p>Thực hành trực trên phần mềm Microsoft 365 Business để phân tích, đánh giá giải pháp
                chuyển đổi dữ liệu</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-advertise advertise bg-img-blue">
    <div class="container">
      <div class="wrap">
        <h3 class="advertise-title">Chúng tôi giải phóng chủ doanh nghiệp khỏi gánh nặng quản lý</h3>
        <a class="btn btn-second btn-size-lg btn-contact" href="{{ asset('contact') }}">Liên hệ</a>
      </div>
    </div>
  </div>
@endsection
