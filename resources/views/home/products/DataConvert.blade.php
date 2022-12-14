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
            <img class="icon img-fluid" src="{{ asset('img/web/link-icon.svg') }}" alt="icon" />
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
              <img src="{{ asset('img/web/cash-dissection-10.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Thiết lập hệ thống dữ liệu doanh nghiệp, hạn chế đứt gãy kinh doanh vì nhân sự​</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-purple-cl">
              <img src="{{ asset('img/web/cash-dissection-11.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Cải tiến hệ thống, kiểm soát rủi ro trong các khâu vận hành nhằm gia tăng lợi nhuận​</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-green-cl">
              <img src="{{ asset('img/web/cash-dissection-12.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Giải phóng thời gian chủ doanh nghiệp và các vị trí chủ chốt trong vận hành​</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-why why-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Tại sao doanh nghiệp cần <br />giải pháp chuyển đổi dữ liệu?
        </h4>
        <div class="why-product__content">
          <div class="why-product__list">
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-11.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Dữ liệu, thông tin lưu trữ không đồng bộ, chồng chéo, khó
                kiểm soát</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-12.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Khó khăn trong việc bảo mật thông tin tài liệu</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-13.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Ra quyết định thiếu chính xác vì không đủ dữ liệu báo cáo</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-14.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Không có thông tin kịp thời cho các cuộc họp quan trọng, làm việc
                với đối tác và khách hàng</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-15.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Thất thoát dữ liệu khi thay đổi nhân sự</span>
            </div>
          </div>
        </div>
        <img src="{{ asset('img/web/cash-dissection-img-3.png') }}" alt="background image"
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
                <img src="{{ asset('img/web/help-icon-11.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Hỗ trợ khách hàng xử lý các tình huống thực tế về chuyển đổi dữ liệu doanh nghiệp</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-12.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Chuyên gia BossStack đồng hành cùng khách hàng trong suốt quá trình thực hiện giải
                pháp</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-13.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Thực hành trực tiếp trên phần mềm Microsoft 365 Business để phân tích, đánh giá giải pháp
                chuyển đổi dữ liệu</p>
            </div>
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
          <h3>GIẢI PHÁP CHUYỂN ĐỔI DỮ LIỆU</h3>
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
            <input type='hidden' name='solution' value='3'>
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
