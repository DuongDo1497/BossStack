@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/form-advisory.css') }}">

  {{--
<link rel="stylesheet" href="{{ asset('css/pages/products.css') }}">

<style type="text/css">
  @media only screen and (max-width: 768px) {
    .box-customer ul {
      padding-left: 18px;
    }

    .box-customer ul li:first-child {
      margin-left: -18px;
      margin-bottom: 15px;
    }

    .box-customer ul li:first-child font {
      font-size: 20px;
    }

    .box-help.box-customer .help-form .form-group {
      margin-bottom: 0;
    }

    .box-help.box-customer .help-form .form-group input,
    .box-help.box-customer .help-form .form-group textarea {
      margin-bottom: 15px;
    }
  }
</style> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  @if (isset($infor))
    @include('layouts.partials.messages.infor')
  @endif

  <div class="section form-advisory">
    <div class="breadcrumb">
      <span>Tư vấn 24/7</span> / <span class="current">Hỗ trợ</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="form-advisory__company">
          <p>Nếu khách hàng có nhu cầu tư vấn ứng dụng BossStack, vui lòng liên hệ</p>
          <div class="company-info">
            <p class="company-name">Công ty TNHH Lam Minh Anh</p>
            <ul>
              <li><span>Địa chỉ:</span> LM81- 42.OT04 (Officetel), Landmark 81 Vinhomes Central Park,
                Số 720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.</li>
              <li><span>Email:</span> info@bossstack.vn</li>
              <li><span>Website:</span> https://bossstack.vn</li>
              <li><span>Hotline:</span> 0918 905 500</li>
              <li><span>Mr Dũng:</span> 0819 04 89 98 (P. Kỹ thuật)</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="box box-primary">
        <h6 class="box-title">Hoặc vui lòng gửi thông tin cho chúng tôi</h6>
        <div class="form-advisory__contact">
          <form role="form" action="{{ route('advisorys-submit', ['type' => 1]) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="fullname">Họ và tên<span>*</span>:</label>
              <input type="text" class="form-control" name="fullname" id="fullname" value=""
                placeholder="Họ và tên *" required>
            </div>
            <div class="form-group">
              <label for="phone">Số điện thoại<span>*</span>:</label>
              <input type="text" class="form-control" name="phone" id="phone" value=""
                placeholder="Số điện thoại *" required>
            </div>
            <div class="form-group">
              <label for="email">Email<span>*</span>:</label>
              <input type="email" class="form-control" name="email" id="email" value=""
                placeholder="Email *" required>
            </div>
            <div class="form-group">
              <label for="company">Công ty:</label>
              <input type="text" class="form-control" name="company" id="company" value=""
                placeholder="Công ty">
            </div>
            <div class="form-group">
              <label for="message">Chúng tôi có thể giúp gì cho bạn?</label>
              <textarea class="form-control" name="message" id="message" placeholder="Chúng tôi có thể giúp gì cho bạn?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-send">Gửi tin nhắn</button>
          </form>
        </div>
      </div>
    </div>

  </div>

  {{-- <div class="row">
  <div class="col-xs-12">
    <div class="box box-help box-customer">

      <div class="box-body">

        <p>
          <font size="3">Nếu khách hàng có nhu cầu tư vấn ứng dụng BossStack Coaching, vui lòng liên hệ:</font>
        </p>

        <ul>
          <li style="list-style-type: none;">
            <font size="3"><b>Công ty TNHH Lam Minh Anh</b></font>
          </li>
          <li>
            <font size="3"><b>Địa chỉ: </b>LM81 - 42.OT04 (Officetel), Tòa Landmark 81 Vinhomes Central Park, Số 720A
              Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh</font>
          </li>
          <li>
            <font size="3"><b>Số điện thoại: </b>0918.905.500 (Zalo/Viber/Skype)</font>
          </li>
          <li>
            <font size="3"><b>Email: </b>info@bossstack.vn</font>
          </li>
        </ul>



        <div class="help-form">
          <p>
            <font size="3">Hoặc vui lòng gửi thông tin cho chúng tôi:</font>
          </p>
          <form role="form" action="{{ route('advisorys-submit', ['type' => 1]) }}" method="post">
            @csrf
            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <input class="form-control" type="text" name="fullname" placeholder="Họ tên" required="">
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="text" name="email" placeholder="Email" required="">
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="text" name="phone" placeholder="Số điện thoại" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <input class="form-control" type="text" name="titleadvisory" placeholder="Tiêu đề" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <textarea class="form-control" rows="10" name="contentadvisory"
                    placeholder="Thông điệp của bạn....."></textarea>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-send">Gửi tin nhắn</button>
          </form>
        </div>

      </div>
    </div>

  </div>
</div> --}}
@endsection

@section('scripts')
  @include('product-manage.advisory.partials.script')
@endsection
