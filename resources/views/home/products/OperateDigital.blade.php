@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/products/OperateDigital.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <div class="banner-default__link">
            <img class="icon img-fluid" src="{{ asset('img/web/link-icon.svg') }}" alt="icon" />
            <span class="text">Dịch vụ</span>
          </div>
          <h1 class="banner-default__title text-start">GIẢI PHÁP VẬN HÀNH SỐ<br />CHUYÊN SÂU</h1>
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
              <h4 class="section-title">Điểm khác biệt của giải pháp vận hành số chuyên sâu</h4>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-cyan-cl">
              <img src="{{ asset('img/web/cash-dissection-13.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Tiết kiệm 87% thời gian quản lý dự án của doanh nghiệp</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-purple-cl">
              <img src="{{ asset('img/web/cash-dissection-14.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Tăng 55% hiệu suất công việc của từng nhân sự ở các phòng ban</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-green-cl">
              <img src="{{ asset('img/web/cash-dissection-15.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>95% doanh nghiệp tinh gọn quy trình, linh hoạt trong việc ra quyết định</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-why why-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Tại sao doanh nghiệp<br /> cần giải pháp vận hành số chuyên sâu?
        </h4>
        <div class="why-product__content">
          <div class="why-product__list">
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-16.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Thiếu quy trình làm việc, vận hành khó khăn, thiếu tính liên kết
                giữa các phòng ban, luồng công việc bị ngắt quãng</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-17.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Thiếu quy chuẩn đánh giá chính xác năng lực nhân viên dựa trên cơ
                sở dữ liệu</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-18.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Thất thoát nhiều chi phí vận hành doanh nghiệp: nhân sự, hàng hóa,
                tài chính</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-19.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Gánh nặng vận hành đặt hết phần lớn lên vai chủ doanh nghiệp</span>
            </div>
          </div>
        </div>
        <img src="{{ asset('img/web/cash-dissection-img-4.png') }}" alt="background image"
          class="why-product__img img-fluid">
      </div>
    </div>
  </div>

  <div class="section section-help help-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">BossStack giúp doanh nghiệp thực thi<br />giải pháp vận hành số chuyên sâu như thế nào?
        </h4>
        <div class="help-product__process">
          <div class="help-product__list">
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-14.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Thu thập thông tin dữ liệu của doanh nghiệp</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-15.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Khảo sát tình trạng thực tế tại doanh nghiệp</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-16.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>BossStack đồng hành thực thi giải pháp vận hành số cùng doanh nghiệp</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-17.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Chuyển giao bộ kế hoạch vận hành số chi tiết và bộ hướng dẫn sử dụng phần mềm
                Microsoft</p>
            </div>
            {{-- <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-18.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Phân tích, đánh giá tổng quan và lên kế hoạch chi tiết giải pháp vận hành số bằng
                phần mềm Microsoft và đội ngũ chuyên gia BossStack</p>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="section section-advertise advertise bg-img-blue">
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
          <h3>GIẢI PHÁP VẬN HÀNH SỐ CHUYÊN SÂU</h3>
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
            <input type='hidden' name='course' value='9'>
            <input type='hidden' name='solution' value='4'>
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
