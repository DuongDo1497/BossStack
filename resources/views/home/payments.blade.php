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
                <div class="payment-option" id="accordion-parent">
                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="paymentType" value=""
                          id="paymentDirect" data-bs-toggle="collapse" href="#payment-direct">
                        <label class="form-check-label" for="paymentDirect"></label>
                      </div>
                      <img class="img-fluid payment-icon" src="{{ asset('img/web/payment-icon-1.svg') }}"
                        alt="payment-icon">
                      <p class="text">Trực tiếp tại Văn phòng</p>
                    </div>
                    <div class="payment-option__body collapse" id="payment-direct" data-bs-parent="#accordion-parent">
                      <div class="content">
                        <p class="payment-direct__title">CÔNG TY TNHH LAM MINH ANH</p>
                        <div class="payment-direct__body">
                          <div class="item">
                            <span class="title">Địa chỉ:</span>
                            <span class="text">LM81 - 42.OT04 (Officetel), Landmark 81 Vinhomes Central Park, 720A Điện
                              Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.</span>
                          </div>
                          <div class="item">
                            <span class="title">Điện thoại:</span>
                            <span class="text">0918 90 55 00 hoặc 0819 04 89 98</span>
                          </div>
                          <div class="item">
                            <span class="title">Hình thức thanh toán:</span>
                            <span class="text">Tiền mặt/Chuyển khoản/Cà thẻ</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="paymentType" value=""
                          id="paymentTranfer" data-bs-toggle="collapse" href="#payment-tranfer">
                        <label class="form-check-label" for="paymentTranfer"></label>
                      </div>
                      <img class="img-fluid payment-icon" src="{{ asset('img/web/payment-icon-2.svg') }}"
                        alt="payment-icon">
                      <p class="text">Chuyển khoản Ngân hàng</p>
                    </div>
                    <div class="payment-option__body collapse" id="payment-tranfer" data-bs-parent="#accordion-parent">
                      <div class="content">
                        <p class="payment-option__text">Để thanh toán bằng hình thức chuyển khoản Ngân hàng, bạn vui lòng
                          xem hướng dẫn: <a href="#">Hướng dẫn thanh toán</a>.</p>
                      </div>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="paymentType" value=""
                          id="internetBanking" data-bs-toggle="collapse" href="#internet-banking">
                        <label class="form-check-label" for="internetBanking"></label>
                      </div>
                      <img class="img-fluid payment-icon" src="{{ asset('img/web/payment-icon-3.svg') }}"
                        alt="payment-icon">
                      <p class="text">Internet Banking</p>
                    </div>
                    <div class="payment-option__body collapse" id="internet-banking" data-bs-parent="#accordion-parent">
                      <div class="content">
                        <p class="payment-option__text">Để thanh toán bằng hình thức Internet Banking, bạn vui lòng xem
                          hướng dẫn: <a href="#">Hướng dẫn thanh toán</a>.</p>
                      </div>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="paymentType" value=""
                          id="cardGlobal" data-bs-toggle="collapse" href="#card-global">
                        <label class="form-check-label" for="cardGlobal"></label>
                      </div>
                      <img class="img-fluid payment-icon" src="{{ asset('img/web/payment-icon-4.svg') }}"
                        alt="payment-icon">
                      <p class="text">Thẻ Quốc tế và Nội địa</p>
                    </div>
                    <div class="payment-option__body collapse" id="card-global" data-bs-parent="#accordion-parent">
                      <div class="content">
                        <p class="payment-option__text">Để thanh toán bằng hình thức thẻ Quốc tế và Nội địa, bạn vui lòng
                          xem hướng dẫn: <a href="#">Hướng dẫn thanh toán</a>.</p>
                      </div>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="paymentType" value=""
                          id="appBanking" data-bs-toggle="collapse" href="#app-banking">
                        <label class="form-check-label" for="appBanking"></label>
                      </div>
                      <img class="img-fluid payment-icon" src="{{ asset('img/web/payment-icon-5.svg') }}"
                        alt="payment-icon">
                      <p class="text">App Mobile Banking</p>
                    </div>
                    <div class="payment-option__body collapse" id="app-banking" data-bs-parent="#accordion-parent">
                      <div class="content">
                        <p class="payment-option__text">Để thanh toán bằng hình thức app Mobile Banking, bạn vui lòng xem
                          hướng dẫn: <a href="#">Hướng dẫn thanh toán</a>.</p>
                      </div>
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
                      <td>
                        <p class="product-name">Standard</p>
                        <p class="promotion-title">Giảm giá</p>
                      </td>
                      <td>1 Tháng</td>
                      <td>
                        <p class="product-price">20.388.000 VND</p>
                        <p class="promotion-price">-4.077.600 VND (-20%)</p>
                      </td>
                    </tr>
                    <tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td>Thành tiền</td>
                      <td colspan="2">267.000 đồng</td>
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

@section('scripts')
  <script src="{{ asset('js/web/payments.js') }}"></script>
@endsection
