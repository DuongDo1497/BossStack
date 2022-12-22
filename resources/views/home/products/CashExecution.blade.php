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
            <img class="icon img-fluid" src="{{ asset('img/web/link-icon.svg') }}" alt="icon" />
            <span class="text">Sản phẩm</span>
          </div>
          <h1 class="banner-default__title text-start">GIẢI PHÁP THỰC THI DÒNG TIỀN DOANH NGHIỆP</h1>
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
              <h4 class="section-title">Giải pháp thực thi dòng tiền doanh nghiệp phù hợp với​</h4>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-cyan-cl">
              <img src="{{ asset('img/web/cash-dissection-6.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Doanh nghiệp có nhu cầu tăng vốn giúp mở rộng, phát triển kinh doanh, IPO và có nhu cầu mời các nhà đầu
                tư hỗ trợ doanh nghiệp​</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-purple-cl">
              <img src="{{ asset('img/web/cash-dissection-16.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Doanh nghiệp có nhu cầu mua lại hoặc sáp nhập với một doanh nghiệp khác nhằm mở rộng lĩnh vực kinh doanh,
                phát triển thị trường​</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-green-cl">
              <img src="{{ asset('img/web/cash-dissection-5.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Doanh nghiệp cần có chiến lược quản trị và bóc tách các dòng tiền kinh doanh, dòng tiền tài chính</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-why why-product reverse">
    <div class="container">
      <div class="wrap">
        <div class="why-product__content">
          <h4 class="section-title">Điểm khác biệt giải pháp thực thi dòng tiền doanh nghiệp</h4>
          <div class="why-product__list">
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-20.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Tiết kiệm 87% thời gian quản lý, xử lý và đưa ra các quyết định về tiền</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-21.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Hệ thống <b>phần mềm BossStack</b> tùy chỉnh phù hợp với tình hình tài chính của từng
                khách
                hàng</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-22.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Cung cấp bức tranh tài chính tổng thể​<br />Quản trị dòng tiền hoạt động​​<br />Kiểm
                soát rủi ro tài chính​</span>
            </div>
          </div>
        </div>
        <img src="{{ asset('img/web/cash-dissection-img-5.png') }}" alt="background image"
          class="why-product__img img-fluid">
      </div>
    </div>
  </div>

  <div class="section section-why why-product">
    <div class="container">
      <div class="wrap">
        <div class="why-product__content">
          <h4 class="section-title">Tại sao chủ doanh nghiệp cần giải pháp thực thi dòng tiền doanh nghiệp?</h4>
          <div class="why-product__list">
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-2.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Doanh nghiệp chưa có bức tranh tài chính tổng thể, không quản trị được dòng tiền hoạt
                động và rủi ro tài chính​.</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-5.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Không quản lý được nguồn vốn doanh nghiệp gây thiếu hụt vốn và mất
                nhiều cơ hội kinh doanh.</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-4.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Thiếu công cụ phân bổ dòng tiền ảnh hưởng đến hoạt động doanh
                nghiệp, đặc biệt trong thị trường nhiều biến động.</span>
            </div>
          </div>
        </div>
        <img src="{{ asset('img/web/cash-dissection-img-2.png') }}" alt="background image"
          class="why-product__img img-fluid">
      </div>
    </div>
  </div>

  <div class="section section-help help-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">BossStack giúp bạn thực thi dòng tiền doanh nghiệp như thế nào?</h4>
        <div class="help-product__process">
          <div class="help-product__list">
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-4.svg') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Khảo sát thực tế, thu thập thông tin dữ liệu thực tế của khách hàng</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-5.svg') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Phân tích và đánh giá tổng quan tài chính của khách hàng bằng phần mềm và đội ngũ chuyên gia BossStack
              </p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-6.svg') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Chuyển giao bộ kế hoạch bóc tách dòng tiền, bộ hướng dẫn sử dụng phần mềm BossStack chi tiết</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-7.svg') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>BossStack đồng hành thực thi dòng tiền chuyên sâu cùng khách hàng</p>
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
          <h3>GIẢI PHÁP THỰC THI DÒNG TIỀN DOANH NGHIỆP</h3>
        </div>
        <div class="advice-right">
          <h6>ĐĂNG KÝ NHẬN TƯ VẤN</h6>
          @if (isset($infor))
            <div class="alert alert-success">
              {{ $infor }}
            </div>
          @endif
          <form action="{{ route('coaching-store') }}?continue=true" method="post" id="frm">
            {{ csrf_field() }}
            <input type='hidden' name='course' value='8'>
            <input type='hidden' name='solution' value='2'>
            <input type='hidden' name='typereport' value='1'>
            <div class="form-group">
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên *"
                required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại *"
                required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email *"
                required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="content" name="content" placeholder="Công ty">
            </div>
            <div class="form-group">
              <select class="form-select" name="companytype">
                <option value="">Quy mô công ty</option>
                @foreach ($companytypes as $key => $value)
                  @if ($key != '')
                    @if ($key == old('companytype'))
                      <option value="{{ $key }}" selected>{{ $value }}</option>
                    @else
                      <option value="{{ $key }}">{{ $value }}</option>
                    @endif
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="title" name="title" placeholder="Chức vụ">
            </div>
            <button type="submit" class="btn btn-second btn-size-lg btn-register">ĐĂNG KÝ
              NGAY</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
