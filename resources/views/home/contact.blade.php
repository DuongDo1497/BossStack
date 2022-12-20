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
              <img class="icon img-fluid" src="{{ asset('img/web/icon-phone.svg') }}" alt="icon" />
              <ul>
                <li>
                  <p class="text"><b>Hotline:</b> 0918 90 55 00 <span>(Ms Ngân)</span></p>
                </li>
                <li>
                  <p class="text"><b>Mr Dũng:</b> 0819 04 89 98 <span>(P. Kĩ thuật)</span></p>
                </li>
                <li>
                  <p class="text"><b>Ms Ngọc:</b> 0849 66 40 05 <span>(BP. CSKH)</span></p>
                </li>
              </ul>
            </div>
            <div class="company-info__item">
              <img class="icon img-fluid" src="{{ asset('img/web/icon-mail.svg') }}" alt="icon" />
              <p class="text">info@bossstack.vn</p>
            </div>
            <div class="company-info__item">
              <img class="icon img-fluid" src="{{ asset('img/web/icon-map.svg') }}" alt="icon" />
              <p class="text">LM81- 42.OT04 (Officetel), Landmark 81 Vinhomes Central Park, 720A
                Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.</p>
            </div>
          </div>
          <div class="company-maps">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2120688935174!2d106.7219059292688!3d10.795063401125727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527c2f8f30911%3A0x36ac5073f8c91acd!2sLandmark%2081!5e0!3m2!1svi!2s!4v1669685873733!5m2!1svi!2s"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="advisory-form">
          <div class="advisory-form__header">
            <img class="img-fluid" src="{{ asset('img/web/logo.svg') }}" alt="BossStack">
            <p>Liên hệ với chúng tôi</p>
          </div>
          @if (isset($infor))
            <div class="alert alert-success">
              {{ $infor }}
            </div>
          @endif
          <form action="{{ route('coaching-store') }}?continue=true" method="post" id="frm">
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
  </div>
@endsection
