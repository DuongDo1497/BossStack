@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/products/CashExecution.css') }}">
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
          <h1 class="banner-default__title text-start">GIẢI PHÁP THỰC THI DÒNG TIỀN CHUYÊN SÂU</h1>
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
              <h4 class="section-title">Điểm khác biệt <br />Giải pháp thực thi dòng tiền chuyên sâu
              </h4>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-cyan-cl">
              <img src="{{ asset('img/web/cash-dissection-4.svg') }}" alt=""
                class="icon img-fluid">
              <p>Tiết kiệm 87% thời gian quản lý, xử lý và đưa ra các quyết định về tiền</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-purple-cl">
              <img src="{{ asset('img/web/cash-dissection-5.svg') }}" alt=""
                class="icon img-fluid">
              <p>Hệ thống <b>phần mềm BossStack</b> tùy chỉnh phù hợp với tình hình tài chính của từng
                khách hàng</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-green-cl">
              <img src="{{ asset('img/web/cash-dissection-6.svg') }}" alt=""
                class="icon img-fluid">
              <p>Tách bạch dòng tiền cá nhân và doanh nghiệp giúp khách hàng dễ dàng lên kế hoạch mục
                tiêu tài chính gia đình và doanh nghiệp</p>
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
          <h4 class="section-title">Tại sao chủ doanh nghiệp cần giải pháp thực thi dòng tiền chuyên
            sâu?</h4>
          <div class="why-product__list">
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-2.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text">Chủ doanh nghiệp thường không thể tách dòng tiền cá nhân của mình
                ra khỏi doanh nghiệp.</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-5.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text">Không quản lý được nguồn vốn doanh nghiệp gây thiếu hụt vốn và mất
                nhiều cơ hội kinh doanh.</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-4.svg') }}" alt=""
                class="icon img-fluid">
              <span class="text">Thiếu công cụ phân bổ dòng tiền ảnh hưởng đến hoạt động doanh
                nghiệp, đặc biệt trong thị trường nhiều biến động.</span>
            </div>
          </div>
        </div>
        <img src="{{ asset('img/web/cash-dissection-img-2.png') }}" alt=""
          class="why-product__img img-fluid">
      </div>
    </div>
  </div>

  <div class="section section-help help-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">BossStack giúp bạn thực thi dòng tiền chuyên sâu như thế nào?</h4>
        <div class="help-product__process">
          <div class="help-product__list">
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-4.svg') }}" alt="" class="img-fluid">
              </div>
              <p><b>Khảo sát thực tế</b>, thu thập thông tin dữ liệu thực tế của khách hàng</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-5.svg') }}" alt="" class="img-fluid">
              </div>
              <p><b>Phân tích</b> và <b>đánh giá tổng quan tài chính</b> của khách hàng bằng phần mềm
                và đội ngũ
                chuyên gia BossStack</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-6.svg') }}" alt="" class="img-fluid">
              </div>
              <p><b>Chuyển giao bộ kế hoạch</b> bóc tách dòng tiền, bộ hướng dẫn sử dụng <b>phần mềm
                  BossStack</b>
                chi tiết</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-7.svg') }}" alt="" class="img-fluid">
              </div>
              <p><b>BossStack đồng hành</b> thực thi dòng tiền chuyên sâu cùng khách hàng</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="section section-advertise advertise bg-img-w">
    <div class="container">
      <div class="wrap">
        <h3 class="advertise-title">Chúng tôi giải phóng chủ doanh nghiệp khỏi gánh nặng quản lý</h3>
        <a class="btn btn-second btn-size-lg btn-contact" href="{{ asset('contact') }}">Liên hệ</a>
      </div>
    </div>
  </div> --}}

  <div class="section section-advice advice">
    <div class="container">
      <div class="wrap">
        <div class="advice-left">
          <h4>SẢN PHẨM</h4>
          <h3>GIẢI PHÁP THỰC THI DÒNG TIỀN CHUYÊN SÂU</h3>
        </div>
        <div class="advice-right">
          <h6>ĐĂNG KÝ NHẬN TƯ VẤN</h6>
          <form action="" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="fullname" name="fullname"
                placeholder="Họ và tên *" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="phone" name="phone"
                placeholder="Số điện thoại *" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email"
                placeholder="Email *" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="company" name="company"
                placeholder="Công ty">
            </div>
            <div class="form-group">
              <select class="form-select">
                <option selected>Quy mô công ty</option>
                <option value="">Dưới 30 nhân viên</option>
                <option value="">Từ 30 - 50 nhân viên</option>
                <option value="">Từ 50 - 100 nhân viên</option>
                <option value="">Trên 100 nhân viên</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="position" name="position"
                placeholder="Chức vụ">
            </div>

            <button type="submit" class="btn btn-second btn-size-lg btn-register">ĐĂNG KÝ
              NGAY</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
