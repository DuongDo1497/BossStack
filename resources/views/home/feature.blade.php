@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/feature.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <h1 class="banner-default__title text-center">Tính năng bossstack</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-help help-product">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Phần mềm BossStack giúp <span>tiết kiệm 87%</span> thời gian quản lý dòng tiền cá nhân
          và doanh nghiệp</h4>
        <div class="help-product__process">
          <div class="help-product__list">
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-19.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <h6>Quản lý dễ dàng</h6>
              <p>Việc quản lý dòng tiền cá nhân, dòng tiền doanh nghiệp và lợi nhuận kinh doanh đã không còn khó khăn khi
                được tích hợp trên một nền tảng duy nhất</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-20.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <h6>Linh hoạt nền tảng</h6>
              <p>Khách hàng có thể sử dụng phần mềm BossStack trên mọi nền tảng web, IOS hay Android</p>
            </div>
            <div class="help-product__item">
              <div class="icon">
                <img src="{{ asset('img/web/help-icon-21.png') }}" alt="help-icon" class="img-fluid">
              </div>
              <h6>Báo cáo trực quan</h6>
              <p>Dòng tiền có thể cập nhật mọi lúc mọi nơi, hỗ trợ chủ doanh nghiệp theo dõi tổng quan dòng tiền một cách
                nhanh chóng và đưa ra các quyết định chính xác</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-feature feature-bs icon-svg gray">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Quản lý toàn bộ dòng tiền tổng quan cá nhân, doanh nghiệp</h4>
        <div class="feature-bs__body">
          <div class="feature-bs__item">
            <ul>
              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/feature-icon-1.svg') }}" alt="">
                <span class="text">Theo dõi dòng tiền theo từng giai đoạn</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/feature-icon-2.svg') }}" alt="">
                <span class="text">Xây dựng và đánh giá dòng tiền cá nhân, doanh nghiệp</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/feature-icon-3.svg') }}" alt="">
                <span class="text">Báo cáo tự động</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/feature-icon-4.svg') }}" alt="">
                <span class="text">Tùy chỉnh linh hoạt</span>
              </li>
            </ul>
          </div>
          <div class="feature-bs__item">
            <img class="img-fluid" src="{{ asset('img/web/feature-img-1.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-feature feature-bs">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Theo dõi dòng tiền theo từng giai đoạn</h4>
        <div class="feature-bs__body reverse">
          <div class="feature-bs__item">
            <ul>
              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Dòng tiền được cập nhật đều đặn hàng ngày</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Giảm thiểu sai sót khi quản lý dòng tiền</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Dễ dàng theo dõi dòng tiền cho từng giai đoạn lựa chọn</span>
              </li>
            </ul>
          </div>
          <div class="feature-bs__item">
            <img class="img-fluid" src="{{ asset('img/web/feature-img-2.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-feature feature-bs gray">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Xây dựng và đánh giá dòng tiền cá nhân, doanh nghiệp</h4>
        <div class="feature-bs__body">
          <div class="feature-bs__item">
            <ul>
              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Nắm bắt toàn bộ dòng tiền thu – chi, lãi - lỗ</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Xây dựng kế hoạch kiểm soát và phát triển dòng tiền</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Hỗ trợ ra các quyết định kinh doanh và đầu tư chính xác</span>
              </li>
            </ul>
          </div>
          <div class="feature-bs__item">
            <img class="img-fluid" src="{{ asset('img/web/feature-img-3.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-feature feature-bs">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Báo cáo tự động</h4>
        <div class="feature-bs__body reverse">
          <div class="feature-bs__item">
            <ul>
              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Theo dõi tình hình mọi lúc mọi nơi và trên mọi thiết bị</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Biểu đồ dữ liệu chính xác, trực quan</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Kiểm soát và đánh giá tình hình thực tế các dòng tiền</span>
              </li>
            </ul>
          </div>
          <div class="feature-bs__item">
            <img class="img-fluid" src="{{ asset('img/web/feature-img-4.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-feature feature-bs gray">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Tùy chỉnh linh hoạt</h4>
        <div class="feature-bs__body">
          <div class="feature-bs__item">
            <ul>
              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Phân quyền sử dụng từng chức năng đến từng user thành viên</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Nhập, xóa và xuất dữ liệu nhanh chóng, chính xác</span>
              </li>

              <li>
                <img class="icon img-fluid" src="{{ asset('img/web/icon-check-circle.svg') }}" alt="">
                <span class="text">Kiểm soát hoạt động mọi thành viên qua lịch sử truy cập</span>
              </li>
            </ul>
          </div>
          <div class="feature-bs__item">
            <img class="img-fluid" src="{{ asset('img/web/feature-img-5.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-advertise advertise bg-img-blue">
    <div class="container">
      <div class="wrap">
        <h3 class="advertise-title">Chúng tôi giải phóng chủ doanh nghiệp khỏi gánh nặng quản lý
        </h3>
        <a class="btn btn-second btn-size-lg btn-contact" href="{{ asset('contact') }}">Liên
          hệ</a>
      </div>
    </div>
  </div>
@endsection
