<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bóc Tách Dòng Tiền</title>

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
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/landingpage/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/font.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/global.css') }}">

  <link rel="stylesheet" href="{{ asset('css/landingpage/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/CashFlowDissection.css') }}">
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
              <span class="text">30/10/2022</span>
            </div>
          </li>
          <li>
            <a href="#" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <div class="banner">
    <div class="container">
      <div class="wrap">
        <div class="banner-content">
          <h1>BÓC TÁCH <span>DÒNG TIỀN</span></h1>
          <p>Bóc tách dòng tiền cá nhân ra khỏi dòng tiền đầu tư, dòng tiền kinh doanh bằng phần
            mềm
            BossStack</p>
          <a href="#" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</a>
        </div>
        <img class="banner-img img-fluid" src="{{ asset('img/landing-page/banner-img.png') }}"
          alt="">
      </div>
    </div>
  </div>

  <div class="main">
    <div class="section section-who">
      <div class="container">
        <div class="wrap">
          <h4>Bạn là?</h4>
          <div class="who-list">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/landing-page/who-img.png') }}"
                alt="">
              <p class="card-title">Nhân viên, cấp quản lý văn phòng</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-img-1.png') }}" alt="">
              <p class="card-title">Nhà đầu tư, kinh doanh tự do </p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/landing-page/who-img-2.png') }}" alt="">
              <p class="card-title">Chủ doanh nghiệp</p>
            </div>
            <div class="card">
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
          <div class="difficult-left">
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
          </div>
          <img class="img-fluid difficult-img"
            src="{{ asset('img/landing-page/difficult-img.png') }}" alt="">
          <img src="{{ asset('img/landing-page/dots-circle.png') }}" alt=""
            class="img-fluid dots-circle-img">
          <img src="{{ asset('img/landing-page/circle-line.png') }}" alt=""
            class="img-fluid circle-line-img">
        </div>
      </div>
    </div>

    <div class="section section-advantages">
      <div class="container">
        <div class="wrap">
          <h5 class="advantages-title">
            Điểm <span>KHÁC BIỆT</span> của BossStack
            <img src="{{ asset('img/landing-page/icon-question.png') }}" alt=""
              class="img-fluid icon-question-img">
          </h5>

          <div class="advantages-content">
            <div class="advantages-content__left">
              <div class="advantages-content__item">
                <span>80%</span> thời gian được tiết kiệm khi quản lý thu,<br />chi và đầu tư dòng
                tiền
              </div>
              <div class="advantages-content__item">
                <span>TÙY CHỈNH</span> phù hợp với từng nhu cầu<br />của khách hàng
              </div>
              <div class="advantages-content__item">
                Tích hợp công nghệ hiện đại<br /><span>BẢO MẬT DỮ LIỆU</span> khách hàng tuyệt đối
              </div>
            </div>
            <img class="advantages-content__img img-fluid"
              src="{{ asset('img/landing-page/advantages-img.png') }}" alt="">
          </div>

          <img src="{{ asset('img/landing-page/dots-circle.png') }}" alt=""
            class="img-fluid dots-circle-img">
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
        Giải pháp<br /><span>Bóc tách dòng tiền</span>
        <img src="{{ asset('img/landing-page/dots-circle-blue.png') }}" alt=""
          class="img-fluid dots-circle-img">
      </h3>

      <div class="solution-timeline">
        <div class="container">
          <div class="wrap">
            <div class="solution-timeline__all">
              <div class="solution-timeline__item">
                <div class="solution-timeline__content">
                  <h3 class="solution-timeline__header">Buổi 1</h3>
                  <div class="solution-timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Nỗi ám ảnh về Tiền</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Xác định mục tiêu cuộc đời</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Xác định bức tranh tài chính hiện tại</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>
                          Sử dụng <span>phần mềm BossStack</span> để thiết lập
                          các mục tiêu tài chính cá nhân
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="solution-timeline__item">
                <div class="solution-timeline__content">
                  <h3 class="solution-timeline__header">Buổi 2</h3>
                  <div class="solution-timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Phân tích dòng tiền cơ bản</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Làm sạch tài chính cá nhân chuyên sâu</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Cách phân bổ dòng tiền sau chi tiêu bằng <span>phần mềm BossStack</span>
                        </p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p><span>Bóc tách</span> dòng tiền cá nhân ra khỏi dòng tiền đầu tư kinh
                          doanh
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="solution-timeline__item">
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
                        <p>Bài tập tình huống</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>
                          Sửa bài và thảo luận phân tích việc bóc tách dòng tiền bằng <span>phần mềm
                            BossStack</span>
                        </p>
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
              <a href="#" class="btn btn-primary btn-register">ĐĂNG KÝ NGAY</a>
            </div>

            <img src="{{ asset('img/landing-page/dots-circle.png') }}" alt=""
              class="img-fluid dots-circle-img">
          </div>
        </div>
      </div>

      <div class="solution-review">
        <div class="container">
          <div class="wrap">
            <h4 class="solution-review__title">Khách hàng của chúng tôi khi nói về BossStack</h4>
            <div class="solution-review__carousel owl-carousel owl-theme">
              <div class="item">
                <div class="solution-review__top">
                  <img src="{{ asset('img/user-2.jpg') }}" alt=""
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
              <div class="item">
                <div class="solution-review__top">
                  <img src="{{ asset('img/user-2.jpg') }}" alt=""
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
              <div class="item">
                <div class="solution-review__top">
                  <img src="{{ asset('img/user-2.jpg') }}" alt=""
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

      <div class="solution-register">
        <div class="container">
          <div class="wrap">
            <form class="solution-register__form" action="" method="post">
              <h6>Đăng ký<br />thông tin tư vấn</h6>
              <div class="form-info">
                <input type="text" class="form-control" name="fullName"
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
            <div class="solution-register__voucher">
              <div class="voucher-title">
                <h4>BÓC TÁCH DÒNG TIỀN</h4>
                <p>Bóc tách dòng tiền cá nhân ra khỏi dòng tiền đầu tư, dòng tiền kinh doanh bằng
                  phần mềm BossStack</p>
              </div>
              <div class="line"></div>
              <div class="voucher-qr">
                <p class="voucher-qr__text">Quét mã QR<br />để tìm hiểu thêm</p>
                <div class="voucher-qr__img">
                  <img class="img-fluid" src="{{ asset('img/landing-page/qr-scan.png') }}"
                    alt="">
                </div>
              </div>
              <div class="voucher-countdown">
                <p class="voucher-countdown__text">Khuyến mãi kết thúc sau</p>
                <div class="voucher-countdown__content">
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
              <a href="#">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-linkedin.svg') }}"
                  alt="">
              </a>
            </div>
            <div class="footer-content__social">
              <a href="#">
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script>
    $('.solution-review__carousel').owlCarousel({
      animateOut: 'animate__fadeOutDown',
      animateIn: 'animate__fadeInUp',
      autoplay: false,
      loop: true,
      items: 1,
      margin: 30,
      nav: true,
      dots: true,
      smartSpeed: 1000,
      autoplaySpeed: 1000,
      mouseDrag: false,
      navText: ["<i class='fa-solid fa-angle-left'></i>",
        "<i class='fa-solid fa-angle-right'></i>"
      ]
    })
  </script>
</body>

</html>
