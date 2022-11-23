@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/payments.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <h1 class="banner-default__title text-center">Thanh toán</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-payment payment">
    <div class="container">
      <div class="wrap">
        <form action="">
          <div class="payment-left">
            <div class="payment-customer">
              <h6 class="payment-title">Thông tin khách hàng</h6>
              <div class="payment-content">
                <p>
                  <span class="title">Họ và tên</span>
                  <span class="text">Tên khách hàng</span>
                </p>
                <p>
                  <span class="title">Email</span>
                  <span class="text">mailkhachhang@gmail.com</span>
                </p>
                <p>
                  <span class="title">Địa chỉ</span>
                  <span class="text">Landmark 81 Vinhomes Central Park, 720A Điện Biên Phủ, Phường
                    22,
                    Quận Bình Thạnh, Tp Hồ Chí Minh.</span>
                </p>
                <p>
                  <span class="title">Điện thoại</span>
                  <span class="text">0123456789</span>
                </p>
              </div>
            </div>
            <div class="payment-form">
              <h6 class="payment-title">Hình thức thanh toán</h6>
              <div class="payment-content">
                <div class="payment-option">
                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="paymentType"
                          value="" id="paymentDirect">
                        <label class="form-check-label" for="paymentDirect"></label>
                      </div>
                      <img class="img-fluid payment-icon"
                        src="{{ asset('img/web/payment-icon-1.svg') }}" alt="">
                      <p class="text">Thanh toán trực tiếp tại văn phòng BossStack</p>
                    </div>
                    <div class="payment-option__body">
                      <p class="title-big">CÔNG TY TNHH LAM MINH ANH</p>
                      <p>
                        <span class="title">Địa chỉ</span>
                        <span class="text">L4-42.OT05, Landmark 81 Vinhomes Central Park, 720A Điện
                          Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.</span>
                      </p>
                      <p>
                        <span class="title">Điện thoại</span>
                        <span class="text">028.3636.4405</span>
                      </p>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="paymentType"
                          value="" id="paymentTranfer">
                        <label class="form-check-label" for="paymentTranfer"></label>
                      </div>
                      <img class="img-fluid payment-icon"
                        src="{{ asset('img/web/payment-icon-2.svg') }}" alt="">
                      <p class="text">Thanh toán chuyển khoản ngân hàng</p>
                    </div>
                    <div class="payment-option__body">
                      <p class="title-big">Bước 1:</p>
                      <ul class="mb-3">
                        <li><b>Tên ngân hàng:</b> Ngân hàng TMCP Á Châu (ACB)</li>
                        <li><b>Số tài khoản:</b> 000000000</li>
                        <li><b>Tên chủ tài khoản:</b> CÔNG TY TNHH LAM MINH ANH</li>
                        <li><b>Chi nhánh</b>: Q.Bình Thạnh, TP.HCM</li>
                      </ul>
                      <p class="title-big">Bước 2:</p>
                      <p>[Tên Công ty/ Cá nhân] [Số điện thoại] thanh toán [Số lượng] [Gói
                        Premium/Standard/Basic] [1thang/3thang/6thang/12thang]</p>
                      <p>Ví dụ: Công ty TNHH Lam Minh Anh 0918905500 thanh toán 5 Gói Standard 6 tháng
                        hoặc Nguyễn Văn A 0918905500 thanh toán 1 Gói Basic 12 tháng</p>
                      <p>(Nếu chuyển qua ATM bạn chụp ảnh biên lai chuyển tiền và gửi
                        email về info@bossstack.vn cùng với thông tin dịch vụ). Nhận được chuyển khoản
                        hệ
                        thống sẽ kích hoạt dịch vụ và gửi thông tin quản trị qua email cho bạn.</p>
                      <p class="title-big">Bước 3:</p>
                      <p class="mb-0">Vào trang "Thông tin liên hệ” trên website hoặc gọi điện đến
                        số điện thoại hỗ
                        trợ để thông báo tình trạng đã chuyển để hệ thống cập nhật tình trạng thanh
                        toán đơn hàng của bạn.</p>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="paymentType"
                          value="" id="paymentOnline">
                        <label class="form-check-label" for="paymentOnline"></label>
                      </div>
                      <img class="img-fluid payment-icon"
                        src="{{ asset('img/web/payment-icon-3.svg') }}" alt="">
                      <p class="text">Thanh toán trực tuyến</p>
                    </div>
                    <div class="payment-option__body">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="payment-right">
            <div class="payment-order">
              <h6 class="payment-title">Thông tin đơn hàng</h6>
              <div class="payment-content">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Dịch vụ</th>
                      <th>Thời hạn</th>
                      <th>Số tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Standard</td>
                      <td>1 Tháng</td>
                      <td>267.000 đồng</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2">Thành tiền</td>
                      <td>267.000 đồng</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <button type="submit" class="btn btn-second btn-size-lg btn-pay">Thanh toán</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
