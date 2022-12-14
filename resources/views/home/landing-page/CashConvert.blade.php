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
  <link rel="stylesheet" href="{{ asset('css/landingpage/CashConvert.css') }}">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="wrap">
        <a class="logo" href="{{ asset('chuyendoidongtien') }}"><img class="img-fluid"
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
          <h1>B??C T??CH <span>D??NG TI???N</span></h1>
          <ul>
            <li><span>X??? L??</span> v?? <span>B??C T??CH</span> c??c m???nh gh??p trong d??ng ti???n t???ng quan
              c?? nh??n.</li>
            <li><span>B??C T??CH D??NG TI???N</span> c?? nh??n ra kh???i d??ng ti???n ?????u t??, t??? doanh, d??ng
              ti???n doanh nghi???p.</li>
          </ul>
          <a href="#register-now" class="btn btn-primary btn-register">????NG K?? NGAY</a>
        </div>
        <img class="banner-img img-fluid" src="{{ asset('img/landing-page/banner-img-2.png') }}"
          alt="B??C T??CH D??NG TI???N" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
          data-aos-easing="ease-in-out">
      </div>
    </div>
    <img class="banner-bg-footer img-fluid" src="{{ asset('img/landing-page/banner-bg-footer.png') }}"
      alt="banner-bg-footer">
  </div>

  <div class="main">
    <div class="section section-who">
      <div class="container">
        <div class="wrap">
          <h4>B???n l???</h4>
          <div class="who-list">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/landing-page/who-icon-1.svg') }}"
                alt="C?? nh??n c?? nhu c???u">
              <p class="card-title">C?? nh??n c?? nhu c???u</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/landing-page/who-icon-2.svg') }}"
                alt="Nh??n vi??n, c???p qu???n l?? v??n ph??ng">
              <p class="card-title">Nh??n vi??n, c???p qu???n l?? v??n ph??ng</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/landing-page/who-icon-4.svg') }}"
                alt="Nh?? ?????u t??, kinh doanh t??? do">
              <p class="card-title">Nh?? ?????u t??, kinh doanh t??? do</p>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('img/landing-page/who-icon-3.svg') }}"
                alt="Ch??? doanh nghi???p">
              <p class="card-title">Ch??? doanh nghi???p</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-difficult">
      <div class="container">
        <div class="wrap">
          <div class="difficult-title">
            <h5>????y c?? ph???i <span>KH?? KH??N</span> b???n ??ang g???p ph???i</h5>
            <img src="https://bossstack.vn/img/landing-page/icon-question.png" alt="icon-question-img"
              class="img-fluid icon-question-img">
          </div>
          <div class="difficult-left">
            <div class="difficult-list">
              <div class="difficult-item">
                <p class="number"><span>01</span></p>
                <p class="text">L??m m??i <b>kh??ng d??</b></p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>02</span></p>
                <p class="text">Lu??n b???t an v?? kh??ng bi???t <b>c??ch ki???m so??t d??ng ti???n</b>, d???
                  ph??ng ti???n cho t????ng lai</p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>03</span></p>
                <p class="text"><b>L???n l???n ti???n b???c</b> gia ????nh, c?? nh??n v?? ?????u t??, kinh
                  doanh</p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>04</span></p>
                <p class="text"><b>Kh??ng c?? c??ng c??? ????? x??? l?? d??ng ti???n</b> c?? nh??n, t??? doanh
                  v?? doanh nghi???p</p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>05</span></p>
                <p class="text"><b>Ch??a t??ch b???ch</b> v?? qu???n l?? d??ng ti???n t???ng quan, b??? thi???u
                  h???t v???n v?? m???t c?? h???i kinh doanh</p>
              </div>
              <div class="difficult-item">
                <p class="number"><span>06</span></p>
                <p class="text"><b>Thi???u c??ng c??? ph??n b??? d??ng ti???n</b> ???nh h?????ng ?????n ho???t ?????ng
                  doanh nghi???p, ?????c bi???t trong th??? tr?????ng nhi???u bi???n ?????ng</p>
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
                    src="{{ asset('img/landing-page/icon-advantages-check.svg') }}" alt="icon-advantages-check">
                  <p><span>TI???T KI???M</span> <span>87%<sup>*</sup></span> th???i gian khi qu???n l??, x???
                    l?? v?? ????a ra</p>
                </div>
                <div class="advantages-content__item">
                  <img class="advantages-content__icon img-fluid"
                    src="{{ asset('img/landing-page/icon-advantages-check.svg') }}" alt="icon-advantages-check">
                  <p><span>T??Y CH???NH</span> ph?? h???p v???i t??nh h??nh t??i ch??nh c???a t???ng kh??ch h??ng</p>
                </div>
                <div class="advantages-content__item">
                  <img class="advantages-content__icon img-fluid"
                    src="{{ asset('img/landing-page/icon-advantages-check.svg') }}" alt="icon-advantages-check">
                  <p><b>Ph???n m???m BossStack</b> c?? h??? th???ng ch???u t???i cao v?? t??ch h???p b???o m???t
                    nhi???u l???p qua giao th???c <span>HTTPS</span></p>
                </div>
              </div>
              <p class="note"><sup>*</sup> D???a tr??n tr???i nghi???m th???c t??? kh??ch h??ng</p>
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
            Gi???i ph??p<br /><span>B??c t??ch d??ng ti???n</span>
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
                        <p>Ph??n t??ch n???n t???ng d??ng ti???n</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>X??? l?? v?? b??c t??ch c??c m???nh gh??p trong d??ng ti???n t???ng quan c?? nh??n</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Thi???t l???p h??? th???ng d??ng ti???n b???ng <span>ph???n m???m BossStack</span></p>
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
                        <p>Ph????ng ph??p ph??n b??? d??ng ti???n sau chi ti??u b???ng <span>ph???n m???m
                            BossStack</span></p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>B??c t??ch d??ng ti???n c?? nh??n ra kh???i d??ng ti???n ?????u t??, t??? doanh, d??ng ti???n
                          doanh nghi???p</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>S??? d???ng <span>ph???n m???m BossStack</span> ????? ????nh gi?? v?? h??? tr??? vi???c ra
                          quy???t ?????nh v??? ti???n</span>
                        </p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Qu???n l?? v?? ??i???u ch???nh k???p th???i s??? bi???n ?????ng c???a c??c d??ng ti???n th??nh vi??n
                          gia ????nh</p>
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
                        <p>T??nh hu???ng m???u ????? h??? tr??? kh??ch h??ng x??? l?? d??ng ti???n</p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle"></i>
                        <p>Ph??n t??ch vi???c b??c t??ch d??ng ti???n b???ng <span>ph???n m???m BossStack</span>
                        </p>
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
            Gi???i ph??p th???c thi <br /><span>D??ng ti???n chuy??n s??u</span>
          </h3>

          <div class="solution-list">
            <div class="solution-item">
              <p>Bao g???m g??i <span><br />???Gi???i ph??p <span class="highlight"><br />B??C T??CH
                    <br />D??NG
                    TI???N</span>"</span></p>
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
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-2.svg') }}"
                  alt="solution-icon">
                <p class="text">Thu th???p th??ng tin d??? li???u ch??? doanh nghi???p</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">3</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-3.svg') }}"
                  alt="solution-icon">
                <p class="text">L??m vi???c tr???c ti???p l???n 1 c??ng kh??ch h??ng t???i <b>v??n ph??ng</b>
                  BossStack
                  (ho???c <b>online</b>) trong 4 gi???</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">4</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-4.svg') }}"
                  alt="solution-icon">
                <p class="text">Ph??n t??ch ????nh gi?? b???ng <b>ph???n m???m</b> v?? ?????i ng?? chuy??n gia
                  BossStack
                </p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">5</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-5.svg') }}"
                  alt="solution-icon">
                <p class="text">L??m vi???c tr???c ti???p l???n 2 c??ng kh??ch h??ng t???i <b>v??n ph??ng</b>
                  BossStack
                  (ho???c <b>online</b>) trong 2 gi???</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">6</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-6.svg') }}"
                  alt="solution-icon">
                <p class="text">Chuy???n giao <b>b??? k??? ho???ch</b> b??c t??ch d??ng ti???n chi ti???t</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">7</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-7.svg') }}"
                  alt="solution-icon">
                <p class="text">Chuy???n giao <b>b??? h?????ng d???n</b> s??? d???ng ph???n m???m BossStack</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">8</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-8.svg') }}"
                  alt="solution-icon">
                <p class="text">Th???c hi???n h??? tr??? k?? thu???t 24/7 cho 1 t??i kho???n <b>Standard</b>
                  (k??m 1
                  t??i kho???n <b>th??nh vi??n</b>) trong 1 n??m</p>
              </div>
            </div>

            <div class="solution-item">
              <p class="number">9</p>
              <div class="content">
                <img class="img-fluid icon" src="{{ asset('img/landing-page/solution-icon-9.svg') }}"
                  alt="solution-icon">
                <p class="text">C???p nh???t v?? ????nh gi?? ti???n ????? b??? k??? ho???ch b??c t??ch d??ng ti???n <b>
                    3
                    th??ng/ l???n trong 1 n??m
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
          <h4 class="review__title">Kh??ch h??ng n??i v??? <span>Gi???i ph??p <span class="highlight">Boss</span>Stack</span>
          </h4>
          <div class="review__carousel-2 owl-carousel owl-theme">
            <div class="item">
              <div class="review__top">
                <img src="{{ asset('img/web/review-avt-4.jpg') }}" alt="review-avt" class="img-fluid review__avatar">
                <p class="review__info">
                  <span>Nguy???n ????? C???m B??nh</span>
                  <span>Tr?????ng ph??ng kinh doanh c??ng ty B??S Him Lam</span>
                </p>
              </div>
              <p class="review__content">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-quote-3.png') }}" alt="icon-quote">
                S??? d???ng <b>ph???n m???m BossStack</b> cu???i th??ng t??i
                kh??ng c???n ng???i ghi ch??p hay nh???p b???ng t??nh Excel. <b>Ph???n m???m BossStack</b> gi??p t??i
                qu???n l?? m???i thu chi c???a c?? nh??n, gia ????nh v?? b??c t??ch ho??n to??n v???i d??ng ti???n
                kinh doanh t???i doanh nghi???p c???a t??i. T??nh n??ng m?? t??i ?????c bi???t quan t??m ???? ch??nh
                l?? t??nh to??n s??? ti???n ngh??? h??u gi??p t??i c?? nh???ng k??? ho???ch d??i h???n v??? t??i ch??nh
                c???a m??nh.
              </p>
            </div>
            <div class="item">
              <div class="review__top">
                <img src="{{ asset('img/user-1.jpg') }}" alt="review-avt" class="img-fluid review__avatar">
                <p class="review__info">
                  <span>L?? Ho??i ??n - CFA</span>
                  <span>T??c gi??? cu???n s??ch b??n ch???y s??? 1 th??? tr?????ng "<b>
                      20 n??m l???ch s??? Th??? tr?????ng Ch???ng
                      kho??n Vi???t Nam
                    </b>"</span>
                </p>
              </div>
              <p class="review__content">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-quote-3.png') }}" alt="icon-quote">
                <b>Ph???n m???m BossStack</b> gi??p b???n theo d??i, ki???m so??t c??c d??ng ti???n v?? gi??p ch??ng
                lu??n ho???t ?????ng hi???u qu???. ?????c bi???t, d??ng ti???n c?? nh??n v?? d??ng ti???n ?????u t?? kinh doanh
                c???a b???n ???????c t??ch b???ch ho??n to??n. Khi d??ng ti???n c?? nh??n v?? doanh nghi???p ???????c b??c
                t??ch, b???n s??? ch??? ?????ng h??n trong vi???c l???p k??? ho???ch t??i ch??nh gia ????nh v?? c??c d??? ??n
                kinh doanh.
              </p>
            </div>
            <div class="item">
              <div class="review__top">
                <img src="{{ asset('img/user.jpg') }}" alt="review-avt" class="img-fluid review__avatar">
                <p class="review__info">
                  <span>Hu???nh Thu ??i</span>
                  <span>C??? v???n, ????o t???o h??? th???ng qu???n l?? doanh nghi???p AMS</span>
                </p>
              </div>
              <p class="review__content">
                <img class="img-fluid" src="{{ asset('img/landing-page/icon-quote-3.png') }}" alt="icon-quote">
                <b>Ph???n m???m BossStack</b> gi??p t??i ph??n b??? t??i s???n
                v?? d??ng ti???n v??o c??c v?? m???c ti??u t??i ch??nh kh??c nhau. T??i c?? th??? theo d??i t???ng
                m???c thu chi, t???ng m???c ti??u t??i ch??nh ???? t???i ??u ch??a. T??? ????, t??i ph??n b??? d??ng
                ti???n m???t c??ch h???p l?? v?? c???t gi???m nh???ng chi ph?? kh??ng c???n thi???t.
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
            <input type='hidden' name='course' value='8'>
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
                <option value="1">B??c t??ch d??ng ti???n</option>
                <option value="2">Th???c thi d??ng ti???n chuy??n s??u</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-register">????NG K?? NGAY</button>
          </form>
          <div class="register__voucher" data-aos="fade-left" data-aos-delay="0" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            <div class="voucher-title">
              <h4>B??C T??CH D??NG TI???N</h4>
              <p>B??c t??ch d??ng ti???n c?? nh??n ra kh???i d??ng ti???n ?????u t??, d??ng ti???n kinh doanh b???ng
                ph???n m???m BossStack</p>
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
        <a class="logo" href="{{ asset('chuyendoidongtien') }}">
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
              <a href="https://zalo.me/g/vwezco279">
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
          <input type='hidden' name='course' value='8'>
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
              <option value="1">B??c t??ch d??ng ti???n</option>
              <option value="2">Th???c thi d??ng ti???n chuy??n s??u</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary btn-register">????NG K?? NGAY</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-F59M9WQVSH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-F59M9WQVSH');
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('js/landingpage/main.js') }}"></script>
</body>

</html>