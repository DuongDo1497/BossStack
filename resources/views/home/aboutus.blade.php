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
                <p><b>2015 - hiện tại:</b> Chủ sở hữu, Nhà sáng lập và Giám đốc <b>BOSSSTACK</b>.</p>
                <p><b>2014 - hiện tại:</b> Chủ sở hữu, Nhà sáng lập và Giám đốc <b>RBOOKS</b>.</p>
                <p>Hơn <b>15 năm</b> kinh nghiệm trong ngành tài chính, đầu tư. Trong đó:</p>
                <ul>
                  <li>Hơn <b>10 năm</b> kinh nghiệm trong ngành ngân hàng.</li>
                  <li><b>2012-2017:</b> Giám đốc PGD, Phó Giám đốc Chi nhánh.</li>
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
                <p><b>2019 – Hiện tại</b>: Giám Đốc Điều Hành V LOTUS</p>
                <p>Công ty chuyên về thực phẩm và đồ uống với chuỗi nhà hàng cao cấp và các chuỗi
                  thương hiệu sản phẩm Nhật nổi tiếng như:</p>
                <ul>
                  <li>Ussina Sky 77</li>
                  <li>Ushi Mania</li>
                  <li>Conservo (Japanese Breads & Café)</li>
                  <li>Yoshinoya (giành được danh hiệu Cơm thịt Bò Thế giới nổi tiếng từ năm 1899)</li>
                  <li>CocoIchibanya (Thương hiệu Nhà hàng Cơm Cà ri Số 1 Nhật Bản)</li>
                  <li>Marukame Udon (Thương hiệu Tiệm mỳ Udon số một Nhật Bản)</li>
                </ul>
                <p><b>2013 - 2019</b>: Giám đốc Điều hành / Giám đốc Tài chính Công ty TNHH VFS</p>
                <p>Công ty chuyên về thực phẩm và đồ uống với chuỗi nhà hàng thức ăn nhanh Hoa Kỳ như:
                </p>
                <ul>
                  <li>Burger King</li>
                  <li>Domino’s Pizza</li>
                  <li>Popeyes Chicken</li>
                  <li>Dunkin Donuts</li>
                </ul>
                <p><b>2007 - 2012</b>: Giám đốc Tài chính: New World Fashion Group (NWFG)</p>
                <p>Tổng giám đốc điều hành:</p>
                <ul>
                  <li>Nhà máy Westfield</li>
                  <li>Công ty New World Fashion Group - Tập đoàn Vương quốc Anh với Nhà máy May & Khu
                    Công viên Công nghiệp</li>
                </ul>
              </div>
              <p class="read-more">Xem thêm</p>
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
                <p><b>Tháng 11/2018 - Hiện tại</b>: Kế toán trưởng kiêm Giám đốc Tài chính
                </p>
                <ul>
                  <li>Tập đoàn Liên Thái Bình Dương (IPP Group)</li>
                  <li>Công ty TNHH Thời trang và Mỹ phẩm Duy Anh (DAFC), công ty con của IPP Group
                  </li>
                </ul>
                <p><b>Tháng 3/2013 - Tháng 7/2017</b>: Quản trị Tài chính kiêm Kế toán Trưởng</p>
                <ul>
                  <li>Tập đoàn Liên Thái Bình Dương (IPP Group)</li>
                  <li>Công ty TNHH Dịch vụ Thực phẩm và Đồ uống Việt Nam (VFS), công ty con của IPP
                    Group</li>
                  <li>Lĩnh vực kinh doanh: Thực phẩm và Đồ uống.</li>
                  <li>Thương hiệu: <b>Domino’s Pizza</b>, <b>Burger King</b> và <b>Popeyes Chicken</b>
                  </li>
                  <li>Số lượng cửa hàng: Hơn 50</li>
                </ul>
                <p><b>Tháng 3/1998 - Tháng 11/2010</b>: Kế toán Trưởng, Trưởng phòng Kinh doanh</p>
                <ul>
                  <li>Công ty Cổ phần Tập đoàn T&T (Tập đoàn T&T Group)</li>
                </ul>
              </div>
              <p class="read-more">Xem thêm</p>
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

  <div class="section section-advertise advertise bg-img-blue">
    <div class="container">
      <div class="wrap">
        <h3 class="advertise-title">The easiest way to control business accurately and efficiently
        </h3>
        <a class="btn btn-second btn-size-lg btn-contact" href="{{ asset('contact') }}">Liên hệ</a>
      </div>
    </div>
  </div>
@endsection
