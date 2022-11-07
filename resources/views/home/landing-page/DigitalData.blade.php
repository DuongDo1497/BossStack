<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BossStack Coaching - Dữ liệu số Doanh nghiệp</title>
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
  <link rel="stylesheet" href="{{ asset('css/landingpage/DigitalData.css') }}">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="wrap">
        <a class="logo" href="{{ asset('boctachdongtien') }}"><img class="img-fluid"
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
          <h1>THIẾT LẬP<span>HỆ THỐNG DỮ LIỆU SỐ</span><span>DOANH NGHIỆP</span></h1>
          <p>Số hóa dữ liệu doanh nghiệp giúp nâng cao hiệu quả kinh doanh và gia tăng lợi nhuận
            doanh nghiệp</p>
          <a href="#solution" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</a>
        </div>
        <img class="banner-img img-fluid" src="{{ asset('img/landing-page/banner-img-1.png') }}"
          alt="" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
          data-aos-easing="ease-in-out">
      </div>
    </div>
  </div>

  <div class="main">
    <div class="section section-who">
      <div class="container">
        <div class="wrap">
          <h4 data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-out">Bạn là?</h4>
          <div class="who-list">
            <div class="card" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000"
              data-aos-easing="ease-in-out">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-img-2.png') }}" alt="">
              <p class="card-title">Doanh nghiệp<br />nhỏ và vừa</p>
            </div>
            <div class="card" data-aos="fade-down" data-aos-delay="1000"
              data-aos-duration="1000" data-aos-easing="ease-in-out">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-img-4.png') }}" alt="">
              <p class="card-title">Cửa hàng<br />kinh doanh tự do</p>
            </div>
            <div class="card" data-aos="fade-down" data-aos-delay="1500"
              data-aos-duration="1000" data-aos-easing="ease-in-out">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-img-5.png') }}" alt="">
              <p class="card-title">Startup</p>
            </div>
            <div class="card" data-aos="fade-down" data-aos-delay="2000"
              data-aos-duration="1000" data-aos-easing="ease-in-out">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-img-3.png') }}" alt="">
              <p class="card-title">Khách hàng có nhu cầu</p>
            </div>
          </div>
          <img src="{{ asset('img/landing-page/dots-circle.png') }}" alt=""
            class="img-fluid dots-circle-img">
        </div>
      </div>
    </div>

    <div class="section section-difficult">
      <div class="container">
        <div class="wrap">
          <div class="difficult-list">
            <div class="difficult-item blue-gradient">
              <img class="img-fluid icon"
                src="{{ asset('img/landing-page/icon-difficult-1.svg') }}" alt="">
              <span class="text">Làm nhưng không dư, không biết tiền đã chi tiêu như thế
                nào</span>
            </div>
            <div class="difficult-item yellow-gradient">
              <img class="img-fluid icon"
                src="{{ asset('img/landing-page/icon-difficult-2.svg') }}" alt="">
              <span class="text">Lẫn lộn tiền bạc gia đình, cá nhân và đầu tư kinh doanh</span>
            </div>
            <div class="difficult-item yellow-gradient">
              <img class="img-fluid icon"
                src="{{ asset('img/landing-page/icon-difficult-3.svg') }}" alt="">
              <span class="text">Luôn lo lắng, bất an về tương lai tiền bạc của bản thân</span>
            </div>
            <div class="difficult-item blue-gradient">
              <img class="img-fluid icon"
                src="{{ asset('img/landing-page/icon-difficult-4.svg') }}" alt="">
              <span class="text">Không phân định rõ ràng các dòng tiền hiện tại</span>
            </div>
            <div class="difficult-item blue-gradient">
              <img class="img-fluid icon"
                src="{{ asset('img/landing-page/icon-difficult-5.svg') }}" alt="">
              <span class="text">Không có công cụ để quản lý tiền bạc một cách hiệu quả xuyên
                suốt</span>
            </div>
            <div class="difficult-item yellow-gradient">
              <img class="img-fluid icon"
                src="{{ asset('img/landing-page/icon-difficult-6.svg') }}" alt="">
              <span class="text">Không có kế hoạch giảm dần nợ vay, thẻ tín dụng</span>
            </div>
            <div class="difficult-item yellow-gradient">
              <img class="img-fluid icon"
                src="{{ asset('img/landing-page/icon-difficult-7.svg') }}" alt="">
              <span class="text">Thiếu kiến thức nền tảng về dòng tiền, tăng mức độ rủi ro
                trong kinh doanh và đầu tư</span>
            </div>
          </div>
          <img src="{{ asset('img/landing-page/circle-line.png') }}" alt=""
            class="img-fluid circle-line-img">
        </div>
      </div>
    </div>

    <div class="section section-advantages">
      <div class="advantages-header">
        <div class="advantages-header__line"></div>
        <h5 class="advantages-title">
          Điểm <span>KHÁC BIỆT</span> của BossStack
          <img src="{{ asset('img/landing-page/dots-circle-blue.png') }}" alt=""
            class="img-fluid dots-circle-img">
        </h5>
      </div>

      <div class="advantages-body">
        <div class="container">
          <div class="wrap">
            <div class="advantages-content">
              <div class="advantages-content__left">
                <div class="advantages-content__item" data-aos="flip-left" data-aos-delay="0"
                  data-aos-duration="1000" data-aos-easing="ease-in-out">
                  <img class="img-fluid icon"
                    src="{{ asset('img/landing-page/icon-advantages-1.svg') }}" />
                  <div class="text">
                    <div class="index">
                      <div class="number">
                        <span>Giảm</span>
                        <span>90</span>
                      </div>
                      %
                    </div>
                    <p>thời gian quản lý hệ thống dữ liệu doanh nghiệp</p>
                  </div>
                </div>
                <div class="advantages-content__item" data-aos="flip-left" data-aos-delay="500"
                  data-aos-duration="1000" data-aos-easing="ease-in-out">
                  <img class="img-fluid icon"
                    src="{{ asset('img/landing-page/icon-advantages-2.svg') }}" />
                  <div class="text">
                    <div class="index">
                      <div class="number">
                        <span>Tăng</span>
                        <span>95</span>
                      </div>
                      %
                    </div>
                    <p>hiệu suất công việc nhờ hệ thống dữ liệu số</p>
                  </div>
                </div>
                <div class="advantages-content__item" data-aos="flip-left" data-aos-delay="1000"
                  data-aos-duration="1000" data-aos-easing="ease-in-out">
                  <img class="img-fluid icon"
                    src="{{ asset('img/landing-page/icon-advantages-3.svg') }}" />
                  <div class="text"><span>TÙY CHỈNH</span> thiết lập hệ thống dữ liệu số phù hợp
                    với từng doanh nghiệp</div>
                </div>
              </div>
              <img class="advantages-content__img img-fluid"
                src="{{ asset('img/landing-page/advantages-img.png') }}" alt=""
                data-aos="fade-left" data-aos-delay="2000" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
            </div>
            <img src="{{ asset('img/landing-page/dots-circle.png') }}" alt=""
              class="img-fluid dots-circle-img">
          </div>
        </div>
      </div>
    </div>

    <div class="section section-quote">
      <div class="container">
        <div class="wrap">
          <div class="quote-content">
            <img class="img-fluid icon-quote quote-1"
              src="{{ asset('img/landing-page/icon-quote-1.svg') }}" alt="">
            Xây dựng <span>Chiến lược Quản lý Tài chính</span> và <span>Kế hoạch Gia tăng Lợi nhuận
              lâu dài</span> ngay bây giờ!
            <img class="img-fluid icon-quote quote-2"
              src="{{ asset('img/landing-page/icon-quote-2.svg') }}" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="section section-solution">
      <h3 class="solution-title">
        Giải pháp thiết lập<br /><span>HỆ THỐNG DỮ LIỆU SỐ</span><br />doanh nghiệp
        <img src="{{ asset('img/landing-page/dots-circle-blue.png') }}" alt=""
          class="img-fluid dots-circle-img">
      </h3>

      <div class="solution-timeline">
        <div class="container">
          <div class="wrap">
            <div class="solution-timeline__all">
              <div class="solution-timeline__item" data-aos="fade-down" data-aos-delay="0"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="solution-timeline__content">
                  <h3 class="solution-timeline__header">Buổi 1</h3>
                  <div class="solution-timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Sản phẩm lõi</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Mô hình kinh doanh</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Xây dựng luồng cơ bản vận hành</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="solution-timeline__item" data-aos="fade-down" data-aos-delay="500"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="solution-timeline__content">
                  <h3 class="solution-timeline__header">Buổi 2</h3>
                  <div class="solution-timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Thiết lập nội dung chi tiết cho hệ thống vận hành</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Hệ thống hoá dữ liệu bằng quy trình và bộ tài liệu hỗ trợ</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Quản trị hệ thống vận hành bằng Microsoft 365 Business</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="solution-timeline__item" data-aos="fade-down" data-aos-delay="1000"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="solution-timeline__content">
                  <h3 class="solution-timeline__header">Buổi 3</h3>
                  <div class="solution-timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Trao đổi trực tiếp cùng học viên</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Bài tập tình huống, sửa bài và thảo luận phân tích thực thi vận hành bằng
                          Microsoft 365 Business</p>
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

            <div class="solution-timeline__btn">
              <a href="#solution" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</a>
            </div>

            <img src="{{ asset('img/landing-page/dots-circle.png') }}" alt=""
              class="img-fluid dots-circle-img">
          </div>
        </div>
      </div>

      <div class="solution-review">
        <div class="container">
          <div class="wrap">
            <h4 class="solution-review__title" data-aos="fade-right" data-aos-delay="0"
              data-aos-duration="1000" data-aos-easing="ease-in-out">Khách hàng của chúng tôi khi
              nói về BossStack</h4>
            <div class="solution-review__carousel owl-carousel owl-theme" data-aos="zoom-in"
              data-aos-delay="500" data-aos-duration="1000" data-aos-easing="ease-in-out">
              <div class="item">
                <div class="solution-review__top">
                  <img src="{{ asset('img/user-2.jpg') }}" alt=""
                    class="img-fluid solution-review__avatar">
                  <p class="solution-review__content">Sử dụng phần mềm BossStack cuối tháng tôi
                    không cần ngồi ghi chép hay nhập bảng tính Excel. Phần mềm BossStack giúp tôi
                    quản lý mọi thu chi của cá nhân, gia đình và bóc tách hoàn toàn với dòng tiền
                    kinh doanh tại doanh nghiệp của tôi. Tính năng mà tôi đặc biệt quan tâm đó chính
                    là tính toán số tiền nghỉ hưu giúp tôi có những kế hoạch dài hạn về tài chính
                    của mình.</p>
                </div>
                <p class="solution-review__info"><span>Nguyễn Đỗ Cẩm Bình</span> - Trưởng phòng
                  kinh doanh công ty BĐS Him Lam
                </p>
              </div>
              <div class="item">
                <div class="solution-review__top">
                  <img src="{{ asset('img/user-1.jpg') }}" alt=""
                    class="img-fluid solution-review__avatar">
                  <p class="solution-review__content">Phần mềm BossStack giúp bạn theo dõi và kiểm
                    soát các dòng tiền giúp chúng luôn hoạt động hiệu quả. Đặc biệt, dòng tiền cá
                    nhân và dòng tiền đầu tư kinh doanh của bạn được tách bạch hoàn toàn. Việc này
                    giúp các dòng tiền được kiểm soát và tăng trưởng hiệu quả.</p>
                </div>
                <p class="solution-review__info"><span>Lê Hoài Ân - CFA</span> - CFA, tác giả cuốn
                  sách
                  bán chạy số 1 thị trường "20 năm lịch sử Thị trường Chứng khoán Việt Nam"</p>
              </div>
              <div class="item">
                <div class="solution-review__top">
                  <img src="{{ asset('img/user.jpg') }}" alt=""
                    class="img-fluid solution-review__avatar">
                  <p class="solution-review__content">Phần mềm BossStack giúp tôi phân bổ tài sản
                    và dòng tiền vào các ví mục tiêu tài chính khác nhau. Tôi có thể theo dõi từng
                    mục thu chi, từng mục tiêu tài chính đã tối ưu chưa. Từ đó, tôi phân bổ dòng
                    tiền một cách hợp lý và cắt giảm những chi phí không cần thiết.</p>
                </div>
                <p class="solution-review__info"><span>Huỳnh Thu Ái</span> - Cố vấn, đào tạo hệ
                  thống quản lý doanh nghiệp AMS
                </p>
              </div>
            </div>
            <img src="{{ asset('img/landing-page/circle-line.png') }}" alt=""
              class="img-fluid circle-line-img">
          </div>
        </div>
      </div>

      <div class="solution-register" id="solution">
        <div class="container">
          <div class="wrap">
            <form class="solution-register__form" action="" method="post"
              data-aos="fade-right" data-aos-delay="0" data-aos-duration="1000"
              data-aos-easing="ease-in-out">
              <h6>Đăng ký<br />thông tin tư vấn</h6>
              <div class="form-info">
                <input type="text" class="form-control" name="fullname"
                  placeholder="Họ và tên *" required>
                <input type="text" class="form-control" name="phone"
                  placeholder="Số điện thoại *" pattern="(84|0[3|5|7|8|9])+([0-9]{8})" required>
                <input type="email" class="form-control" name="email" placeholder="Email *"
                  required>
                <input type="text" class="form-control" name="company" placeholder="Công ty">
                <input type="text" class="form-control" name="position"
                  placeholder="Chức vụ">
              </div>
              <button type="submit" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</button>
            </form>
            <div class="solution-register__voucher" data-aos="fade-left" data-aos-delay="0"
              data-aos-duration="1000" data-aos-easing="ease-in-out">
              <div class="voucher-title">
                <h4>THIẾT LẬP HỆ THỐNG<br />DỮ LIỆU SỐ DOANH NGHIỆP </h4>
                <p>Số hóa dữ liệu doanh nghiệp giúp nâng cao hiệu quả kinh doanh và gia tăng lợi
                  nhuận doanh nghiệp</p>
              </div>
              <div class="line"></div>
              <div class="voucher-qr">
                <p class="voucher-qr__text">Quét mã QR<br />để tìm hiểu thêm</p>
                <div class="voucher-qr__img">
                  <img class="img-fluid" src="{{ asset('img/landing-page/qr-code-dulieu.png') }}"
                    alt="">
                </div>
              </div>
              <div class="voucher-countdown">
                <p class="voucher-countdown__text">Khuyến mãi kết thúc sau</p>
                <div class="voucher-countdown__content countdown-wrap gray-cl">
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

    <img class="img-fluid circle-line-blue"
      src="{{ asset('img/landing-page/circle-line-blue.png') }}" alt="">
  </div>

  <footer class="footer">
    <div class="container">
      <div class="wrap">
        <a class="logo" href="{{ asset('boctachdongtien') }}"><img class="img-fluid"
            src="{{ asset('img/logo-bossstack.png') }}"></a>
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
        <form action="#" method="POST">
          <div class="popup-register__form">
            <input type="text" class="form-control" name="fullName" placeholder="Họ và tên *"
              required>
            <input type="text" class="form-control" name="phone"
              placeholder="Số điện thoại *" pattern="(84|0[3|5|7|8|9])+([0-9]{8})" required>
            <input type="email" class="form-control" name="email" placeholder="Email *"
              required>
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