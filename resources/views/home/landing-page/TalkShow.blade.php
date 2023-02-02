<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  <link rel="shortcut icon" href="{{ asset('img/landing-page/favicon.ico') }}" type="image/x-icon">

  <meta name="description" content="BossStack">
  <meta property="og:title" content="BossStack">
  <meta property="og:site_name" content="BossStack">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/landingpage/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/font.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/global.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/component.css') }}">

  <link rel="stylesheet" href="{{ asset('css/landingpage/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/TalkShow.css') }}">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="wrap">
        <a class="logo" href="{{ asset('talkshowseries1') }}">
          <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/logo.svg') }}" alt="BossStack">
        </a>

        <ul class="menu">
          <li class="menu-item">
            <a class="menu-link" href="#speakers">Diễn giả</a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="#schedule">Lịch trình</a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="#ticket">Mua vé</a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="#donors">Nhà tài trợ</a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="#venue">Địa điểm</a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <div class="banner">
    <div class="container">
      <div class="wrap">
        <div class="banner-content">
          <div class="banner-top">
            <span class="text">talkshow</span>
            <span></span>
            <span class="text">series 1: Tài chính và dòng tiền</span>
          </div>
          <img class="img-fluid banner-img" src="{{ asset('img/landing-page/talkshow/banner-img-1.png') }}"
            alt="BossStack">
          <p>CHIẾN LƯỢC DÒNG TIỀN DÀNH CHO DOANH NGHIỆP SMEs THỜI KỲ SUY THOÁI" lần đầu tiên được tổ chức với mong muốn
            giúp các Doanh nghiệp đưa ra những cái nhìn khách quan về tài chính từ đó có cái nhìn chuyên sâu trong việc
            quản trị dòng tiền hiệu quả.<br /><br />Đây là cơ hội để các Doanh nghiệp SMEs lắng nghe, trao đổi và kết
            nối cùng các chuyên gia trong ngành tài
            chính nói chung và quản lý dòng tiền nói riêng.</p>
          <a class="btn btn-buy buy-ticket" href="#ticket">Mua vé ngay</a>
        </div>
      </div>
    </div>
  </div>

  <div class="main">
    <div class="section section-about">
      <div class="container">
        <div class="wrap">
          <h4>Giới thiệu về chương trình</h4>
          <div class="about-wrap">
            <div class="about-content">
              <p>Năm 2022, theo báo cáo do Cục Quản lý kinh doanh nhận định rằng đa phần các Doanh nghiệp vừa và nhỏ
                thường có quy mô nhỏ và hoạt động trong thời gian ngắn. Việc hạn chế nguồn lực và kinh nghiệm trong ứng
                phó với những biến động bất ngờ của nền kinh tế, các Doanh nghiệp thường không có sự chuẩn bị kịp thời
                và không có một kế hoạch phù hợp để ứng phó bao gồm cả việc quản trị dòng tiền kém hiệu quả.</p>
              <p>Để hiểu hơn về vấn đề này, Talkshow Series 1 - CHIẾN LƯỢC DÒNG TIỀN dành cho các Doanh nghiệp SMEs THỜI
                KỲ SUY THOÁI với các phiên thảo luận do Đơn vị tổ chức RBooks đồng hành cùng nhà tài trợ chính BossStack
                sẽ giúp các Doanh nghiệp SMEs chuẩn bị trước những rủi ro, tránh khỏi các mất mát không đáng có về vấn
                đề dòng tiền.</p>
            </div>
            <img class="img-fluid about-image" src="{{ asset('img/landing-page/talkshow/about-img-1.jpg') }}" />
          </div>
        </div>
      </div>
    </div>

    <div class="section section-speakers" id="speakers">
      <div class="container">
        <div class="wrap">
          <h4>Diễn giả</h4>
          <div class="speakers-wrap">
            <div class="speakers-list">
              <div class="speakers-item"></div>

              <div class="speakers-item">
                <div class="speakers-avt">
                  <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/speakers-7.jpg') }}"
                    alt="Chau Pham">
                </div>
                <div class="speakers-content">
                  <p class="speakers-name">Bà Lê Mỹ Nga</p>
                  <p class="speakers-position">Giám đốc WeAngles Capital</p>
                </div>
              </div>

              <div class="speakers-item">
                <div class="speakers-avt">
                  <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/speakers-3.jpg') }}"
                    alt="Chau Pham">
                </div>
                <div class="speakers-content">
                  <p class="speakers-name">Ông Lâm Minh Chánh</p>
                  <p class="speakers-position">CEO Học viện Kinh doanh & Tài chính BizUni</p>
                </div>
              </div>

              <div class="speakers-item">
                <div class="speakers-avt">
                  <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/speakers-4.jpg') }}"
                    alt="Chau Pham">
                </div>
                <div class="speakers-content">
                  <p class="speakers-name">Tiến sĩ Trần Quý</p>
                  <p class="speakers-position">Viện trưởng Viện phát triển kinh tế số</p>
                </div>
              </div>

              <div class="speakers-item">
                <div class="speakers-avt">
                  <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/speakers-1.jpg') }}"
                    alt="Chau Pham">
                </div>
                <div class="speakers-content">
                  <p class="speakers-name">Bà Châu Phạm</p>
                  <p class="speakers-position">CEO RBooks đồng thời là Chuyên gia cố vấn Tài chính chiến lược cấp cao
                    tại BossStack</p>
                </div>
              </div>

              <div class="speakers-item">
                <div class="speakers-avt">
                  <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/speakers-8.jpg') }}"
                    alt="Chau Pham">
                </div>
                <div class="speakers-content">
                  <p class="speakers-name">Bà Hoàng Thúy</p>
                  <p class="speakers-position">Founder & CEO Tập đoàn<br />Núi Xanh</p>
                </div>
              </div>

              <div class="speakers-item">
                <div class="speakers-avt">
                  <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/speakers-2.jpg') }}"
                    alt="Chau Pham">
                </div>
                <div class="speakers-content">
                  <p class="speakers-name">Ông Nam Nguyễn</p>
                  <p class="speakers-position">CEO Opla Consulting</p>
                </div>
              </div>

              <div class="speakers-item">
                <div class="speakers-avt">
                  <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/speakers-6.jpg') }}"
                    alt="Chau Pham">
                </div>
                <div class="speakers-content">
                  <p class="speakers-name">Ông Quốc Khánh</p>
                  <p class="speakers-position">CEO Vietsuccess</p>
                </div>
              </div>

              {{-- <div class="speakers-item">
                <div class="speakers-avt">
                  <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/speakers-1.jpg') }}"
                    alt="Chau Pham">
                </div>
                <div class="speakers-content">
                  <p class="speakers-name">Ông Nguyễn Xuân Thành</p>
                  <p class="speakers-position">Giảng viên Trường Chính sách công và quản lý FullBright, thành viên Tổ
                    tư vấn Kinh tế Chính phủ</p>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-schedule" id="schedule">
      <div class="container">
        <div class="wrap">
          <h4>
            <span class="text">Lịch trình</span>
            <span></span>
            <span class="text">từ 13:30 - 17:00</span>
          </h4>
          <div class="schedule-list">
            <div class="schedule-item">
              <p class="schedule-time">13 : 30</p>
              <div class="schedule-content">
                <p class="schedule-title">Đón khách | Giao lưu - Kết nối</p>
              </div>
              <span class="schedule-highligth"></span>
            </div>

            <div class="schedule-item">
              <p class="schedule-time">14 : 00</p>
              <div class="schedule-content">
                <p class="schedule-title">Khai mạc Chương trình</p>
              </div>
              <span class="schedule-highligth"></span>
            </div>

            <div class="schedule-item">
              <p class="schedule-time">14 : 05</p>
              <div class="schedule-content">
                <p class="schedule-title">Đại diện ban tổ chức phát biểu</p>
              </div>
              <span class="schedule-highligth"></span>
            </div>

            <div class="schedule-item">
              <p class="schedule-time">14 : 15</p>
              <div class="schedule-content">
                <p class="schedule-title"><span class="highlight">Key note Speaker:</span><br />Ứng
                  dụng công nghệ
                  trong việc quản trị và bóc tách dòng tiền</p>
                {{-- <div class="schedule-info">
                  <p>Diễn giả : Bà Châu Phạm - CEO RBooks</p>
                  <p>- Chuyên gia Cố Vấn Tài Chính chiến lược cấp cao thương hiệu BossStack</p>
                </div> --}}
              </div>
              <span class="schedule-highligth"></span>
            </div>

            <div class="schedule-item">
              <p class="schedule-time">15 : 45</p>
              <div class="schedule-content">
                <p class="schedule-title"><span class="highlight">Panel Discussion:</span><br />Ứng phó
                  với khủng hoảng</p>
              </div>
              <span class="schedule-highligth"></span>
            </div>

            <div class="schedule-item">
              <p class="schedule-time">16 : 50</p>
              <div class="schedule-content">
                <p class="schedule-title"><span class="highlight">Panel Discussion: </span>SMEs
                  2023 - Tồn tại và phát triển bền vững</p>
              </div>
              <span class="schedule-highligth"></span>
            </div>

            <div class="schedule-item">
              <p class="schedule-time">16 : 55</p>
              <div class="schedule-content">
                <p class="schedule-title">Kết thúc</p>
              </div>
              <span class="schedule-highligth"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-level">
      <div class="container">
        <div class="wrap">
          <h4>Hạng vé</h4>
          <div class="level-wrap">
            <img class="img-fluid level-img" src="{{ asset('img/landing-page/talkshow/level-img-1.png') }}"
              alt="Ticket">
            <a class="btn btn-buy buy-ticket" href="#ticket">Mua vé ngay</a>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-group">
      <div class="container">
        <div class="section-venue" id="venue">
          <div class="wrap">
            <h4>Địa điểm tổ chức</h4>
            <div class="venue-wrap">
              <div class="venue-info">
                <div class="venue-item">
                  <img class="img-fluid venue-icon" src="{{ asset('img/landing-page/talkshow/icon-pin.svg') }}"
                    alt="icon" />
                  <p>Vinpearl Luxury Landmark 81, 720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.</p>
                </div>
                <div class="venue-item">
                  <img class="img-fluid venue-icon" src="{{ asset('img/landing-page/talkshow/icon-phone.svg') }}"
                    alt="icon" />
                  <p>Hotline: 0918 90 55 00/0849 664 005 </p>
                </div>
                <div class="venue-item">
                  <img class="img-fluid venue-icon" src="{{ asset('img/landing-page/talkshow/icon-mail.svg') }}"
                    alt="icon" />
                  <p>info@bossstack.vn</p>
                </div>
              </div>
              <img class="img-fluid venue-img" src="{{ asset('img/landing-page/talkshow/venue-img.jpg') }}"
                alt="" />
            </div>
          </div>
        </div>

        <div class="section-ticket" id="ticket">
          <div class="wrap">
            <h4>Mua vé</h4>
            <div class="ticket-wrap">
              <form class="ticket-register" role="form" action="{{ route('coaching-store') }}?continue=true" method="post"
                id="frm">
                {{ csrf_field() }}
                <input type='hidden' name='course' value='10'>
                <input type='hidden' name='typereport' value='0'>
                <div class="form-info">
                  <input type="text" class="form-control" name="fullname" placeholder="Họ và tên *" required>
                  @if ($errors->has('fullname'))
                  <span class="text-danger">{{ $errors->first('fullname') }}</span>
                  @endif
                  <input type="text" class="form-control" name="phone" placeholder="Số điện thoại *" required>
                  @if ($errors->has('phone'))
                  <span class="text-danger">{{ $errors->first('phone') }}</span>
                  @endif

                  <input type="email" class="form-control" name="email" placeholder="Email *" required>
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif

                  <input type="text" class="form-control" name="content" placeholder="Công ty *" required>
                  <input type="text" class="form-control" name="title" placeholder="Chức vụ *" required>
                </div>
                <button type="submit" class="btn btn-primary btn-register">Đăng ký ngay</button>
              </form>
              <div class="ticket-about">
                <img class="img-fluid ticket-about__logo" src="{{ asset('img/landing-page/talkshow/logo.svg') }}"
                  alt="BossStack">
                <div class="ticket-about__subtitle">
                  <span class="text">talkshow</span>
                  <span></span>
                  <span class="text">series 1: Tài chính và dòng tiền</span>
                </div>
                <img class="img-fluid banner-img" src="{{ asset('img/landing-page/talkshow/banner-img-1.png') }}"
                  alt="BossStack">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-introduction" id="donors">
      <div class="container">
        <div class="wrap">
          <div class="introduction-top">
            <span class="text">talkshow</span>
            <span></span>
            <span class="text">series 1: Tài chính và dòng tiền</span>
          </div>

          <img class="img-fluid introduction-img" src="{{ asset('img/landing-page/talkshow/banner-img-2.png') }}"
            alt="BossStack">

          <div class="introduction-address">
            <div class="introduction-address__item">
              <div class="introduction-address__img">
                <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/logo-intro-1.svg') }}"
                  alt="">
              </div>
              <div class="introduction-address__info">
                <div class="item">
                  <img class="img-fluid icon" src="{{ asset('img/landing-page/talkshow/icon-pin.svg') }}"
                    alt="icon" />
                  <p> 720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.</p>
                </div>
                <div class="item">
                  <img class="img-fluid icon" src="{{ asset('img/landing-page/talkshow/icon-phone.svg') }}"
                    alt="icon" />
                  <p>Hotline: 0849 664 005 </p>
                </div>
                <div class="item">
                  <img class="img-fluid icon" src="{{ asset('img/landing-page/talkshow/icon-mail.svg') }}"
                    alt="icon" />
                  <p>info@rbooks.vn</p>
                </div>
              </div>
            </div>

            <div class="introduction-address__item">
              <div class="introduction-address__img">
                <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/logo-intro-2.svg') }}"
                  alt="">
              </div>
              <div class="introduction-address__info">
                <div class="item">
                  <img class="img-fluid icon" src="{{ asset('img/landing-page/talkshow/icon-pin.svg') }}"
                    alt="icon" />
                  <p>LM81- 42.OT04 (Officetel), Landmark 81 Vinhomes Central Park</p>
                </div>
                <div class="item">
                  <img class="img-fluid icon" src="{{ asset('img/landing-page/talkshow/icon-phone.svg') }}"
                    alt="icon" />
                  <p>Hotline: 0918 90 55 00</p>
                </div>
                <div class="item">
                  <img class="img-fluid icon" src="{{ asset('img/landing-page/talkshow/icon-mail.svg') }}"
                    alt="icon" />
                  <p>info@bossstack.vn</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="wrap">
        <a class="logo" href="{{ asset('talkshowseries1') }}">
          <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/logo.svg') }}" alt="BossStack">
        </a>
        <div class="footer-follow">
          <p>Theo dõi chúng tôi</p>
          <div class="social">
            <a href="https://www.facebook.com/bossstack.vietnam">
              <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/icon-fb.svg') }}" alt="facebook">
            </a>
            <a href="https://www.linkedin.com/company/bossstack/">
              <img class="img-fluid" src="{{ asset('img/landing-page/talkshow/icon-linkedin.svg') }}"
                alt="linkedin">
            </a>
          </div>
        </div>
        <p class="copyright">© 2022 Bản quyền thuộc về RBooks</p>
      </div>
    </div>
  </footer>

  <div class="backtotop">
    <i class="fa-solid fa-arrow-up"></i>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('js/landingpage/main.js') }}"></script>
</body>

</html>
