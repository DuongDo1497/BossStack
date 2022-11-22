@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/contact.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <h1 class="banner-default__title text-center">Liên hệ</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-advisory advisory">
    <div class="container">
      <div class="wrap">
        <div class="advisory-content">
          <h4>Liên hệ tư vấn</h4>
          <p>Chúng tôi sẽ giúp bạn giải đáp các thắc mắc về: <br />- Tìm ra giải pháp thích hợp với mô
            hình kinh doanh của bạn. <br />- Áp dụng công nghệ để tối ưu hóa quy trình kinh doanh.</p>
          <div class="company-info">
            <div class="company-info__item">
              <img class="icon img-fluid" src="{{ asset('img/web/icon-phone.svg') }}"
                alt="" />
              <span class="text">+84 918 90 55 00</span>
            </div>
            <div class="company-info__item">
              <img class="icon img-fluid" src="{{ asset('img/web/icon-mail.svg') }}" alt="" />
              <span class="text">info@bossstack.vn</span>
            </div>
            <div class="company-info__item">
              <img class="icon img-fluid" src="{{ asset('img/web/icon-map.svg') }}" alt="" />
              <span class="text">LM81- 42.OT04 (Officetel), Landmark 81 Vinhomes Central Park, 720A
                Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.</span>
            </div>
          </div>
        </div>

        <div class="advisory-form">
          <div class="advisory-form__header">
            <img class="img-fluid" src="{{ asset('img/web/logo.svg') }}" alt="">
            <p>Liên hệ với chúng tôi</p>
          </div>
          <form action="">
            <div class="form-group">
              <label class="form-label" for="fullname">Họ và tên <span>*</span></label>
              <input type="text" class="form-control" id="fullname" name="fullname"
                placeholder="Họ và tên *" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="phone">Số điện thoại <span>*</span></label>
              <input type="text" class="form-control" id="phone" name="phone"
                placeholder="Số điện thoại *" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="email">Email <span>*</span></label>
              <input type="email" class="form-control" id="email" name="email"
                placeholder="Email *" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="company">Công ty</label>
              <input type="text" class="form-control" id="company" name="company"
                placeholder="Công ty">
            </div>
            <div class="form-group">
              <label class="form-label" for="message">Chúng tôi có thể giúp gì cho bạn?</label>
              <textarea name="message" class="form-control" id="message"
                placeholder="Chúng tôi có thể giúp gì cho bạn?"></textarea>
            </div>
            <button type="submit" class="btn btn-second btn-size-lg btn-send">Gửi ngay</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
