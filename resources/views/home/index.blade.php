@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/main.css') }}">
@endsection

@section('content')
  <div class="section section-banner banner-home">
    <div class="banner-body">
      <div class="container">
        <div class="wrap">
          <div class="banner-home__left">
            <h1 class="banner-home__title"><span>PHẦN MỀM</span> BÓC TÁCH DÒNG TIỀN <span>dành cho Cá nhân và Doanh
                nghiệp</span>
            </h1>
            <p class="banner-home__text">Đưa ra quyết định tốt hơn, đem lại <span class="text-bold">LỢI NHUẬN TỨC THÌ</span>
              và <span class="text-bold">HOÀN THÀNH MỤC TIÊU</span> của bạn</p>
            <a class="btn btn-second btn-size-lg btn-contact" href="{{ asset('contact') }}">Liên
              hệ</a>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-video">
      <video autoplay muted loop>
        <source src="{{ asset('img/web/video-banner.mp4') }}" type="video/mp4">
      </video>
      <div class="banner-video__bg"></div>
    </div>
  </div>

  <div class="section section-solution solution">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Giải pháp của BossStack</h4>
        <div class="solution-body">
          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('img/web/solution-icon-1.svg') }}"
              alt="BÓC TÁCH DÒNG TIỀN" />
            <div class="card-body">
              <h6 class="card-body__title">BÓC TÁCH DÒNG TIỀN</h6>
              <div class="card-body__content">
                <p>Bóc tách dòng tiền chủ doanh nghiệp và doanh nghiệp​</p>
              </div>
            </div>
            <div class="card-link">
              <a class="btn btn-size-full" href="{{ asset('/products/cash-flow-dissection') }}">Xem
                thêm</a>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('img/web/solution-icon-2.svg') }}"
              alt="CHUYỂN ĐỔI VẬN HÀNH" />
            <div class="card-body">
              <h6 class="card-body__title">THỰC THI DÒNG TIỀN DOANH NGHIỆP</h6>
              <div class="card-body__content">
                <p>Đề xuất và thực thi những phương án về quản trị dòng tiền, quản trị rủi ro và cung cấp một cái nhìn
                  tổng quan về tài chính doanh nghiệp​</p>
              </div>
            </div>
            <div class="card-link">
              <a class="btn btn-size-full" href="{{ asset('/products/data-convert') }}">Xem thêm</a>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('img/web/solution-icon-3.svg') }}"
              alt="KIỂM SOÁT THẤT THOÁT DOANH NGHIỆP" />
            <div class="card-body">
              <h6 class="card-body__title">KIỂM SOÁT THẤT THOÁT DOANH NGHIỆP</h6>
              <div class="card-body__content">
                <p>Giúp doanh nghiệp cắt giảm tối đa chi phí mà không làm ảnh hưởng đến hoạt động toàn thể doanh nghiệp
                  thông qua hệ thống phần mềm và chuyên gia BossStack</p>
              </div>
            </div>
            <div class="card-link">
              <a class="btn btn-size-full" href="{{ asset('/products/loss-control') }}">Xem thêm</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-why-bs why-bs">
    <div class="container">
      <div class="wrap">
        <div class="why-bs__left">
          <h4 class="section-title">Tại sao lựa chọn BossStack?</h4>
          <div class="why-bs__list">
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-1.svg') }}"
                alt="Kiểm soát tốt dòng tiền chủ sở hữu">
              <span class="text">Kiểm soát tốt dòng tiền chủ sở hữu</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-2.svg') }}" alt="Kiểm soát thất thoát">
              <span class="text">Kiểm soát thất thoát</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-7.svg') }}"
                alt="Gia tăng chất lượng dữ liệu Tối ưu hóa chi phí">
              <span class="text">Tối ưu hóa chi phí</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-4.svg') }}"
                alt="Gia tăng chất lượng dữ liệu Tối ưu hóa chi phí">
              <span class="text">Gia tăng chất lượng dữ liệu</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-5.svg') }}"
                alt="Công cụ quản lý vận hành hiệu quả cho doanh nghiệp">
              <span class="text">Công cụ quản lý vận hành hiệu quả cho doanh nghiệp</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-6.svg') }}"
                alt="Tự động hóa quy trình quản lý để giải phóng chủ doanh nghiệp">
              <span class="text">Tự động hóa quy trình quản lý để giải phóng chủ doanh nghiệp</span>
            </div>
            <div class="why-bs__item">
              <img class="img-fluid icon" src="{{ asset('img/web/why-icon-3.svg') }}"
                alt="Theo kịp xu hướng chuyển đổi số">
              <span class="text">Theo kịp xu hướng chuyển đổi số</span>
            </div>
          </div>
        </div>
        <img class="img-fluid why-bs__img" src="{{ asset('img/web/why-bs-1.png') }}" alt="image">
      </div>
    </div>
  </div>

  <div class="section section-partner partner">
    <div class="container">
      <div class="wrap">
        <div class="partner-carousel owl-carousel owl-theme">
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-1.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-2.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-3.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-4.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-5.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-6.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-7.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-8.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-9.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-12.png') }}" alt="partner-icon">
          </div>
          <div class="item">
            <img class="img-fluid partner-item" src="{{ asset('img/web/partner-13.png') }}" alt="partner-icon">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-review review">
    <div class="container">
      <div class="wrap">
        <h4 class="section-title">Khách hàng nói về giải pháp BossStack</h4>
        <div class="review-body">
          <div class="review-carousel owl-carousel owl-theme">
            <div class="item">
              <div class="review-rate">
                <div class="review-rate__item">
                  <p class="title">CHẤT LƯỢNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">GIÁ TIỀN</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">MỨC ĐỘ HÀI LÒNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
              </div>
              <p class="review-content">“Ban đầu tôi biết đến BossStack với vai trò mang đến giải
                pháp chuyển đổi dữ liệu giúp lưu trữ dữ liệu có hệ thống, đồng bộ dữ liệu trên một
                nền tảng. Tôi có thể tìm kiếm tài liệu, hợp đồng dễ dàng mỗi lần làm việc với khách
                hàng, đối tác. Tiếp đó, Vietponics áp dụng hệ thống vận hành số chuyên sâu từ
                BossStack giúp tôi bớt gánh nặng trong khâu điều hành khi có quy trình làm việc rõ
                ràng, các phòng ban liên kết chặt chẽ và làm việc nhịp nhàng.”</p>
              <div class="review-footer">
                <img class="img-fluid review-footer__avt" src="{{ asset('img/web/review-avt-2.jpg') }}"
                  alt="avatar">
                <div class="review-footer__info">
                  <h6 class="name">Nguyễn Đức Huy</h6>
                  <p class="position">CEO Vietponics</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="review-rate">
                <div class="review-rate__item">
                  <p class="title">CHẤT LƯỢNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">GIÁ TIỀN</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">MỨC ĐỘ HÀI LÒNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
              </div>
              <p class="review-content">“Là quản lý của một công ty xuất nhập khẩu nông sản, tôi đánh
                giá cao giải pháp vận hành số của BossStack. Trước đó, tôi mất nhiều thời gian cho
                khâu quản lý vận hành doanh nghiệp, nhập xuất sản phẩm, quản lý nhân sự rồi làm việc
                cùng các đối tác nước ngoài. Sau một thời gian áp dụng giải pháp vận hành số của
                BossStack tôi gần như không phải mang công việc về nhà làm và có nhiều thời gian cho
                gia đình.”</p>
              <div class="review-footer">
                <img class="img-fluid review-footer__avt" src="{{ asset('img/web/review-avt-1.jpg') }}"
                  alt="avatar">
                <div class="review-footer__info">
                  <h6 class="name">Nguyễn Thị Hồng Thủy</h6>
                  <p class="position">CEO Công ty TNHH TMDV XNK Dương Thủy</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="review-rate">
                <div class="review-rate__item">
                  <p class="title">CHẤT LƯỢNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">GIÁ TIỀN</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">MỨC ĐỘ HÀI LÒNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
              </div>
              <p class="review-content">“<b>Phần mềm BossStack</b> giúp bạn theo dõi, kiểm soát các
                dòng tiền và giúp chúng
                luôn hoạt động hiệu quả. Đặc biệt, dòng tiền cá nhân và dòng tiền đầu tư kinh doanh
                của bạn được tách bạch hoàn toàn. Khi dòng tiền cá nhân và doanh nghiệp được bóc
                tách, bạn sẽ chủ động hơn trong việc lập kế hoạch tài chính gia đình và các dự án
                kinh doanh.”</p>
              <div class="review-footer">
                <img class="img-fluid review-footer__avt" src="{{ asset('img/user-1.jpg') }}" alt="avatar">
                <div class="review-footer__info">
                  <h6 class="name">Lê Hoài Ân</h6>
                  <p class="position">CFA, tác giả cuốn sách bán chạy số 1 thị trường "20 năm lịch sử
                    Thị trường Chứng khoán Việt Nam"</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="review-rate">
                <div class="review-rate__item">
                  <p class="title">CHẤT LƯỢNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">GIÁ TIỀN</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">MỨC ĐỘ HÀI LÒNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
              </div>
              <p class="review-content">“Phần mềm BossStack giúp tôi phân bổ tài sản và dòng tiền vào
                các ví mục tiêu tài chính khác nhau. Tôi có thể theo dõi từng mục thu chi, từng mục
                tiêu tài chính đã tối ưu chưa. Từ đó, tôi phân bổ dòng tiền một cách hợp lý và cắt
                giảm những chi phí không cần thiết.”</p>
              <div class="review-footer">
                <img class="img-fluid review-footer__avt" src="{{ asset('img/user.jpg') }}" alt="avatar">
                <div class="review-footer__info">
                  <h6 class="name">Huỳnh Thu Ái</h6>
                  <p class="position">Cố vấn, đào tạo hệ thống quản lý doanh nghiệp AMS</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="review-rate">
                <div class="review-rate__item">
                  <p class="title">CHẤT LƯỢNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">GIÁ TIỀN</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">MỨC ĐỘ HÀI LÒNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
              </div>
              <p class="review-content">“BossStack là quản gia đáng tin cậy” - Quản gia vừa trông coi
                nhà cửa (quản lý vận hành), coi sóc tiền bạc (bóc tách và quản lý dòng tiền).
                BossStack là địa chỉ tin cậy, không những quản trị dòng tiền hiệu quả mà còn tạo giá
                trị thặng dư, gia tăng giá trị dòng tiền cho doanh nghiệp dựa trên sự am hiểu về hoạt
                động kinh doanh của doanh nghiệp”</p>
              <div class="review-footer">
                <img class="img-fluid review-footer__avt" src="{{ asset('img/web/review-avt-3.jpg') }}"
                  alt="avatar">
                <div class="review-footer__info">
                  <h6 class="name">Đinh Thúy Phương</h6>
                  <p class="position">CEO Công ty Mana.st</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="review-rate">
                <div class="review-rate__item">
                  <p class="title">CHẤT LƯỢNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">GIÁ TIỀN</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
                <div class="review-rate__item">
                  <p class="title">MỨC ĐỘ HÀI LÒNG</p>
                  <div class="start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                    <img class="img-fluid" src="{{ asset('img/web/icon-start.svg') }}" alt="icon-start">
                  </div>
                </div>
              </div>
              <p class="review-content">“Sử dụng <b>phần mềm BossStack</b> cuối tháng tôi
                không cần ngồi ghi chép hay nhập bảng tính Excel. <b>Phần mềm BossStack</b> giúp tôi
                quản lý mọi thu chi của cá nhân, gia đình và bóc tách hoàn toàn với dòng tiền
                kinh doanh tại doanh nghiệp của tôi. Tính năng mà tôi đặc biệt quan tâm đó chính
                là tính toán số tiền nghỉ hưu giúp tôi có những kế hoạch dài hạn về tài chính
                của mình.”</p>
              <div class="review-footer">
                <img class="img-fluid review-footer__avt" src="{{ asset('img/web/review-avt-4.jpg') }}"
                  alt="avatar">
                <div class="review-footer__info">
                  <h6 class="name">Nguyễn Đỗ Cẩm Bình</h6>
                  <p class="position">Trưởng phòng kinh doanh, Công ty BĐS Him Lam</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-contact-us contact-us">
    <div class="container">
      <div class="wrap">
        <div class="contact-us__content">
          <h3 class="section-title">Liên hệ với chúng tôi</h3>
          <div class="contact-us__list">
            <div class="contact-us__item">
              <img class="img-fluid icon" src="{{ asset('img/web/icon-check.svg') }}" alt="icon" />
              <span class="text">Cắt giảm tối đa chi phí</span>
            </div>
            <div class="contact-us__item">
              <img class="img-fluid icon" src="{{ asset('img/web/icon-check.svg') }}" alt="icon" />
              <span class="text">Tiết kiệm 80% thời gian quản lý dự án</span>
            </div>
            <div class="contact-us__item">
              <img class="img-fluid icon" src="{{ asset('img/web/icon-check.svg') }}" alt="icon" />
              <span class="text">Gia tăng 55% hiệu suất công việc</span>
            </div>
          </div>
        </div>
        @if (isset($infor))
          <div class="alert alert-success">
            {{ $infor }}
          </div>
        @endif
        <form class="contact-us__form" action="{{ route('coaching-store') }}?continue=true" method="post"
          id="frm">
          {{ csrf_field() }}
          <input type='hidden' name='course' value='7'>
          <input type='hidden' name='solution' value='0'>
          <input type='hidden' name='typereport' value='0'>
          <div class="form-group">
            <label class="form-label" for="fullname">Họ và tên <span>*</span></label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên *"
              required>
          </div>
          <div class="form-group">
            <label class="form-label" for="phone">Số điện thoại <span>*</span></label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại *"
              required>
          </div>
          <div class="form-group">
            <label class="form-label" for="email">Email <span>*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email *" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="company">Công ty</label>
            <input type="text" class="form-control" id="content" name="content" placeholder="Công ty">
          </div>
          <div class="form-group">
            <label class="form-label" for="message">Chúng tôi có thể giúp gì cho bạn?</label>
            <textarea name="title" class="form-control" id="title" placeholder="Chúng tôi có thể giúp gì cho bạn?"></textarea>
          </div>
          <button type="submit" class="btn btn-second btn-size-lg btn-send">Gửi ngay</button>
        </form>
      </div>
    </div>
  </div>
@endsection
