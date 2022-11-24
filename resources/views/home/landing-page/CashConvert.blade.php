<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  <link rel="shortcut icon" href="{{ asset('img/landing-page/favicon.ico') }}" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/landingpage/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/font.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/global.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/component.css') }}">

  <link rel="stylesheet" href="{{ asset('css/landingpage/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/CashConvert.css') }}">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="wrap">
        <a class="logo" href="{{ asset('chuyendoidongtien') }}"><img class="img-fluid"
            src="{{ asset('img/logo-bossstack.png') }}"></a>
        <ul class="course-info">
          <li>
            <img class="course-info__icon img-fluid"
              src="{{ asset('img/landing-page/icon-phone.svg') }}" />
            <div class="course-info__content">
              <span class="title">Hotline</span>
              <span class="text">+84 918 90 55 00</span>
            </div>
          </li>
          <li>
            <img class="course-info__icon img-fluid"
              src="{{ asset('img/landing-page/icon-mail.svg') }}" />
            <div class="course-info__content">
              <span class="title">Email</span>
              <span class="text">info@bossstack.vn</span>
            </div>
          </li>
          <li>
            <img class="course-info__icon img-fluid"
              src="{{ asset('img/landing-page/icon-calendar.svg') }}" />
            <div class="course-info__content">
              <span class="title">Lịch khai giảng</span>
              <span class="text">30/11/2022</span>
            </div>
          </li>
          <li>
            <a href="#solution" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <div class="banner">
    <div class="container">
      <div class="wrap">
        <div class="banner-content" data-aos="fade-right" data-aos-delay="500"
          data-aos-duration="1000" data-aos-easing="ease-in-out">
          <h1>BÓC TÁCH <span>DÒNG TIỀN</span></h1>
          <ul>
            <li><span>XỬ LÝ</span> và <span>BÓC TÁCH</span> các mảnh ghép trong dòng tiền tổng quan
              cá nhân.</li>
            <li><span>BÓC TÁCH DÒNG TIỀN</span> cá nhân ra khỏi dòng tiền đầu tư, tự doanh, dòng
              tiền doanh nghiệp.</li>
          </ul>
          <a href="#register-now" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</a>
        </div>
        <img class="banner-img img-fluid" src="{{ asset('img/landing-page/banner-img-2.png') }}"
          alt="" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
          data-aos-easing="ease-in-out">
      </div>
    </div>
    <img class="banner-bg-footer img-fluid"
      src="{{ asset('img/landing-page/banner-bg-footer.png') }}">
  </div>

  <div class="main">
    <div class="section section-who">
      <div class="container">
        <div class="wrap">
          <h4>Bạn là?</h4>
          <div class="who-list">
            <div class="card">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-icon-1.svg') }}" alt="">
              <p class="card-title">Cá nhân có nhu cầu</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-icon-2.svg') }}" alt="">
              <p class="card-title">Nhân viên, cấp quản lý văn phòng</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-icon-4.svg') }}" alt="">
              <p class="card-title">Nhà đầu tư, kinh doanh tự do</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-icon-3.svg') }}" alt="">
              <p class="card-title">Chủ doanh nghiệp</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-difficult">
      <div class="container">
        <div class="wrap">
          <div class="difficult-title">
            <h5>Đây có phải <span>KHÓ KHĂN</span> bạn đang gặp phải</h5>
            <img src="https://bossstack.vn/img/landing-page/icon-question.png" alt=""
              class="img-fluid icon-question-img">
          </div>
          <div class="difficult-left">
            <div class="difficult-list">
              <div class="difficult-item">
                <p class="number"><span>01</span></p>
                <p class="text">Làm mãi <b>không dư</b></p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>02</span></p>
                <p class="text">Luôn bất an vì không biết <b>cách kiểm soát dòng tiền</b>, dự
                  phòng tiền cho tương lai</p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>03</span></p>
                <p class="text"><b>Lẫn lộn tiền bạc</b> gia đình, cá nhân và đầu tư, kinh
                  doanh</p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>04</span></p>
                <p class="text"><b>Không có công cụ để xử lý dòng tiền</b> cá nhân, tự doanh
                  và doanh nghiệp</p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>05</span></p>
                <p class="text"><b>Chưa tách bạch</b> và quản lý dòng tiền tổng quan, bị thiếu
                  hụt vốn và mất cơ hội kinh doanh</p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>06</span></p>
                <p class="text"><b>Thiếu công cụ phân bổ dòng tiền</b> ảnh hưởng đến hoạt động
                  doanh nghiệp, đặc biệt trong thị trường nhiều biến động</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-advantages">
      <div class="container">
        <div class="wrap">
          <div class="advantages-content">
            <div class="advantages-content__left">
              <h5 class="advantages-title">
                Điểm <span>KHÁC BIỆT</span> của phần mềm <span>BossStack</span>
              </h5>
              <div class="advantages-content__list">
                <div class="advantages-content__item">
                  <img class="advantages-content__icon img-fluid"
                    src="{{ asset('img/landing-page/icon-advantages-check.svg') }}"
                    alt="">
                  <p>Tiết kiệm <span>87%<sup>*</sup></span> thời gian khi quản lý, xử lý và đưa ra
                    các quyết
                    định về tiền</p>
                </div>
                <div class="advantages-content__item">
                  <img class="advantages-content__icon img-fluid"
                    src="{{ asset('img/landing-page/icon-advantages-check.svg') }}"
                    alt="">
                  <p><span>Tùy chỉnh</span> phù hợp với tình hình tài chính của từng khách hàng</p>
                </div>
                <div class="advantages-content__item">
                  <img class="advantages-content__icon img-fluid"
                    src="{{ asset('img/landing-page/icon-advantages-check.svg') }}"
                    alt="">
                  <p><span>Phần mềm BossStack</span> có hệ thống chịu tải cao và tích hợp bảo mật
                    nhiều lớp qua giao thức HTTPS</p>
                </div>
              </div>
              <p class="note"><sup>*</sup> Dựa trên trải nghiệm thực tế khách hàng</p>
            </div>
            <img class="advantages-content__img img-fluid"
              src="{{ asset('img/landing-page/advantages-img.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="section section-timeline">
      <div class="container">
        <div class="wrap">
          <h3 class="timeline-title">
            Giải pháp<br /><span>Bóc tách dòng tiền</span>
          </h3>
          <div class="timeline">
            <div class="timeline__all">
              <div class="timeline__item" data-aos="fade-down" data-aos-delay="0"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="timeline__content">
                  <div class="timeline__header">
                    <img class="img-fluid timeline-icon"
                      src="{{ asset('img/landing-page/timeline-icon-1.svg') }}">
                    <h3>STEP <span>1</span></h3>
                  </div>
                  <div class="timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Phân tích nền tảng dòng tiền</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Xử lý và bóc tách các mảnh ghép trong dòng tiền tổng quan cá nhân</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Thiết lập hệ thống dòng tiền bằng <span>phần mềm BossStack</span></p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="timeline__item" data-aos="fade-down" data-aos-delay="500"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="timeline__content">
                  <div class="timeline__header">
                    <img class="img-fluid timeline-icon"
                      src="{{ asset('img/landing-page/timeline-icon-2.svg') }}">
                    <h3>STEP <span>2</span></h3>
                  </div>
                  <div class="timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Phương pháp phân bổ dòng tiền sau chi tiêu bằng <span>phần mềm
                            BossStack</span></p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Bóc tách dòng tiền cá nhân ra khỏi dòng tiền đầu tư, tự doanh, dòng tiền
                          doanh nghiệp</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Sử dụng <span>phần mềm BossStack</span> để đánh giá và hỗ trợ việc ra
                          quyết định về tiền</span>
                        </p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Quản lý và điều chỉnh kịp thời sự biến động của các dòng tiền thành viên
                          gia đình</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="timeline__item" data-aos="fade-down" data-aos-delay="1000"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="timeline__content">
                  <div class="timeline__header">
                    <img class="img-fluid timeline-icon"
                      src="{{ asset('img/landing-page/timeline-icon-3.svg') }}">
                    <h3>STEP <span>3</span></h3>
                  </div>
                  <div class="timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Tình huống mẫu để hỗ trợ khách hàng xử lý dòng tiền</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Phân tích việc bóc tách dòng tiền bằng <span>phần mềm BossStack</span>
                        </p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Làm việc trực tiếp cùng khách hàng</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Tổng kết, góp ý và khảo sát sau chương trình</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="timeline__btn">
              <a href="#register-now" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-solution">
      <div class="container">
        <div class="wrap">
          <h3 class="solution-title">
            Giải pháp thực thi <br /><span>Bóc tách dòng tiền</span>
          </h3>

          <div class="solution-list">
            <div class="solution-item">
              <p>Bao gồm gói <span><br />“Giải pháp <span class="highlight"><br />BÓC TÁCH
                    <br />DÒNG
                    TIỀN</span>"</span></p>
            </div>

            <div class="solution-item">
              <p class="number">1</p>
              <div class="content">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/solution-icon-1.svg') }}">
                <p class="text">Ký hợp đồng</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">2</p>
              <div class="content">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/solution-icon-2.svg') }}">
                <p class="text">Thu thập thông tin dữ liệu chủ doanh nghiệp</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">3</p>
              <div class="content">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/solution-icon-3.svg') }}">
                <p class="text">Làm việc trực tiếp lần 1 cùng khách hàng tại <b>văn phòng</b>
                  BossStack
                  (hoặc <b>online</b>) trong 4 giờ</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">4</p>
              <div class="content">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/solution-icon-4.svg') }}">
                <p class="text">Phân tích đánh giá bằng <b>phần mềm</b> và đội ngũ chuyên gia
                  BossStack
                </p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">5</p>
              <div class="content">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/solution-icon-5.svg') }}">
                <p class="text">Làm việc trực tiếp lần 2 cùng khách hàng tại <b>văn phòng</b>
                  BossStack
                  (hoặc <b>online</b>) trong 2 giờ</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">6</p>
              <div class="content">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/solution-icon-6.svg') }}">
                <p class="text">Chuyển giao <b>bộ kế hoạch</b> bóc tách dòng tiền chi tiết</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">7</p>
              <div class="content">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/solution-icon-7.svg') }}">
                <p class="text">Chuyển giao <b>bộ hướng dẫn</b> sử dụng phần mềm BossStack</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">8</p>
              <div class="content">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/solution-icon-8.svg') }}">
                <p class="text">Thực hiện hỗ trợ kĩ thuật 24/7 cho 1 tài khoản <b>Standard</b>
                  (kèm 1
                  tài khoản <b>thành viên</b>) trong 1 năm</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">9</p>
              <div class="content">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/solution-icon-9.svg') }}">
                <p class="text">Cập nhật và đánh giá tiến độ bộ kế hoạch bóc tách dòng tiền <b>
                    3
                    tháng/ lần trong 1 năm
                  </b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-review">
      <div class="container">
        <div class="wrap">
          <h4 class="review__title">Khách hàng nói về <span>Giải pháp <span
                class="highlight">Boss</span>Stack</span></h4>
          <div class="review__carousel-2 owl-carousel owl-theme">
            <div class="item">
              <div class="review__top">
                <img src="{{ asset('img/web/review-avt-4.jpg') }}" alt=""
                  class="img-fluid review__avatar">
                <p class="review__info">
                  <span>Nguyễn Đỗ Cẩm Bình</span>
                  <span>Trưởng phòng kinh doanh công ty BĐS Him Lam</span>
                </p>
              </div>
              <p class="review__content">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-quote-3.png') }}"
                  alt="">
                Sử dụng <b>phần mềm BossStack</b> cuối tháng tôi
                không cần ngồi ghi chép hay nhập bảng tính Excel. <b>Phần mềm BossStack</b> giúp tôi
                quản lý mọi thu chi của cá nhân, gia đình và bóc tách hoàn toàn với dòng tiền
                kinh doanh tại doanh nghiệp của tôi. Tính năng mà tôi đặc biệt quan tâm đó chính
                là tính toán số tiền nghỉ hưu giúp tôi có những kế hoạch dài hạn về tài chính
                của mình.
              </p>
            </div>
            <div class="item">
              <div class="review__top">
                <img src="{{ asset('img/user-1.jpg') }}" alt=""
                  class="img-fluid review__avatar">
                <p class="review__info">
                  <span>Lê Hoài Ân - CFA</span>
                  <span>Tác giả cuốn sách bán chạy số 1 thị trường "<b>
                      20 năm lịch sử Thị trường Chứng
                      khoán Việt Nam
                    </b>"</span>
                </p>
              </div>
              <p class="review__content">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-quote-3.png') }}"
                  alt="">
                <b>Phần mềm BossStack</b> giúp bạn theo dõi, kiểm soát các dòng tiền và giúp chúng
                luôn hoạt động hiệu quả. Đặc biệt, dòng tiền cá nhân và dòng tiền đầu tư kinh doanh
                của bạn được tách bạch hoàn toàn. Khi dòng tiền cá nhân và doanh nghiệp được bóc
                tách, bạn sẽ chủ động hơn trong việc lập kế hoạch tài chính gia đình và các dự án
                kinh doanh.
              </p>
            </div>
            <div class="item">
              <div class="review__top">
                <img src="{{ asset('img/user.jpg') }}" alt=""
                  class="img-fluid review__avatar">
                <p class="review__info">
                  <span>Huỳnh Thu Ái</span>
                  <span>Cố vấn, đào tạo hệ thống quản lý doanh nghiệp AMS</span>
                </p>
              </div>
              <p class="review__content">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-quote-3.png') }}"
                  alt="">
                <b>Phần mềm BossStack</b> giúp tôi phân bổ tài sản
                và dòng tiền vào các ví mục tiêu tài chính khác nhau. Tôi có thể theo dõi từng
                mục thu chi, từng mục tiêu tài chính đã tối ưu chưa. Từ đó, tôi phân bổ dòng
                tiền một cách hợp lý và cắt giảm những chi phí không cần thiết.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-register" id="register-now">
      <div class="container">
        <div class="wrap">
          <form class="register__form" data-aos="fade-right" data-aos-delay="0"
            data-aos-duration="1000" data-aos-easing="ease-in-out" role="form"
            action="{{ route('coaching-store') }}?continue=true" method="post" id="frm">
            {{ csrf_field() }}
            <input type='hidden' name='course' value='8'>

            <h6>
              <p>Đăng ký</p>
              <p>Thông tin tư vấn</p>
            </h6>
            <div class="form-info">
              <input type="text" class="form-control" name="fullname"
                placeholder="Họ và tên *" required>
              @if ($errors->has('fullname'))
                <span class="text-danger">{{ $errors->first('fullname') }}</span>
              @endif

              <input type="text" class="form-control" name="phone"
                placeholder="Số điện thoại *" required>
              @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
              @endif

              <input type="email" class="form-control" name="email" placeholder="Email *"
                required>
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif

              <input type="text" class="form-control" name="content" placeholder="Công ty">
              <input type="text" class="form-control" name="title" placeholder="Chức vụ">
              <select class="form-select" name="solution">
                <option selected value="">Giải pháp</option>
                <option value="1">Bóc tách dòng tiền</option>
                <option value="2">Thực thi dòng tiền chuyên sâu</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</button>
          </form>
          <div class="register__voucher" data-aos="fade-left" data-aos-delay="0"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="voucher-title">
              <h4>BÓC TÁCH DÒNG TIỀN</h4>
              <p>Bóc tách dòng tiền cá nhân ra khỏi dòng tiền đầu tư, dòng tiền kinh doanh bằng
                phần mềm BossStack</p>
            </div>
            <div class="line"></div>
            <div class="voucher-qr">
              <div class="voucher-qr__img">
                <img class="img-fluid" src="{{ asset('img/landing-page/qr-code-boctach.png') }}"
                  alt="">
              </div>
              <p class="voucher-qr__text">Quét mã QR để tìm hiểu thêm</p>
            </div>
            <div class="voucher-countdown">
              <p class="voucher-countdown__text">Khuyến mãi kết thúc sau</p>
              <div class="voucher-countdown__content countdown-wrap white-cl">
                <div class="item days">
                  <span class="number">00</span>
                  <span class="text">Ngày</span>
                </div>
                <div class="item hours">
                  <span class="number">00</span>
                  <span class="text">Giờ</span>
                </div>
                <div class="item minutes">
                  <span class="number">00</span>
                  <span class="text">Phút</span>
                </div>
                <div class="item seconds">
                  <span class="number">00</span>
                  <span class="text">Giây</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer footer-bg-img">
    <div class="container">
      <div class="wrap">
        <a class="logo" href="{{ asset('chuyendoidongtien') }}">
          <img class="img-fluid logo-img-cl"
            src="{{ asset('img/landing-page/logo-bs-color.svg') }}">
          <img class="img-fluid logo-img-white"
            src="{{ asset('img/landing-page/logo-bs-white.svg') }}">
        </a>
        <div class="footer-content">
          <div class="footer-content__item">
            <p>
              <span>Address:</span> LM81- 42.OT04 (Officetel), Landmark 81 Vinhomes Central Park,
              720A Điện Biên
              Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.
            </p>
          </div>
          <div class="footer-content__item">
            <p><span>Hotline:</span> +84 918 90 55 00</p>
            <p><span>Email:</span> info@bossstack.vn</p>
          </div>
          <div class="footer-content__item">
            <div class="footer-content__social">
              <a
                href="https://www.linkedin.com/company/bossstack/posts/?feedView=all&viewAsMember=true">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-linkedin.svg') }}"
                  alt="">
              </a>
            </div>
            <div class="footer-content__social">
              <a href="https://www.facebook.com/bossstack.vn">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-fb.svg') }}"
                  alt="">
              </a>
            </div>
            <div class="footer-content__social">
              <a href="#">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-zalo.svg') }}"
                  alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="backtotop">
    <i class="fa-solid fa-arrow-up"></i>
  </div>

  <div class="popup-register hide">
    <div class="popup-register__box">
      <button class="close-popup">
        <img class="img-fluid" src="{{ asset('img/landing-page/icon-close.svg') }}"
          alt="">
      </button>
      <div class="popup-register__header">
        <div class="popup-register__left">
          <p class="title">Đăng ký<br />thông tin tư vấn</p>
          <div class="register-countdown countdown-wrap white-cl">
            <div class="item days">
              <span class="number">00</span>
              <span class="text">Ngày</span>
            </div>
            <div class="item hours">
              <span class="number">00</span>
              <span class="text">Giờ</span>
            </div>
            <div class="item minutes">
              <span class="number">00</span>
              <span class="text">Phút</span>
            </div>
            <div class="item seconds">
              <span class="number">00</span>
              <span class="text">Giây</span>
            </div>
          </div>
        </div>
        <img class="img-fluid popup-register__image"
          src="{{ asset('img/landing-page/popup-img.png') }}" alt="">
      </div>
      <div class="popup-register__body">
        @if (isset($infor))
          <div class="alert alert-success">
            {{ $infor }}
          </div>
        @endif
        <form role="form" action="{{ route('coaching-store') }}?continue=true" method="post"
          id="frms">
          {{ csrf_field() }}
          <input type='hidden' name='course' value='8'>
          <div class="popup-register__form">
            <input type="text" class="form-control" name="fullname" placeholder="Họ và tên *"
              required>
            @if ($errors->has('fullname'))
              <span class="text-danger">{{ $errors->first('fullname') }}</span>
            @endif
            <input type="text" class="form-control" name="phone"
              placeholder="Số điện thoại *" required>
            @if ($errors->has('phone'))
              <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
            <input type="email" class="form-control" name="email" placeholder="Email *"
              required>
            @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <input type="hidden" class="form-control" name="content" value=""
              placeholder="Công ty">
            <input type="hidden" class="form-control" name="title" value=""
              placeholder="Chức vụ">
            <select class="form-select" name="solution">
              <option selected value="">Giải pháp</option>
              <option value="1">Bóc tách dòng tiền</option>
              <option value="2">Thực thi dòng tiền chuyên sâu</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('js/landingpage/main.js') }}"></script>
</body>

</html>
