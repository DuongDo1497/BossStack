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
        <form role="form" action="{{ route('customers-processPaymentMomo') }}?continue=true"
          method="post" id="frm">
          {{ csrf_field() }}
          <input type='hidden' name='typereport' value=''>
          <input type='hidden' name='cid' value='{{ $id }}'>
          <div class="payment-left">
            <div class="payment-customer">
              <h6 class="payment-title">Thông tin khách hàng</h6>
              <div class="payment-content">
                <p>
                  <span class="title">Họ và tên</span>
                  <span class="text">{{ $customer->fullname }}</span>
                </p>
                <p>
                  <span class="title">Email</span>
                  <span class="text">{{ $customer->email }}</span>
                </p>
                <p>
                  <span class="title">Địa chỉ</span>
                  <span class="text">{{ $customer->address }}</span>
                </p>
                <p>
                  <span class="title">Điện thoại</span>
                  <span class="text">{{ $customer->phone }}</span>
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
                        <input class="form-check-input" type="radio" name="ord_payment_method"
                          value="0" id="paymentDirect" data-bs-toggle="collapse"
                          href="#payment-direct">
                        <label class="form-check-label" for="paymentDirect"></label>
                      </div>
                      <img class="img-fluid payment-icon"
                        src="{{ asset('img/web/payment-icon-1.svg') }}" alt="">
                      <p class="text">Thanh toán trực tiếp tại văn phòng BossStack</p>
                    </div>
                    <div class="payment-option__body collapse" id="payment-direct"
                      data-bs-parent="#accordion-parent">
                      <div class="content">
                        <p class="title-big">CÔNG TY TNHH LAM MINH ANH</p>
                        <p>
                          <span class="title">Địa chỉ:</span>
                          <span class="text">L4-42.OT05, Landmark 81 Vinhomes Central Park, 720A
                            Điện
                            Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.</span>
                        </p>
                        <p>
                          <span class="title">Điện thoại:</span>
                          <span class="text">028.3636.4405</span>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="ord_payment_method"
                          value="1" id="paymentTranfer" data-bs-toggle="collapse"
                          href="#payment-tranfer">
                        <label class="form-check-label" for="paymentTranfer"></label>
                      </div>
                      <img class="img-fluid payment-icon"
                        src="{{ asset('img/web/payment-icon-2.svg') }}" alt="">
                      <p class="text">Thanh toán chuyển khoản ngân hàng</p>
                    </div>
                    <div class="payment-option__body collapse" id="payment-tranfer"
                      data-bs-parent="#accordion-parent">
                      <div class="content">
                        <div class="paragraph">
                          <p class="title-big">Bước 1:</p>
                          <ul>
                            <li><b>Tên ngân hàng:</b> Ngân hàng TMCP Á Châu (ACB)</li>
                            <li><b>Số tài khoản:</b> 000000000</li>
                            <li><b>Tên chủ tài khoản:</b> CÔNG TY TNHH LAM MINH ANH</li>
                            <li><b>Chi nhánh</b>: Q.Bình Thạnh, TP.HCM</li>
                          </ul>
                        </div>
                        <div class="paragraph">
                          <p class="title-big">Bước 2:</p>
                          <p>[Tên Công ty/ Cá nhân] [Số điện thoại] thanh toán [Số lượng] [Gói
                            Premium/Standard/Basic] [1thang/3thang/6thang/12thang]</p>
                          <p>Ví dụ: Công ty TNHH Lam Minh Anh 0918905500 thanh toán 5 Gói Standard 6
                            tháng
                            hoặc Nguyễn Văn A 0918905500 thanh toán 1 Gói Basic 12 tháng</p>
                          <p>(Nếu chuyển qua ATM bạn chụp ảnh biên lai chuyển tiền và gửi
                            email về info@bossstack.vn cùng với thông tin dịch vụ). Nhận được chuyển
                            khoản
                            hệ
                            thống sẽ kích hoạt dịch vụ và gửi thông tin quản trị qua email cho bạn.
                          </p>
                        </div>
                        <div class="paragraph">
                          <p class="title-big">Bước 3:</p>
                          <p class="mb-0">Vào trang "Thông tin liên hệ” trên website hoặc gọi điện
                            đến
                            số điện thoại hỗ
                            trợ để thông báo tình trạng đã chuyển để hệ thống cập nhật tình trạng
                            thanh
                            toán đơn hàng của bạn.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="paymentType"
                          value="" id="paymentOnline" data-bs-toggle="collapse"
                          href="#payment-online">
                        <label class="form-check-label" for="paymentOnline"></label>
                      </div>
                      <img class="img-fluid payment-icon"
                        src="{{ asset('img/web/payment-icon-3.svg') }}" alt="">
                      <p class="text">Thanh toán trực tuyến</p>
                    </div>
                    <div class="payment-option__body collapse" id="payment-online"
                      data-bs-parent="#accordion-parent">
                      <div class="content">
                        <div id="accordion" class="card-type">
                          <div class="card-type__item">
                            <div class="card-type__header" data-bs-toggle="collapse"
                              href="#card-type__global">
                              <p class="text">Thẻ quốc tế</p>
                              <p class="icon"><i class="fa-solid fa-caret-down"></i></p>
                            </div>
                            <div class="card-type__body collapse" id="card-type__global"
                              data-bs-parent="#accordion">
                              <div class="card-form">
                                <p>Thêm thẻ</p>
                                <div class="card-form__detail">
                                  <div class="title">
                                    <p>Chi tiết thẻ</p>
                                    <div class="icon">
                                      <img class="img-fluid"
                                        src="{{ asset('img/web/card-icon-1.svg') }}"
                                        alt="">
                                      <img class="img-fluid"
                                        src="{{ asset('img/web/card-icon-2.svg') }}"
                                        alt="">
                                      <img class="img-fluid"
                                        src="{{ asset('img/web/card-icon-3.svg') }}"
                                        alt="">
                                      <img class="img-fluid"
                                        src="{{ asset('img/web/card-icon-4.svg') }}"
                                        alt="">
                                    </div>
                                  </div>
                                  <div class="body">
                                    <div class="form-group">
                                      <input type="number" class="form-control" id="numberCard"
                                        name="numberCard" placeholder="Số thẻ" required>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group">
                                        <input type="date" class="form-control"
                                          id="expirationCard" name="expirationCard"
                                          placeholder="Ngày hết hạn" required>
                                      </div>
                                      <div class="form-group">
                                        <input type="number" class="form-control" id="cvvCard"
                                          name="cvvCard" placeholder="Mã CVV" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" id="nameCard"
                                        name="nameCard" placeholder="Họ và tên chủ thẻ" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="card-form__address">
                                  <div class="title">
                                    <p>Địa chỉ đăng ký thẻ Tín dụng/Ghi nợ</p>
                                  </div>
                                  <div class="body">
                                    <div class="form-group">
                                      <input type="number" class="form-control" id="addressCard"
                                        name="addressCard" placeholder="Địa chỉ">
                                    </div>
                                    <div class="form-group">
                                      <input type="number" class="form-control" id="postalCard"
                                        name="postalCard" placeholder="Mã bưu chính">
                                    </div>
                                  </div>
                                </div>
                                <button type="submit"
                                  class="btn btn-second btn-size-md btn-submit">Submit</button>
                              </div>
                            </div>
                          </div>

                          <div class="card-type__item">
                            <div class="card-type__header" data-bs-toggle="collapse"
                              href="#card-type__domestic">
                              <p class="text">Thẻ ATM nội địa</p>
                              <p class="icon"><i class="fa-solid fa-caret-down"></i></p>
                            </div>
                            <div class="card-type__body collapse" id="card-type__domestic"
                              data-bs-parent="#accordion">
                              <div class="bank-list">
                                <div class="title">
                                  <p class="title-big">Hỗ trợ thanh toán</p>
                                </div>
                                <div class="content">
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm1">
                                      <label class="form-check-label"
                                        for="bankInternetAtm1"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-1.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm2">
                                      <label class="form-check-label" for="bankAtm2"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-2.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm3">
                                      <label class="form-check-label" for="bankAtm3"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-3.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm4">
                                      <label class="form-check-label" for="bankAtm4"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-4.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm5">
                                      <label class="form-check-label" for="bankAtm5"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-5.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm6">
                                      <label class="form-check-label" for="bankAtm6"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-6.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm7">
                                      <label class="form-check-label" for="bankAtm7"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-7.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm8">
                                      <label class="form-check-label" for="bankAtm8"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-8.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm9">
                                      <label class="form-check-label" for="bankAtm9"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-9.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm10">
                                      <label class="form-check-label" for="bankAtm10"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-10.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio" name="bankAtm"
                                        id="bankAtm11">
                                      <label class="form-check-label" for="bankAtm11"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-11.png') }}" alt="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="card-type__item">
                            <div class="card-type__header" data-bs-toggle="collapse"
                              href="#card-type__banking">
                              <p class="text">Internet Banking</p>
                              <p class="icon"><i class="fa-solid fa-caret-down"></i></p>
                            </div>
                            <div class="card-type__body collapse" id="card-type__banking"
                              data-bs-parent="#accordion">
                              <div class="bank-list">
                                <div class="title">
                                  <p class="title-big">Hỗ trợ thanh toán</p>
                                </div>
                                <div class="content">
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet1">
                                      <label class="form-check-label" for="bankInternet1"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-1.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet2">
                                      <label class="form-check-label" for="bankInternet2"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-2.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet3">
                                      <label class="form-check-label" for="bankInternet3"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-3.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet4">
                                      <label class="form-check-label" for="bankInternet4"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-4.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet5">
                                      <label class="form-check-label" for="bankInternet5"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-5.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet6">
                                      <label class="form-check-label" for="bankInternet6"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-6.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet7">
                                      <label class="form-check-label" for="bankInternet7"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-7.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet8">
                                      <label class="form-check-label" for="bankInternet8"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-8.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet9">
                                      <label class="form-check-label" for="bankInternet9"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-9.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet10">
                                      <label class="form-check-label" for="bankInternet10"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-10.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet11">
                                      <label class="form-check-label" for="bankInternet11"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-11.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet12">
                                      <label class="form-check-label" for="bankInternet12"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-12.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet13">
                                      <label class="form-check-label" for="bankInternet13"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-13.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet14">
                                      <label class="form-check-label" for="bankInternet14"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-14.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet15">
                                      <label class="form-check-label" for="bankInternet15"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-15.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet16">
                                      <label class="form-check-label" for="bankInternet16"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-16.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet16">
                                      <label class="form-check-label" for="bankInternet16"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-16.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet17">
                                      <label class="form-check-label" for="bankInternet17"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-17.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet18">
                                      <label class="form-check-label" for="bankInternet18"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-18.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet19">
                                      <label class="form-check-label" for="bankInternet19"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-19.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet20">
                                      <label class="form-check-label" for="bankInternet20"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-20.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet21">
                                      <label class="form-check-label" for="bankInternet21"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-21.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet22">
                                      <label class="form-check-label" for="bankInternet22"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-22.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet23">
                                      <label class="form-check-label" for="bankInternet23"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-23.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet24">
                                      <label class="form-check-label" for="bankInternet24"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-24.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet25">
                                      <label class="form-check-label" for="bankInternet25"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-25.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet26">
                                      <label class="form-check-label" for="bankInternet26"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-26.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet27">
                                      <label class="form-check-label" for="bankInternet27"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-27.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet28">
                                      <label class="form-check-label" for="bankInternet28"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-28.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet29">
                                      <label class="form-check-label" for="bankInternet29"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-29.png') }}" alt="">
                                  </div>
                                  <div class="bank-item">
                                    <div class="form-group">
                                      <input class="form-check-input" type="radio"
                                        name="bankInternet" id="bankInternet30">
                                      <label class="form-check-label" for="bankInternet30"></label>
                                    </div>
                                    <img class="img-fluid bank-logo"
                                      src="{{ asset('img/web/bank-logo-30.png') }}" alt="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
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
                      <td>{{ $service_product_name }}</td>
                      <td>{{ $producttypes_numtime }} tháng</td>
                      <td>{{ formatNumber($producttypes_amount, 1, 0, 0) }} đồng</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2">Thành tiền</td>
                      <td>{{ formatNumber($producttypes_amount, 1, 0, 0) }} đồng</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <button type="submit" class="btn btn-second btn-size-lg btn-pay"
                onclick="processReports('frm', 'process')">Thanh toán</button>
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

{{-- @extends('home.layout')

@section('content')

    @if (session()->has('success'))
        @include('layouts.partials.messages.success')
    @endif

    <form role="form" action="{{ route('customers-processPaymentMomo') }}?continue=true" method="post" id="frm">
    
        {{ csrf_field() }}
        <input type='hidden' name='typereport' value=''>
        <input type='hidden' name='cid' value='{{$id}}'>

        <section class="element-section element-bg-1 order-payment-method position-relative">
            <div class="container">
                
                <div class="payment-method-default">
                    <div class="order-info mb-5">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="order-info-item first">
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <th width="30%">Họ và tên</th>
                                                <td width="70%">{{ $customer->fullname }}</td>
                                            </tr>

                                            <tr>
                                                <th width="30%">Địa chỉ email</th>
                                                <td width="70%">{{ $customer->email }}</td>
                                            </tr>

                                            <tr>
                                                <th width="30%">Địa chỉ</th>
                                                <td width="70%">{{ $customer->address }}</td>
                                            </tr>

                                            <tr>
                                                <th width="30%">Điện thoai</th>
                                                <td width="70%">{{ $customer->phone }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="order-info-item last">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <th width="40%"><b>Dịch vụ</b></th>
                                                <th class="text-center" width="15%"><b>Thời hạn (tháng)</b></th>
                                                <th class="text-center" width="15%"><b>Giảm giá (%)</b></th>                                                
                                                <th class="text-center" width="30%"><b>Số tiền thanh toán (đồng)</b></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>{{ $service_product_name }} <br> Giá: {{ formatNumber($service_product_price, 1, 0, 0) }} đồng/tháng</td>
                                                <td class="text-center">{{ $producttypes_numtime }}</td>
                                                <td class="text-center">{{ $producttypes_discount }}</td>
                                                <td class="text-right">{{ formatNumber($producttypes_amount, 1, 0, 0) }}</td>
                                            </tr>
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <td class="text-right" colspan="3"><b>THÀNH TIỀN</b></td>
                                                <td class="text-right">{{ formatNumber($producttypes_amount, 1, 0, 0) }}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h1 class="text-center mb-5"><font size="5">CHỌN HÌNH THỨC THANH TOÁN</font></h1>

                    <div class="select-payment-method">
                        <div class="directly-office mb-4">
                            <div class="title-check mb-4">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" class="custom-control-input" name="ord_payment_method" value="0" checked="checked" data-field="Code">
                                    <label class="custom-control-label" for="customRadioInline1">
                                        <font color="#1a1f53"><b>TRỰC TIẾP TẠI VĂN PHÒNG</b></font>
                                    </label>
                                </div>
                            </div>

                            <div class="content">
                                <h3><font color="#1a1f53">Công ty TNHH Lam Minh Anh</font></h3>
                                <p><b>Địa chỉ:</b> LM81-42.OT04 (Officetel), Tòa Landmark 81 Vinhomes Central Park, Số 720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh</p>
                                <p><b>Điện thoại: </b>0918.905.500 (Zalo/Viber/Skype)</p>
                            </div>
                        </div>

                        <div class="transfer-bank mb-4">
                            <div class="title-check mb-4">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" class="custom-control-input" name="ord_payment_method" value="1" data-field="Code">
                                    <label class="custom-control-label" for="customRadioInline2">
                                        <font color="#1a1f53"><b>CHUYỂN KHOẢN NGÂN HÀNG</b></font>
                                    </label>
                                </div>
                            </div>

                            <div class="content">
                                <p><b>Bước 1: Thông tin tài khoản</b></p>
                                <p>Bạn vui lòng nhấn nút thanh toán sau khi xác nhận phương thức thanh toán qua chuyển khoản ngân hàng. Hệ thống sẽ gửi đến email của bạn hướng dẫn chi tiết để bạn tiến hành thanh toán.</p>

                                <p><b>Bước 2:</b></p>
                                <p>Bạn hãy chuyển tiền vào tài khoản ngân hàng khi được cung cấp thông tin ở bước 1. Bạn lưu ý ghi rõ thông tin dịch vụ như Tên dịch vụ/ Mã đơn hàng/ Mã hợp đồng trong nội dung chuyển tiền.</p> 
                                <p>Ví dụ: “Đăng ký dịch vụ Tháng”, “Thanh toán đơn hàng ORD123456”</p> 
                                <p>(Nếu chuyển qua ATM bạn chụp ảnh biên lai chuyển tiền và gửi email về info@bossstack.vn cùng với thông tin dịch vụ).</p>

                                <p><b>Bước 3:</b></p>
                                <p>Nhận được số tiền chuyển khoản, hệ thống BossStack sẽ kích hoạt dịch vụ và gửi thông tin quản trị qua email cho bạn. Trường hợp bạn chưa nhận được thông tin trong vòng 24h, bạn vui lòng gọi số hotline 0918.905.500 hoặc email đến info@bossstack.vn để được hỗ trợ.</p>
                            </div>
                        </div>

                        <div class="momo mb-4">
                            <div class="title-check mb-4" tab_open="pay_visa">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline3" class="custom-control-input" name="ord_payment_method" value="2" data-field="Code">
                                    <label class="custom-control-label" for="customRadioInline3">
                                        <font color="#1a1f53"><b>THANH TOÁN QUA MOMO</b></font>
                                    </label>
                                </div>
                            </div>

                            <div class="content text-center">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('img/qr-momo.jpg') }}" width="40%">
                                </a>
                                <p style="display: none;">Thanh toán trực tuyến qua MOMO (<a target="_blank" href="https://momo.vn/tin-tuc/tin-tuc-su-kien/huong-dan-su-dung-hinh-thuc-thanh-toan-quet-ma-va-ma-thanh-toan-673">Xem hướng dẫn</a>)</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary btn-pay" onclick="processReports('frm', 'process')">THANH TOÁN</button>
                    </div>
                </div>

            </div>
        </section>

    </form>  

@endsection --}}
