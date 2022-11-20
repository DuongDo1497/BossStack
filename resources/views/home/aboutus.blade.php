@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/aboutus.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          {{-- <div class="banner-default__link">
            <img class="icon img-fluid" src="{{ asset('img/web/link-icon.svg') }}" alt="" />
            <span class="text">Về chúng tôi</span>
          </div> --}}
          <h1 class="banner-default__title text-center">Về chúng tôi</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-introduction introduction">
    <div class="container">
      <div class="wrap">
        <div class="introduction-bs">
          <div class="introduction-bs__left">
            <h3>Về BossStack</h3>
            <div class="introduction-bs__content">
              <p><b>BossStack</b> ra đời vào năm 2015, nâng cấp và hoàn thiện trong suốt 7 năm với mục
                đích
                đưa công nghệ tối ưu vào giải quyết từng vấn đề của doanh nghiệp từ việc hỗ trợ ra
                quyết định, bóc tách dòng tiền, chuyển đổi vận hành, kiểm soát thất thoát và phát
                triển dữ liệu khách hàng.</p>
              <p>Mỗi giải pháp của BossStack chuyên sâu đều mang tính thực thi từ vận hành đến tài
                chính tạo nên bức tranh tổng thể doanh nghiệp sáng rõ và hiệu quả, giúp chủ doanh
                nghiệp thực sự giải phóng <b>"bản thân"</b> ra khỏi <b>"business"</b> của mình.</p>
            </div>
          </div>
          <img class="img-fluid" src="{{ asset('img/web/introduction-img.jpg') }}" alt="">
        </div>
        <div class="introduction-slogan">
          <div class="introduction-slogan__item">
            <h3 class="title">
              <img class="img-fluid" src="{{ asset('img/web/introduction-icon-1.svg') }}"
                alt="">
              Sứ mệnh
            </h3>
            <p class="text">BossStack đồng hành, thực thi và mang đến hiệu quả tối ưu giúp chủ doanh
              nghiệp giải phóng gánh nặng quản lý.</p>
          </div>
          <div class="introduction-slogan__item">
            <h3 class="title">
              <img class="img-fluid" src="{{ asset('img/web/introduction-icon-2.svg') }}"
                alt="">
              Tầm nhìn
            </h3>
            <p class="text">Chuyển đổi số ngành tài chính, phát triển nền tảng tài chính vững chắc
              cho mỗi cá nhân và doanh nghiệp.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-leadership leadership">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Thành phần ban lãnh đạo</h4>
        <div class="leadership-list">
          <div class="leadership-item">
            <img class="img-fluid leadership-avt" src="{{ asset('img/web/leadership-1.jpg') }}"
              alt="">
            <div class="leadership-info">
              <h5 class="name">
                Chau Pham
                <a href="#">
                  <img class="img-fluid leadership-social"
                    src="{{ asset('img/web/linkedin-icon.svg') }}" alt="">
                </a>
              </h5>
              <h6 class="position">CEO/Founder</h6>
              <div class="exp">
                <ul>
                  <li>15 năm kinh nghiệm về tài chính, đầu tư</li>
                  <li>10 năm kinh nghiệm trong ngành ngân hàng</li>
                  <li>2012 - 2017: Giám đốc PGD, Phó Giám đốc CN Ngân hàng</li>
                  <li>7 năm kinh nghiệm trong ngành công nghệ (thương hiệu cũ: LamsTech)</li>
                  <li>2014 - Hiện tại: CEO, Founder sách RBooks</li>
                  <li>2015 - Hiện tại: CEO, Founder phần mềm BossStack</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="leadership-item reverse">
            <img class="img-fluid leadership-avt" src="{{ asset('img/web/leadership-2.jpg') }}"
              alt="">
            <div class="leadership-info">
              <h5 class="name">
                Tu Nguyen
                <a href="#">
                  <img class="img-fluid leadership-social"
                    src="{{ asset('img/web/linkedin-icon.svg') }}" alt="">
                </a>
              </h5>
              <h6 class="position">Cố Vấn Tài Chính </h6>
              <div class="exp">
                <p>Giám đốc điều hành V Lotus</p>
                <p>Chuỗi nhà hàng cao cấp và nổi tiếng trong ngành F&B như:</p>
                <ul>
                  <li>Ussina Sky 77</li>
                  <li>Ushi Mania</li>
                  <li>Conservo (Japanese Bread)</li>
                  <li>Yoshinoya (World famous beef bowl since 1899)</li>
                  <li>CocoIchibanya (Japan No1 Curry)</li>
                  <li>Marukame Udon (Japan No1 Udon)</li>
                </ul>
                <p>2013 - 2019: CEO-CFO VFS Co ltd</p>
                <p>...</p>
              </div>
            </div>
          </div>
          <div class="leadership-item">
            <img class="img-fluid leadership-avt" src="{{ asset('img/web/leadership-3.jpg') }}"
              alt="">
            <div class="leadership-info">
              <h5 class="name">
                Huong Le
                <a href="#">
                  <img class="img-fluid leadership-social"
                    src="{{ asset('img/web/linkedin-icon.svg') }}" alt="">
                </a>
              </h5>
              <h6 class="position">Kế Toán Trưởng</h6>
              <div class="exp">
                <p>Hơn 20 năm kinh nghiệm trong ngành công nghệ thông tin và Fin-tech</p>
                <ul>
                  <li>Tháng 11/ 2018: Tập đoàn Liên Thái Bình Dương (IPP Group)</li>
                  <li>Công ty TNHH Thời trang và Mỹ phẩm Duy Anh (DAFC), công ty con của IPP Group
                  </li>
                </ul>
                <p>Hiện tại Vị trí: Kế toán trưởng Điều hành kiêm Giám đốc Tài chính</p>
                <ul>
                  <li>Tháng 3/ 1998: Tập đoàn Liên Thái Bình Dương (IPP Group)</li>
                  <li>Công ty TNHH Dịch vụ Thực phẩm và Đồ uống Việt Nam (VFS), công ty con của IPP
                    Group</li>
                  <li>...</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-about section-about-history overflow-hidden">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Lịch sử hình thành và phát triển</h4>
        <div class="history-list">
          <div class="history-item">
            <span class="year">2014</span>
            <img class="img-fluid icon" src="{{ asset('img/web/history-icon-1.png') }}"
              alt="" />
          </div>

          <div class="history-item">
            <span class="year">2015</span>
            <img class="img-fluid icon" src="{{ asset('img/web/history-icon-2.png') }}"
              alt="" />
          </div>

          <div class="history-item">
            <span class="year">2018</span>
            <img class="img-fluid icon" src="{{ asset('img/web/history-icon-3.png') }}"
              alt="" />
            <div class="feature">
              <h6>Phát triển tính năng:</h6>
              <p>Bóc tách Dòng tiền</p>
              <p>Thực thi Dòng tiền Chuyên sâu</p>
            </div>
          </div>

          <div class="history-item">
            <span class="year">2021</span>
            <img class="img-fluid icon" src="{{ asset('img/web/history-icon-4.png') }}"
              alt="" />
            <div class="feature">
              <h6>Phát triển giải pháp:</h6>
              <p>Chuyển đổi Dữ liệu</p>
              <p>Vận hành số Chuyên sâu</p>
              <p>Kiểm soát Thất thoát Doanh nghiệp</p>
            </div>
          </div>
        </div>
        <img class="img-fluid history-tree" src="{{ asset('img/web/history-tree.png') }}"
          alt="" />
      </div>
    </div>
  </div>

  <div class="section section-advertise advertise">
    <div class="container">
      <div class="wrap">
        <h3 class="advertise-title">Chúng tôi giải phóng chủ doanh nghiệp khỏi gánh nặng quản lý</h3>
        <a class="btn btn-second btn-size-lg btn-contact" href="#">Liên hệ</a>
      </div>
    </div>
  </div>
@endsection
