@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/main.css') }}">
@endsection

@section('content')
  <div class="section section-banner banner-home">
    <div class="banner-body">
      <div class="container">
        <div class="wrap">
          <div class="banner-home__left">
            <h1 class="banner-home__title">CHUYỂN ĐỔI SỐ <br />DOANH NGHIỆP</h1>
            <p class="banner-home__text">Cung cấp giải pháp chuyển đổi số doanh nghiệp đem lại
              <br /><span class="text-bold">CẮT GIẢM CHI PHÍ</span> tức thì và xây dựng kế hoạch
              <br /><span class="text-bold">GIA TĂNG LỢI NHUẬN</span> lâu dài!
            </p>
            <a class="btn btn-second btn-size-lg btn-contact" href="#">Liên hệ</a>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-video">
      <video autoplay muted loop>
        <source src="{{ asset('img/web/video-banner.mp4') }}" type="video/mp4">
      </video>
      <div class="banner-video__bg"></div>
    </div>
  </div>

  <div class="section section-solution solution">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Giải pháp của BossStack</h4>
        <div class="solution-body">
          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('img/web/solution-icon-1.svg') }}" />
            <div class="card-body">
              <h6 class="card-body__title">BÓC TÁCH DÒNG TIỀN</h6>
              <div class="card-body__content">
                <p>Sử dụng công cụ thực thi phần mềm BossStack nhằm:</p>
                <ul>
                  <li>
                    <img class="icon img-fluid" src="{{ asset('img/web/icon-right.svg') }}"
                      alt="">
                    Xử lý và bóc tách các mảnh ghép trong dòng tiền tổng quan cá nhân
                  </li>
                  <li>
                    <img class="icon img-fluid" src="{{ asset('img/web/icon-right.svg') }}"
                      alt="">
                    Bóc tách dòng tiền cá nhân ra khỏi dòng tiền đầu tư, tự doanh, dòng tiền doanh
                    nghiệp
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-link">
              <a class="btn btn-size-full" href="#">Xem thêm</a>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('img/web/solution-icon-2.svg') }}" />
            <div class="card-body">
              <h6 class="card-body__title">CHUYỂN ĐỔI VẬN HÀNH</h6>
              <div class="card-body__content">
                <p>Số hóa dữ liệu doanh nghiệp và chuyển đổi vận hành số giúp nâng cao hiệu quả kinh
                  doanh và gia tăng lợi nhuận doanh nghiệp</p>
              </div>
            </div>
            <div class="card-link">
              <a class="btn btn-size-full" href="#">Xem thêm</a>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('img/web/solution-icon-3.svg') }}" />
            <div class="card-body">
              <h6 class="card-body__title">KIỂM SOÁT THẤT THOÁT DOANH NGHIỆP</h6>
              <div class="card-body__content">
                <p>Giải pháp giúp doanh nghiệp cắt giảm tối đa chi phí mà không làm ảnh hưởng đến hoạt
                  động toàn thể doanh nghiệp thông qua hệ thống phần mềm và chuyên gia BossStack</p>
              </div>
            </div>
            <div class="card-link">
              <a class="btn btn-size-full" href="#">Xem thêm</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-why-bs why-bs">
    <div class="container">
      <div class="wrap">
        <div class="why-bs__left">
          <h4 class="section-title">Tại sao lựa chọn BossStack?</h4>
          <div class="why-bs__list">
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-1.svg') }}" alt="">
              <span class="text">Kiểm soát tốt dòng tiền chủ sở hữu</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-2.svg') }}" alt="">
              <span class="text">Kiểm soát thất thoát</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-3.svg') }}" alt="">
              <span class="text">Theo kịp xu hướng chuyển đổi số</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-4.svg') }}" alt="">
              <span class="text">Gia tăng chất lượng dữ liệu Tối ưu hóa chi phí</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-5.svg') }}" alt="">
              <span class="text">Công cụ quản lý vận hành hiệu quả cho doanh nghiệp</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-6.svg') }}" alt="">
              <span class="text">Tự động hóa quy trình quản lý để giải phóng chủ doanh nghiệp</span>
            </div>
          </div>
        </div>
        <img class="img-fluid why-bs__img" src="{{ asset('img/web/why-bs-1.png') }}" alt="">
      </div>
    </div>
  </div>

  <div class="section section-partner partner">
    <div class="container">
      <div class="wrap">
        <div class="partner-carousel owl-carousel owl-theme">
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-1.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-2.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-3.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-4.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-5.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-6.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-7.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-8.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-9.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-10.png') }}">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-11.png') }}">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-review review">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Khách hàng nói về giải pháp BossStack</h4>
        <div class="review-body">
          <div class="review-carousel owl-carousel owl-theme">
            <div class="item">
              <div class="review-rate">
                <div class="review-rate__item">
                  <p class="title">ĐỔI MỚI & CHẤT LƯỢNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">LỢI ÍCH</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">MỨC ĐỘ HÀI LÒNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                  </div>
                </div>
              </div>
              <p class="review-content">“Sử dụng <span class="text-bold">phần mềm BossStack</span>
                cuối tháng tôi không cần ngồi ghi
                chép hay
                nhập bảng tính Excel. <span class="text-bold">Phần mềm BossStack</span> giúp tôi quản
                lý mọi thu chi của cá nhân, gia
                đình và bóc tách hoàn toàn với dòng tiền kinh doanh tại doanh nghiệp của tôi. Tính
                năng
                mà tôi đặc biệt quan tâm đó chính là tính toán số tiền nghỉ hưu giúp tôi có những kế
                hoạch dài hạn về tài chính của mình.”</p>
              <div class="review-footer">
                <img class="img-fluid review-footer__avt"
                  src="{{ asset('img/web/review-avt-1.jpg') }}" alt="">
                <div class="review-footer__info">
                  <h6 class="name">Nguyễn Đỗ Cẩm Bình</h6>
                  <p class="position">Trưởng phòng kinh doanh công ty BĐS Him Lam</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="review-rate">
                <div class="review-rate__item">
                  <p class="title">ĐỔI MỚI & CHẤT LƯỢNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">LỢI ÍCH</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">MỨC ĐỘ HÀI LÒNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                  </div>
                </div>
              </div>
              <p class="review-content">“Sử dụng <span class="text-bold">phần mềm BossStack</span>
                cuối tháng tôi không cần ngồi ghi
                chép hay
                nhập bảng tính Excel. <span class="text-bold">Phần mềm BossStack</span> giúp tôi quản
                lý mọi thu chi của cá nhân, gia
                đình và bóc tách hoàn toàn với dòng tiền kinh doanh tại doanh nghiệp của tôi. Tính
                năng
                mà tôi đặc biệt quan tâm đó chính là tính toán số tiền nghỉ hưu giúp tôi có những kế
                hoạch dài hạn về tài chính của mình.”</p>
              <div class="review-footer">
                <img class="img-fluid review-footer__avt"
                  src="{{ asset('img/web/review-avt-1.jpg') }}" alt="">
                <div class="review-footer__info">
                  <h6 class="name">Nguyễn Đỗ Cẩm Bình</h6>
                  <p class="position">Trưởng phòng kinh doanh công ty BĐS Him Lam</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="review-rate">
                <div class="review-rate__item">
                  <p class="title">ĐỔI MỚI & CHẤT LƯỢNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">LỢI ÍCH</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">MỨC ĐỘ HÀI LÒNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}">
                  </div>
                </div>
              </div>
              <p class="review-content">“Sử dụng <span class="text-bold">phần mềm BossStack</span>
                cuối tháng tôi không cần ngồi ghi
                chép hay
                nhập bảng tính Excel. <span class="text-bold">Phần mềm BossStack</span> giúp tôi quản
                lý mọi thu chi của cá nhân, gia
                đình và bóc tách hoàn toàn với dòng tiền kinh doanh tại doanh nghiệp của tôi. Tính
                năng
                mà tôi đặc biệt quan tâm đó chính là tính toán số tiền nghỉ hưu giúp tôi có những kế
                hoạch dài hạn về tài chính của mình.”</p>
              <div class="review-footer">
                <img class="img-fluid review-footer__avt"
                  src="{{ asset('img/web/review-avt-1.jpg') }}" alt="">
                <div class="review-footer__info">
                  <h6 class="name">Nguyễn Đỗ Cẩm Bình</h6>
                  <p class="position">Trưởng phòng kinh doanh công ty BĐS Him Lam</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-contact-us contact-us">
    <div class="container">
      <div class="wrap">
        <div class="contact-us__content">
          <h3 class="section-title">Liên hệ với chúng tôi</h3>
          <div class="contact-us__list">
            <div class="contact-us__item">
              <img class="img-fluid icon" src="{{ asset('img/web/icon-check.svg') }}"
                alt="" />
              <span class="text">Cắt giảm tối đa chi phí</span>
            </div>
            <div class="contact-us__item">
              <img class="img-fluid icon" src="{{ asset('img/web/icon-check.svg') }}"
                alt="" />
              <span class="text">Tiết kiệm 80% thời gian quản lý dự án</span>
            </div>
            <div class="contact-us__item">
              <img class="img-fluid icon" src="{{ asset('img/web/icon-check.svg') }}"
                alt="" />
              <span class="text">Gia tăng 55% hiệu suất công việc</span>
            </div>
          </div>
        </div>
        <form class="contact-us__form" action="" method="post">
          <div class="form-group">
            <label class="form-label" for="fullname">Họ và tên <span>*</span></label>
            <input type="text" class="form-control" id="fullname" name="fullname"
              placeholder="Họ và tên *" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="phone">Số điện thoại <span>*</span></label>
            <input type="text" class="form-control" id="phone" name="phone"
              placeholder="Số điện thoại *" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="email">Email <span>*</span></label>
            <input type="email" class="form-control" id="email" name="email"
              placeholder="Email *" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="company">Công ty</label>
            <input type="text" class="form-control" id="company" name="company"
              placeholder="Công ty">
          </div>
          <div class="form-group">
            <label class="form-label" for="message">Chúng tôi có thể giúp gì cho bạn?</label>
            <textarea name="message" class="form-control" id="message"
              placeholder="Chúng tôi có thể giúp gì cho bạn?"></textarea>
          </div>
          <button type="submit" class="btn btn-second btn-size-lg btn-send">Gửi ngay</button>
        </form>
      </div>
    </div>
  </div>
@endsection
