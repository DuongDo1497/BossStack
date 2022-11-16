@extends('home.demo.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/main.css') }}">
@endsection

@section('content')
  <div class="section section-banner banner-home">
    <div class="container">
      <div class="wrap">
        <div class="banner-home__left">
          <h1 class="banner-home__title">CHUYỂN ĐỔI SỐ DOANH NGHIỆP</h1>
          <p class="banner-home__text">Cung cấp giải pháp chuyển đổi số doanh nghiệp đem lại <span
              class="text-bold">LỢI NHUẬN TỨC THÌ</span> và xây dựng kế hoạch <span
              class="text-bold">GIA TĂNG LỢI NHUẬN</span> lâu dài!</p>
          <a class="btn btn-second btn-size-lg btn-contact" href="#">Liên hệ</a>
        </div>
        <div class="banner-home__right">
          <img class="img-fluid" src="{{ asset('img/web/banner-img.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="section section-solution solution">
    <div class="container">
      <div class="wrap">
        <h3 class="section-title">Giải pháp của BossStack</h3>
        <div class="solution-body">
          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('img/web/solution-icon-1.svg') }}" />
            <div class="card-body">
              <p class="card-body__title">CHUYỂN ĐỔI DÒNG TIỀN</p>
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
                    Xử lý và bóc tách các mảnh ghép trong dòng tiền tổng quan cá nhân
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
              <p class="card-body__title">CHUYỂN ĐỔI VẬN HÀNH</p>
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
              <p class="card-body__title">KIỂM SOÁT THẤT THOÁT DOANH NGHIỆP</p>
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
        <h3 class="section-title">Tại sao lựa chọn BossStack?</h3>
        <div class="why-bs__list">
          <div class="why-bs__item">
            <img class="img-fluid icon" src="{{ asset('img/web/why-icon-1.svg') }}" alt="">
            <span class="text">Công cụ quản lý vận hành hiệu quả cho doanh nghiệp</span>
          </div>
          <div class="why-bs__item">
            <img class="img-fluid icon" src="{{ asset('img/web/why-icon-2.svg') }}" alt="">
            <span class="text">Kiểm soát tốt dòng tiền chủ sở hữu</span>
          </div>
          <div class="why-bs__item">
            <img class="img-fluid icon" src="{{ asset('img/web/why-icon-3.svg') }}" alt="">
            <span class="text">Theo kịp xu hướng chuyển đổi số</span>
          </div>
          <div class="why-bs__item">
            <img class="img-fluid icon" src="{{ asset('img/web/why-icon-4.svg') }}" alt="">
            <span class="text">Kiếm soát thất thoát</span>
          </div>
          <div class="why-bs__item">
            <img class="img-fluid icon" src="{{ asset('img/web/why-icon-5.svg') }}" alt="">
            <span class="text">Gia tăng chất lượng dữ liệu Tối ưu hóa chi phí</span>
          </div>
          <div class="why-bs__item">
            <img class="img-fluid icon" src="{{ asset('img/web/why-icon-6.svg') }}" alt="">
            <span class="text">Tự động hóa quy trình quản lý để giải phóng chủ doanh nghiệp</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-review review">
    <div class="container">
      <div class="wrap">
        <h3 class="section-title">Khách hàng nói về giải pháp BossStack</h3>
        <div class="review-carousel owl-carousel owl-theme">
          <div class="item">
            <div class="review-avatar">
              <img class="img-fluid" src="{{ asset('img/web/review-avt-1.jpg') }}" alt="">
            </div>
            <div class="review-body">
              <h2 class="name">Nguyễn Đỗ Cẩm Bình</h2>
              <h5 class="position">Trưởng phòng kinh doanh công ty BĐS Him Lam</h5>
              <div class="line"></div>
              <p class="content">Sử dụng <span class="text-bold">phần mềm BossStack</span> cuối
                tháng tôi không cần ngồi ghi
                chép hay nhập bảng tính Excel. <span class="text-bold">Phần mềm BossStack</span> giúp
                tôi quản lý mọi thu chi của
                cá nhân, gia đình và bóc tách hoàn toàn với dòng tiền kinh doanh tại doanh nghiệp của
                tôi. Tính
                năng mà tôi đặc biệt quan tâm đó chính là tính toán số tiền nghỉ hưu giúp tôi có những
                kế hoạch dài hạn về tài chính của mình.</p>
            </div>
          </div>
          <div class="item">
            <div class="review-avatar">
              <img class="img-fluid" src="{{ asset('img/web/review-avt-1.jpg') }}" alt="">
            </div>
            <div class="review-body">
              <h2 class="name">Nguyễn Đỗ Cẩm Bình</h2>
              <h5 class="position">Trưởng phòng kinh doanh công ty BĐS Him Lam</h5>
              <div class="line"></div>
              <p class="content">Sử dụng <span class="text-bold">phần mềm BossStack</span> cuối
                tháng tôi không cần ngồi ghi
                chép hay nhập bảng tính Excel. <span class="text-bold">Phần mềm BossStack</span> giúp
                tôi quản lý mọi thu chi của
                cá nhân, gia đình và bóc tách hoàn toàn với dòng tiền kinh doanh tại doanh nghiệp của
                tôi. Tính
                năng mà tôi đặc biệt quan tâm đó chính là tính toán số tiền nghỉ hưu giúp tôi có những
                kế hoạch dài hạn về tài chính của mình.</p>
            </div>
          </div>
          <div class="item">
            <div class="review-avatar">
              <img class="img-fluid" src="{{ asset('img/web/review-avt-1.jpg') }}" alt="">
            </div>
            <div class="review-body">
              <h2 class="name">Nguyễn Đỗ Cẩm Bình</h2>
              <h5 class="position">Trưởng phòng kinh doanh công ty BĐS Him Lam</h5>
              <div class="line"></div>
              <p class="content">Sử dụng <span class="text-bold">phần mềm BossStack</span> cuối
                tháng tôi không cần ngồi ghi
                chép hay nhập bảng tính Excel. <span class="text-bold">Phần mềm BossStack</span> giúp
                tôi quản lý mọi thu chi của
                cá nhân, gia đình và bóc tách hoàn toàn với dòng tiền kinh doanh tại doanh nghiệp của
                tôi. Tính
                năng mà tôi đặc biệt quan tâm đó chính là tính toán số tiền nghỉ hưu giúp tôi có những
                kế hoạch dài hạn về tài chính của mình.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-partner partner">
    <div class="container">
      <div class="wrap">
        <h3 class="section-title">Đối tác</h3>
      </div>
    </div>
  </div>

  <div class="section section-contact-us contact-us">
    <div class="container">
      <div class="wrap">
        <h3 class="section-title">Liên hệ với chúng tôi</h3>
        <form class="contact-us__form" action="" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="fullname" name="fullname"
              placeholder=" " required>
            <label class="form-label">Họ và tên <span>*</span></label>
          </div>
          <div class="form-row">
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email"
                placeholder=" " required>
              <label class="form-label">Email <span>*</span></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="phone" name="phone"
                placeholder=" " required>
              <label class="form-label">Số điện thoại <span>*</span></label>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <input type="text" class="form-control" id="company" name="company"
                placeholder=" ">
              <label class="form-label">Công ty</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="position" name="position"
                placeholder=" ">
              <label class="form-label">Vị trí</label>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" class="form-control" id="message" placeholder=" "></textarea>
            <label class="form-label">Chúng tôi có thể giúp gì cho bạn?</label>
          </div>
          <button type="submit" class="btn btn-second btn-size-lg btn-send">Gửi ngay</button>
        </form>
        <div class="trapezoid"></div>
      </div>
    </div>
  </div>
@endsection
