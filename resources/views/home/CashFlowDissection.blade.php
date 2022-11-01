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

  <link rel="stylesheet" href="{{ asset('css/landingpage/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/font.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landingpage/global.css') }}">

  <link rel="stylesheet" href="{{ asset('css/landingpage/header.css') }}">
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
                <span class="text">Làm nhưng không dư, không biết tiền đã chi tiêu như thế
                  nào</span>
              </div>
              <div class="difficult-item yellow-gradient">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/icon-difficult-3.svg') }}" alt="">
                <span class="text">Làm nhưng không dư, không biết tiền đã chi tiêu như thế
                  nào</span>
              </div>
              <div class="difficult-item blue-gradient">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/icon-difficult-4.svg') }}" alt="">
                <span class="text">Làm nhưng không dư, không biết tiền đã chi tiêu như thế
                  nào</span>
              </div>
              <div class="difficult-item blue-gradient">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/icon-difficult-5.svg') }}" alt="">
                <span class="text">Làm nhưng không dư, không biết tiền đã chi tiêu như thế
                  nào</span>
              </div>
              <div class="difficult-item yellow-gradient">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/icon-difficult-6.svg') }}" alt="">
                <span class="text">Làm nhưng không dư, không biết tiền đã chi tiêu như thế
                  nào</span>
              </div>
              <div class="difficult-item yellow-gradient">
                <img class="img-fluid icon"
                  src="{{ asset('img/landing-page/icon-difficult-7.svg') }}" alt="">
                <span class="text">Làm nhưng không dư, không biết tiền đã chi tiêu như thế
                  nào</span>
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
          <img src="{{ asset('img/landing-page/dots-circle-sm.png') }}" alt=""
            class="img-fluid dots-circlesm-img dots-circlesm-1">
          <div class="quote-content">
            <img class="img-fluid icon-quote quote-1"
              src="{{ asset('img/landing-page/icon-quote-1.svg') }}" alt="">
            Xây dựng <span>Chiến lược Quản lý Tài chính</span> và <span>Kế hoạch Gia tăng Lợi nhuận
              lâu dài</span> ngay bây giờ!
            <img class="img-fluid icon-quote quote-2"
              src="{{ asset('img/landing-page/icon-quote-2.svg') }}" alt="">
          </div>
          <img src="{{ asset('img/landing-page/dots-circle-sm.png') }}" alt=""
            class="img-fluid dots-circlesm-img dots-circlesm-2">
        </div>
      </div>
    </div>

    <div class="section section-solution">
      <h3 class="solution-title">
        Giải pháp<br /><span>Bóc tách dòng tiền</span>
        <img src="{{ asset('img/landing-page/dots-circle-blue.png') }}" alt=""
          class="img-fluid dots-circle-img">
      </h3>
    </div>

    <img class="img-fluid circle-line-blue"
      src="{{ asset('img/landing-page/circle-line-blue.png') }}" alt="">
  </div>
</body>

</html>
