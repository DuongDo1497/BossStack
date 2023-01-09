@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/products/LossControl.css') }}">
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
          <h1 class="banner-default__title text-start">KIỂM SOÁT THẤT THOÁT</h1>
          <small>* Dành cho doanh nghiệp có doanh thu trên 100 tỷ/năm</small>
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
              <h4 class="section-title">Lợi ích kiểm soát thất thoát</h4>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-cyan-cl">
              <img src="{{ asset('img/web/cash-dissection-17.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Tiết kiệm thời gian và chi phí quản lý doanh nghiệp</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-purple-cl">
              <img src="{{ asset('img/web/cash-dissection-18.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Phân tích toàn bộ hoạt động của doanh nghiệp để đưa ra các chiến lược cắt giảm chi phí cần thiết</p>
            </div>
          </div>
          <div class="benefits-product__item">
            <div class="benefits-product__content bg-green-cl">
              <img src="{{ asset('img/web/cash-dissection-19.svg') }}" alt="cash-dissection" class="icon img-fluid">
              <p>Rà soát và thiếp lập lại các lỗ hổng​</p>
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
          <h4 class="section-title">Tại sao doanh nghiệp cần kiểm soát thất thoát ?</h4>
          <div class="why-product__list">
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-6.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Quy trình nhập, xuất và sản xuất sản phẩm chưa đồng bộ gây khó khăn
                trong khâu quản lý và kiểm soát chất lượng</span>
            </div>
            <div class="why-product__item">
              <span class="text"><b>50%</b> doanh nghiệp đang gặp phải những vấn đề dưới đây:</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-7.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Quy trình quản lý vận hành doanh nghiệp chưa rõ ràng, chưa có các
                công cụ hỗ trợ đi kèm dẫn đến chi phí tăng cao, dư thừa nhân sự và lãng phí thời
                gian</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-8.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Chi phí tài chính chưa được sắp xếp theo cùng sự phát triển của
                doanh nghiệp</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-9.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Quy trình bán hàng chưa tối ưu gây thất thoát tài sản doanh nghiệp,
                tốn thời gian và chi phí kinh doanh</span>
            </div>
            <div class="why-product__item">
              <img src="{{ asset('img/web/why-product-10.svg') }}" alt="icon" class="icon img-fluid">
              <span class="text">Bỏ lỡ các chi phí cơ hội kinh doanh, ảnh hưởng đến việc phát triển
                doanh nghiệp</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-help help-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">BossStack giúp doanh nghiệp kiểm soát thất thoát như thế nào?</h4>
        <div class="help-product__process">
          <div class="help-product__list">
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-8.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Khảo sát thực tế, thu thập thông tin dữ liệu thực tế tại doanh nghiệp</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-9.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>Phân tích và đánh giá cụ thể từng con số bằng phần mềm và đội ngũ chuyên gia
                BossStack</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-10.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <p>BossStack đồng hành thực thi kế hoạch kiểm soát thất thoát cùng doanh nghiệp</p>
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
          <h3>KIỂM SOÁT THẤT THOÁT</h3>
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
            <input type='hidden' name='solution' value='5'>
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
