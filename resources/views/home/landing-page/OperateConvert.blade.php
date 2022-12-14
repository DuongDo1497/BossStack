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
  <link rel="stylesheet" href="{{ asset('css/landingpage/OperateConvert.css') }}">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="wrap">
        <a class="logo" href="{{ asset('chuyendoivanhanh') }}"><img class="img-fluid"
            src="{{ asset('img/web/logo.svg') }}" alt="BossStack"></a>
        <ul class="course-info">
          <li>
            <img class="course-info__icon img-fluid" src="{{ asset('img/landing-page/icon-phone.svg') }}"
              alt="icon-phone" />
            <div class="course-info__content">
              <span class="title">Hotline</span>
              <span class="text">+84 918 90 55 00</span>
            </div>
          </li>
          <li>
            <img class="course-info__icon img-fluid" src="{{ asset('img/landing-page/icon-mail.svg') }}"
              alt="icon-mail" />
            <div class="course-info__content">
              <span class="title">Email</span>
              <span class="text">info@bossstack.vn</span>
            </div>
          </li>
          <li>
            <img class="course-info__icon img-fluid" src="{{ asset('img/landing-page/icon-calendar.svg') }}"
              alt="icon-calendar" />
            <div class="course-info__content">
              <span class="title">L???ch khai gi???ng</span>
              <span class="text">30/11/2022</span>
            </div>
          </li>
          <li>
            <a href="#register-now" class="btn btn-primary btn-register">????NG K?? NGAY</a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <div class="banner">
    <div class="container">
      <div class="wrap">
        <div class="banner-content" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000"
          data-aos-easing="ease-in-out">
          <h1>CHUY???N ?????I<span>V???N H??NH</span></h1>
          <p>Chuy???n ?????i d??? li???u v?? v???n h??nh s??? chuy??n s??u gi??p:</p>
          <ul>
            <li><span>N??NG CAO HI???U QU???</span> kinh doanh</li>
            <li><span>GIA T??NG L???I NHU???N</span> doanh nghi???p</li>
          </ul>
          <a href="#register-now" class="btn btn-primary btn-register">????NG K?? NGAY</a>
        </div>
        <img class="banner-img img-fluid" src="{{ asset('img/landing-page/banner-img-1.png') }}" alt="banner-img"
          data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000" data-aos-easing="ease-in-out">
      </div>
    </div>
  </div>

  <div class="main">
    <div class="section section-who">
      <div class="container">
        <div class="wrap">
          <h4>B???n l???</h4>
          <div class="who-list">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/landing-page/who-icon-5.svg') }}"
                alt="C???a h??ng kinh doanh t??? do">
              <p class="card-title">C???a h??ng kinh doanh t??? do</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/landing-page/who-icon-6.svg') }}" alt="Startup">
              <p class="card-title">Startup</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/landing-page/who-icon-7.svg') }}"
                alt="Doanh nghi???p v???a v?? nh???">
              <p class="card-title">Doanh nghi???p v???a v?? nh???</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/landing-page/who-icon-8.svg') }}"
                alt="Doanh nghi???p l???n">
              <p class="card-title">Doanh nghi???p l???n</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-difficult">
      <div class="container">
        <div class="wrap">
          <div class="difficult-title">
            <h5><span>60%</span> doanh nghi???p kh??ng bi???t <br />m??nh ??ang g???p nh???ng <span>KH??
                KH??N</span> n??y</h5>
          </div>
          <div class="difficult-left">
            <div class="difficult-list">
              <div class="difficult-column">
                <div class="difficult-item">
                  <p class="number"><span>01</span></p>
                  <p class="text"><b>D??? li???u, th??ng tin l??u tr???</b> kh??ng ?????ng b???, ch???ng ch??o, kh?? ki???m so??t</p>
                </div>
                <div class="difficult-item">
                  <p class="number"><span>02</span></p>
                  <p class="text">Kh?? kh??n trong vi???c <b>b???o m???t th??ng tin t??i li???u</b></p>
                </div>
                <div class="difficult-item">
                  <p class="number"><span>03</span></p>
                  <p class="text">Ra quy???t ?????nh thi???u ch??nh x??c v?? <b>kh??ng ????? d??? li???u b??o c??o</b></p>
                </div>
                <div class="difficult-item">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>

              <div class="difficult-column">
                <div class="difficult-item">
                  <p class="number"><span>04</span></p>
                  <p class="text"><b>Kh??ng c?? th??ng tin k???p th???i</b> cho c??c cu???c h???p quan tr???ng, l??m vi???c v???i ?????i t??c
                    v?? kh??ch
                    h??ng</p>
                </div>
                <div class="difficult-item">
                  <p class="number"><span>05</span></p>
                  <p class="text"><b>Th???t tho??t d??? li???u</b> khi thay ?????i nh??n s???</p>
                </div>
                <div class="difficult-item">
                  <p class="number"><span>06</span></p>
                  <p class="text"><b>Thi???u quy tr??nh l??m vi???c</b>, v???n h??nh kh?? kh??n, thi???u t??nh li??n k???t gi???a c??c ph??ng
                    ban,
                    lu???ng c??ng vi???c b??? ng???t qu??ng</p>
                </div>
                <div class="difficult-item">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>

              <div class="difficult-column">
                <div class="difficult-item">
                  <i class="fa-solid fa-arrow-down"></i>
                </div>
                <div class="difficult-item">
                  <p class="number"><span>07</span></p>
                  <p class="text"><b>Thi???u quy chu???n ????nh gi??</b> ch??nh x??c n??ng l???c nh??n vi??n d???a tr??n c?? s??? d??? li???u
                  </p>
                </div>
                <div class="difficult-item">
                  <p class="number"><span>08</span></p>
                  <p class="text"><b>Th???t tho??t nhi???u chi ph??</b> v???n h??nh doanh nghi???p: nh??n s???, h??ng h??a, t??i ch??nh
                  </p>
                </div>
                <div class="difficult-item">
                  <p class="number"><span>09</span></p>
                  <p class="text"><b>G??nh n???ng v???n h??nh</b> ?????t h???t ph???n l???n tr??n vai ch??? doanh nghi???p</p>
                </div>
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
                ??i???m <span>KH??C BI???T</span> c???a ph???n m???m <span>BossStack</span>
              </h5>
              <div class="advantages-content__list">
                <div class="advantages-content__item">
                  <img class="advantages-content__icon img-fluid"
                    src="{{ asset('img/landing-page/icon-advantages-4.svg') }}" alt="icon-advantages">
                  <p>Ti???t ki???m <span>80%<sup>*</sup></span> th???i gian khi qu???n l?? d??? ??n</p>
                </div>
                <div class="advantages-content__item">
                  <img class="advantages-content__icon img-fluid"
                    src="{{ asset('img/landing-page/icon-advantages-5.svg') }}" alt="icon-advantages">
                  <p>T??ng <span>55%<sup>*</sup></span> hi???u su???t c??ng vi???c c???a t???ng nh??n s??? ??? c??c
                    ph??ng ban</p>
                </div>
                <div class="advantages-content__item">
                  <img class="advantages-content__icon img-fluid"
                    src="{{ asset('img/landing-page/icon-advantages-8.svg') }}" alt="icon-advantages">
                  <p><span>95%<sup>*</sup></span> doanh nghi???p tinh g???n quy tr??nh, linh ho???t trong
                    vi???c ra quy???t ?????nh</p>
                </div>
                <div class="advantages-content__item">
                  <img class="advantages-content__icon img-fluid"
                    src="{{ asset('img/landing-page/icon-advantages-7.png') }}" alt="icon-advantages">
                  <p><span>T??Y CH???NH</span> thi???t l???p h??? th???ng ph?? h???p v???i t???ng doanh nghi???p</p>
                </div>
              </div>
              <p class="note"><sup>*</sup> Zenkit (2018)</p>
            </div>
            <img class="advantages-content__img img-fluid" src="{{ asset('img/landing-page/advantages-img.png') }}"
              alt="advantages-content-img">
          </div>
        </div>
      </div>
    </div>

    <div class="section section-timeline">
      <div class="container">
        <div class="wrap">
          <h3 class="timeline-title">
            Gi???i ph??p<br /><span>Chuy???n ?????i d??? li???u</span>
          </h3>
          <div class="timeline">
            <div class="timeline__all">
              <div class="timeline__item" data-aos="fade-down" data-aos-delay="0" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="timeline__content">
                  <div class="timeline__header">
                    <img class="img-fluid timeline-icon" src="{{ asset('img/landing-page/timeline-icon-1.svg') }}"
                      alt="timeline-icon">
                    <h3>STEP <span>1</span></h3>
                  </div>
                  <div class="timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Ph??n t??ch s???n ph???m l??i</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>X??c ?????nh m?? h??nh kinh doanh</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Thi???t l???p lu???ng c?? b???n d??? li???u</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="timeline__item" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="timeline__content">
                  <div class="timeline__header">
                    <img class="img-fluid timeline-icon" src="{{ asset('img/landing-page/timeline-icon-2.svg') }}"
                      alt="timeline-icon">
                    <h3>STEP <span>2</span></h3>
                  </div>
                  <div class="timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>X??y d???ng n???i dung chi ti???t cho h??? th???ng chuy???n ?????i d??? li???u</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>H??? th???ng h??a d??? li???u b???ng quy tr??nh v?? b??? t??i li???u h??? tr???</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Qu???n tr??? h??? th???ng d??? li???u b???ng <span class="italic">Microsoft 365
                            Business</span></span>
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="timeline__item" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="timeline__content">
                  <div class="timeline__header">
                    <img class="img-fluid timeline-icon" src="{{ asset('img/landing-page/timeline-icon-3.svg') }}"
                      alt="timeline-icon">
                    <h3>STEP <span>3</span></h3>
                  </div>
                  <div class="timeline__body">
                    <ul>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>T??nh hu???ng m???u ????? h??? tr??? kh??ch h??ng thi???t l???p chuy???n ?????i d??? li???u</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Ph??n t??ch vi???c qu???n tr??? d??? li???u b???ng ph???n m???m <span class="italic">Microsoft 365
                            Business</span></p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>L??m vi???c tr???c ti???p c??ng kh??ch h??ng</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>T???ng k???t, g??p ?? v?? kh???o s??t sau ch????ng tr??nh</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="timeline__btn">
              <a href="#register-now" class="btn btn-primary btn-register">????NG K?? NGAY</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-solution">
      <div class="container">
        <div class="wrap">
          <h3 class="solution-title">
            Gi???i ph??p <span>V???N H??NH S??? CHUY??N S??U</span>
          </h3>

          <div class="solution-list">
            <div class="solution-item">
              <p>Quy tr??nh <br />s???n ph???m</p>
            </div>

            <div class="solution-item">
              <p class="number">1</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-1.svg') }}"
                  alt="solution-icon">
                <p class="text">K?? h???p ?????ng</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">2</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-10.svg') }}"
                  alt="solution-icon">
                <p class="text">Thu th???p th??ng tin d??? li???u ch??? doanh nghi???p</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">3</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-11.svg') }}"
                  alt="solution-icon">
                <p class="text">Kh???o s??t <b>t??nh tr???ng th???c t???</b> doanh nghi???p <span class="star">*</span></p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">4</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-4.svg') }}"
                  alt="solution-icon">
                <p class="text"><b>?????i ng?? chuy??n gia</b> BossStack s??? ph??n t??ch v?? l??n k??? ho???ch
                  b???ng
                  ph???n m???m <span class="italic">Microsoft 365 Business</span></p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">5</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-12.svg') }}"
                  alt="solution-icon">
                <p class="text">T??? ch???c l??? KickOff t???i v??n ph??ng BossStack: gi???i ph??p <b>v???n h??nh
                    s???</b> doanh nghi???p</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">6</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-3.svg') }}"
                  alt="solution-icon">
                <p class="text">L??m vi???c <b>tr???c ti???p</b> c??ng nh??n s??? ph??? tr??ch c???a doanh nghi???p
                  trong <b>1 tu???n</b> </p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">7</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-13.svg') }}"
                  alt="solution-icon">
                <p class="text">Chuy???n giao <b>b??? k??? ho???ch</b> v???n h??nh s??? chi ti???t v?? b??? h?????ng
                  d???n s??? d???ng ph???n m???m <span class="italic">Microsoft 365 Business</span></p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">8</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-3.svg') }}"
                  alt="solution-icon">
                <p class="text">L??m vi???c tr???c ti???p <b>2 ng??y</b> t???i doanh nghi???p ????? th???c thi
                  gi???i ph??p v?? h?????ng d???n, ????o t???o n???i b???, ????nh gi?? k???t qu??? th???c thi v?? nghi???m thu
                  b??n giao <span class="star">*</span></p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">9</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-14.svg') }}"
                  alt="solution-icon">
                <p class="text">Th???c hi???n h??? tr??? k?? thu???t 24/7 cho 1 t??i kho???n <b>Standard</b> v??
                  1 t??i kho???n <b>Basic</b> c???a <span class="italic">Microsoft 365 Business</span>
                  trong <b>1 n??m</b></p>
              </div>
            </div>
          </div>

          <p class="solution-note">
            (*) ?????a ??i???m HCM: <span class="italic"><b>mi???n ph??</b></span><br />
            C??c ?????a ??i???m kh??c: vui l??ng li??n h??? nh??n vi??n <b>BossStack</b>
          </p>
        </div>
      </div>
    </div>

    <div class="section section-review">
      <div class="container">
        <div class="wrap">
          <h4 class="review__title">Kh??ch h??ng n??i v??? <span>Gi???i ph??p <span class="highlight">Boss</span>Stack</span>
          </h4>
          <div class="review__carousel-2 owl-carousel owl-theme">
            <div class="item">
              <div class="review__top">
                <img src="{{ asset('img/web/review-avt-2.jpg') }}" alt="review-avt" class="img-fluid review__avatar">
                <p class="review__info">
                  <span>Nguy???n ?????c Huy</span>
                  <span>CEO Vietponics</span>
                </p>
              </div>
              <p class="review__content">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-quote-3.png') }}" alt="icon-quote">
                Ban ?????u t??i bi???t ?????n BossStack v???i vai tr?? mang ?????n gi???i ph??p chuy???n ?????i d??? li???u
                gi??p l??u tr??? d??? li???u c?? h??? th???ng, ?????ng b??? d??? li???u tr??n m???t n???n t???ng. T??i c?? th??? t??m
                ki???m t??i li???u, h???p ?????ng d??? d??ng m???i l???n l??m vi???c v???i kh??ch h??ng, ?????i t??c. Ti???p ????,
                Vietponics ??p d???ng h??? th???ng v???n h??nh s??? chuy??n s??u t??? BossStack gi??p t??i b???t g??nh
                n???ng trong kh??u ??i???u h??nh khi c?? quy tr??nh l??m vi???c r?? r??ng, c??c ph??ng ban li??n k???t
                ch???t ch??? v?? l??m vi???c nh???p nh??ng.
              </p>
            </div>
            <div class="item">
              <div class="review__top">
                <img src="{{ asset('img/web/review-avt-1.jpg') }}" alt="review-avt" class="img-fluid review__avatar">
                <p class="review__info">
                  <span>Nguy???n Th??? H???ng Th???y</span>
                  <span>CEO C??ng ty TNHH TMDV XNK D????ng Th???y</span>
                </p>
              </div>
              <p class="review__content">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-quote-3.png') }}" alt="icon-quote">
                L?? qu???n l?? c???a m???t c??ng ty xu???t nh???p kh???u n??ng s???n, t??i ????nh gi?? cao gi???i ph??p
                v???n h??nh s??? c???a BossStack. Tr?????c ????, t??i m???t nhi???u th???i gian cho kh??u qu???n l?? v???n
                h??nh doanh nghi???p, nh???p xu???t s???n ph???m, qu???n l?? nh??n s??? r???i l??m vi???c c??ng c??c ?????i t??c
                n?????c ngo??i. Sau m???t th???i gian ??p d???ng gi???i ph??p v???n h??nh s??? c???a BossStack t??i g???n
                nh?? kh??ng ph???i mang c??ng vi???c v??? nh?? l??m v?? c?? nhi???u th???i gian cho gia ????nh.
              </p>
            </div>
            <div class="item">
              <div class="review__top">
                <img src="{{ asset('img/web/review-avt-3.jpg') }}" alt="review-avt" class="img-fluid review__avatar">
                <p class="review__info">
                  <span>??inh Th??y Ph????ng</span>
                  <span>CEO C??ng ty Mana.st</span>
                </p>
              </div>
              <p class="review__content">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-quote-3.png') }}" alt="icon-quote">
                ???BossStack l?? qu???n gia ????ng tin c???y??? - Qu???n gia v???a tr??ng coi nh?? c???a (qu???n l?? v???n
                h??nh), coi s??c ti???n b???c (b??c t??ch d??ng ti???n ch??? doanh nghi???p). BossStack l?? ?????a ch???
                tin c???y, kh??ng nh???ng qu???n tr??? d??ng ti???n hi???u qu??? m?? c??n t???o gi?? tr??? th???ng d??, gia
                t??ng gi?? tr??? d??ng ti???n cho doanh nghi???p d???a tr??n s??? am hi???u v??? ho???t ?????ng kinh doanh
                c???a doanh nghi???p???
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-register" id="register-now">
      <div class="container">
        <div class="wrap">
          <form class="register__form" data-aos="fade-right" data-aos-delay="0" data-aos-duration="1000"
            data-aos-easing="ease-in-out" role="form" action="{{ route('coaching-store') }}?continue=true" method="post"
            id="frm">
            {{ csrf_field() }}
            <input type='hidden' name='course' value='9'>
            <input type='hidden' name='typereport' value='0'>
            <h6>
              <p>????ng k??</p>
              <p>Th??ng tin t?? v???n</p>
            </h6>
            <div class="form-info">
              <input type="text" class="form-control" name="fullname" placeholder="H??? v?? t??n *" required>
              @if ($errors->has('fullname'))
              <span class="text-danger">{{ $errors->first('fullname') }}</span>
              @endif

              <input type="text" class="form-control" name="phone" placeholder="S??? ??i???n tho???i *" required>
              @if ($errors->has('phone'))
              <span class="text-danger">{{ $errors->first('phone') }}</span>
              @endif

              <input type="email" class="form-control" name="email" placeholder="Email *" required>
              @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif

              <input type="text" class="form-control" name="content" placeholder="C??ng ty">
              <input type="text" class="form-control" name="title" placeholder="Ch???c v???">
              <select class="form-select" name="solution">
                <option selected value="">Gi???i ph??p</option>
                <option value="3">Chuy???n ?????i d??? li???u</option>
                <option value="4">V???n h??nh s??? chuy??n s??u</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-register">????NG K?? NGAY</button>
          </form>
          <div class="register__voucher" data-aos="fade-left" data-aos-delay="0" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            <div class="voucher-title">
              <h4>CHUY???N ?????I V???N H??NH</h4>
              <p>Chuy???n ?????i d??? li???u v?? v???n h??nh s??? chuy??n s??u gi??p n??ng cao hi???u qu??? kinh doanh v??
                gia t??ng l???i nhu???n doanh nghi???p</p>
            </div>
            <div class="line"></div>
            <div class="voucher-qr">
              <div class="voucher-qr__img">
                <img class="img-fluid" src="{{ asset('img/landing-page/qr-code-boctach.png') }}" alt="qr-code-boctach">
              </div>
              <p class="voucher-qr__text">Qu??t m?? QR ????? t??m hi???u th??m</p>
            </div>
            <div class="voucher-countdown">
              <p class="voucher-countdown__text">Khuy???n m??i k???t th??c sau</p>
              <div class="voucher-countdown__content countdown-wrap white-cl">
                <div class="item days">
                  <span class="number">00</span>
                  <span class="text">Ng??y</span>
                </div>
                <div class="item hours">
                  <span class="number">00</span>
                  <span class="text">Gi???</span>
                </div>
                <div class="item minutes">
                  <span class="number">00</span>
                  <span class="text">Ph??t</span>
                </div>
                <div class="item seconds">
                  <span class="number">00</span>
                  <span class="text">Gi??y</span>
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
        <a class="logo" href="{{ asset('chuyendoivanhanh') }}">
          <img class="img-fluid logo-img-cl" src="{{ asset('img/landing-page/logo-bs-color.svg') }}" alt="BossStack">
          <img class="img-fluid logo-img-white" src="{{ asset('img/landing-page/logo-bs-white.svg') }}" alt="BossStack">
        </a>
        <div class="footer-content">
          <div class="footer-content__item">
            <p>
              <span>Address:</span> LM81- 42.OT04 (Officetel), Landmark 81 Vinhomes Central Park,
              720A ??i???n Bi??n
              Ph???, Ph?????ng 22, Qu???n B??nh Th???nh, Tp H??? Ch?? Minh.
            </p>
          </div>
          <div class="footer-content__item">
            <p><span>Hotline:</span> +84 918 90 55 00</p>
            <p><span>Email:</span> info@bossstack.vn</p>
          </div>
          <div class="footer-content__item">
            <div class="footer-content__social">
              <a href="https://www.linkedin.com/company/bossstack/posts/?feedView=all&viewAsMember=true">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-linkedin.svg') }}" alt="icon-linkedin">
              </a>
            </div>
            <div class="footer-content__social">
              <a href="https://www.facebook.com/bossstack.vn">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-fb.svg') }}" alt="icon-fb">
              </a>
            </div>
            <div class="footer-content__social">
              <a href="https://zalo.me/g/khgykm270">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-zalo.svg') }}" alt="icon-zalo">
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
        <img class="img-fluid" src="{{ asset('img/landing-page/icon-close.svg') }}" alt="icon-close">
      </button>
      <div class="popup-register__header">
        <div class="popup-register__left">
          <p class="title">????ng k??<br />th??ng tin t?? v???n</p>
          <div class="register-countdown countdown-wrap white-cl">
            <div class="item days">
              <span class="number">00</span>
              <span class="text">Ng??y</span>
            </div>
            <div class="item hours">
              <span class="number">00</span>
              <span class="text">Gi???</span>
            </div>
            <div class="item minutes">
              <span class="number">00</span>
              <span class="text">Ph??t</span>
            </div>
            <div class="item seconds">
              <span class="number">00</span>
              <span class="text">Gi??y</span>
            </div>
          </div>
        </div>
        <img class="img-fluid popup-register__image" src="{{ asset('img/landing-page/popup-img.png') }}"
          alt="popup-img">
      </div>
      <div class="popup-register__body">
        @if (isset($infor))
        <div class="alert alert-success">
          {{ $infor }}
        </div>
        @endif
        <form role="form" action="{{ route('coaching-store') }}?continue=true" method="post" id="frms">
          {{ csrf_field() }}
          <input type='hidden' name='course' value='9'>
          <input type='hidden' name='typereport' value='0'>
          <div class="popup-register__form">
            <input type="text" class="form-control" name="fullname" placeholder="H??? v?? t??n *" required>
            @if ($errors->has('fullname'))
            <span class="text-danger">{{ $errors->first('fullname') }}</span>
            @endif
            <input type="text" class="form-control" name="phone" placeholder="S??? ??i???n tho???i *" required>
            @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
            <input type="email" class="form-control" name="email" placeholder="Email *" required>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <input type="hidden" class="form-control" name="content" value="" placeholder="C??ng ty">
            <input type="hidden" class="form-control" name="title" value="" placeholder="Ch???c v???">
            <select class="form-select" name="solution">
              <option selected value="">Gi???i ph??p</option>
              <option value="3">Chuy???n ?????i d??? li???u</option>
              <option value="4">V???n h??nh s??? chuy??n s??u</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary btn-register">????NG K?? NGAY</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CW9T4BJH9S"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-CW9T4BJH9S');
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('js/landingpage/main.js') }}"></script>
</body>

</html>