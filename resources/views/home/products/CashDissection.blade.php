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
            <img class="icon img-fluid" src="{{ asset('img/web/link-icon.svg') }}" alt="icon" />
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
              <h4 class="section-title">Lợi ích của giải pháp bóc tách dòng tiền</h4>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-cyan-cl">
              <img src="{{ asset('img/web/cash-dissection-1.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Bóc tách dòng tiền chủ doanh nghiệp và dòng tiền doanh nghiệp​​</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-purple-cl">
              <img src="{{ asset('img/web/cash-dissection-2.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Phân bổ và thiết lập hệ thống dòng tiền bằng <b>phần mềm BossStack</b></p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-green-cl">
              <img src="{{ asset('img/web/cash-dissection-3.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Quản lý và điều chỉnh kịp thời sự biến động dòng tiền bằng cảnh báo của phần mềm BossStack​</p>
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
              <img src="{{ asset('img/web/why-product-1.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Làm mãi không dư, tưởng lời nhưng lỗ​</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-2.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Luôn bất an vì không biết cách kiểm soát dòng tiền, dự phòng tiền kinh doanh​</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-3.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Tách bạch dòng tiền để không sử dụng dòng vốn ngắn hạn cho trung dài hạn​​</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-4.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Không có công cụ để xử lý các dòng tiền trong kinh doanh, đầu tư​</span>
            </div>
          </div>
        </div>
        <img src="{{ asset('img/web/cash-dissection-img-1.png') }}" alt="background image"
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
                <img src="{{ asset('img/web/help-icon-1.svg') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Cung cấp cho khách hàng các mẫu tình huống thực tế​</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-2.svg') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>BossStack đồng hành cùng khách hàng trong suốt quá trình thực hiện giải pháp​</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-3.svg') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Sử dụng phần mềm BossStack để phân tích, đánh giá và hỗ trợ ra quyết định về
                tiền</p>
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
          <h3>GIẢI PHÁP BÓC TÁCH DÒNG TIỀN</h3>
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
            <input type='hidden' name='solution' value='1'>
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
