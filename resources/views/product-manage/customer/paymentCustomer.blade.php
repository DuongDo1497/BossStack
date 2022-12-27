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
        <form role="form" action="{{ route('customers-processPaymentMomo') }}?continue=true" method="post"
          id="frm">
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
                        <input class="form-check-input" type="radio" name="ord_payment_method" value="0"
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
                            <span class="text">Tiền mặt/Cà thẻ</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="ord_payment_method" value="1"
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
                        <input class="form-check-input" type="radio" name="ord_payment_method" value=""
                          id="internetBanking" data-bs-toggle="collapse" href="#internet-banking">
                        <label class="form-check-label" for="internetBanking"></label>
                      </div>
                      <img class="img-fluid payment-icon" src="{{ asset('img/web/payment-icon-3.svg') }}"
                        alt="payment-icon">
                      <p class="text">Internet Banking</p>
                    </div>
                    <div class="payment-option__body collapse" id="internet-banking"
                      data-bs-parent="#accordion-parent">
                      <div class="content">
                        <p class="payment-option__text">Để thanh toán bằng hình thức Internet Banking, bạn vui lòng xem
                          hướng dẫn: <a href="#">Hướng dẫn thanh toán</a>.</p>
                      </div>
                    </div>
                  </div>

                  <div class="payment-option__item">
                    <div class="payment-option__header">
                      <div class="form-group">
                        <input class="form-check-input" type="radio" name="ord_payment_method" value=""
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
                        <input class="form-check-input" type="radio" name="ord_payment_method" value=""
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
                        <p class="product-name">{{ $service_product_name }}</p>
                        <p class="promotion-title">Giảm giá</p>
                      </td>
                      <td>{{ $producttypes_numtime }} tháng</td>
                      <td>
                        <p class="product-price">{{ formatNumber($producttypes_amount, 1, 0, 0) }} VND</p>
                        <p class="promotion-price">-4.077.600 VND (-20%)</p>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td>Thành tiền</td>
                      <td colspan="2">{{ formatNumber($producttypes_amount, 1, 0, 0) }} đồng</td>
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
                      <td>{{ $service_product_name }} <br> Giá: {{ formatNumber($service_product_price, 1, 0, 0) }}
                        đồng/tháng</td>
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

        <h1 class="text-center mb-5">
          <font size="5">CHỌN HÌNH THỨC THANH TOÁN</font>
        </h1>

        <div class="select-payment-method">
          <div class="directly-office mb-4">
            <div class="title-check mb-4">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" class="custom-control-input" name="ord_payment_method"
                  value="0" checked="checked" data-field="Code">
                <label class="custom-control-label" for="customRadioInline1">
                  <font color="#1a1f53"><b>TRỰC TIẾP TẠI VĂN PHÒNG</b></font>
                </label>
              </div>
            </div>

            <div class="content">
              <h3>
                <font color="#1a1f53">Công ty TNHH Lam Minh Anh</font>
              </h3>
              <p><b>Địa chỉ:</b> LM81-42.OT04 (Officetel), Tòa Landmark 81 Vinhomes Central Park, Số 720A Điện Biên Phủ,
                Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh</p>
              <p><b>Điện thoại: </b>0918.905.500 (Zalo/Viber/Skype)</p>
            </div>
          </div>

          <div class="transfer-bank mb-4">
            <div class="title-check mb-4">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" class="custom-control-input" name="ord_payment_method"
                  value="1" data-field="Code">
                <label class="custom-control-label" for="customRadioInline2">
                  <font color="#1a1f53"><b>CHUYỂN KHOẢN NGÂN HÀNG</b></font>
                </label>
              </div>
            </div>

            <div class="content">
              <p><b>Bước 1: Thông tin tài khoản</b></p>
              <p>Bạn vui lòng nhấn nút thanh toán sau khi xác nhận phương thức thanh toán qua chuyển khoản ngân hàng. Hệ
                thống sẽ gửi đến email của bạn hướng dẫn chi tiết để bạn tiến hành thanh toán.</p>

              <p><b>Bước 2:</b></p>
              <p>Bạn hãy chuyển tiền vào tài khoản ngân hàng khi được cung cấp thông tin ở bước 1. Bạn lưu ý ghi rõ
                thông tin dịch vụ như Tên dịch vụ/ Mã đơn hàng/ Mã hợp đồng trong nội dung chuyển tiền.</p>
              <p>Ví dụ: “Đăng ký dịch vụ Tháng”, “Thanh toán đơn hàng ORD123456”</p>
              <p>(Nếu chuyển qua ATM bạn chụp ảnh biên lai chuyển tiền và gửi email về info@bossstack.vn cùng với thông
                tin dịch vụ).</p>

              <p><b>Bước 3:</b></p>
              <p>Nhận được số tiền chuyển khoản, hệ thống BossStack sẽ kích hoạt dịch vụ và gửi thông tin quản trị qua
                email cho bạn. Trường hợp bạn chưa nhận được thông tin trong vòng 24h, bạn vui lòng gọi số hotline
                0918.905.500 hoặc email đến info@bossstack.vn để được hỗ trợ.</p>
            </div>
          </div>

          <div class="momo mb-4">
            <div class="title-check mb-4" tab_open="pay_visa">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline3" class="custom-control-input" name="ord_payment_method"
                  value="2" data-field="Code">
                <label class="custom-control-label" for="customRadioInline3">
                  <font color="#1a1f53"><b>THANH TOÁN QUA MOMO</b></font>
                </label>
              </div>
            </div>

            <div class="content text-center">
              <a href="#" target="_blank">
                <img src="{{ asset('img/qr-momo.jpg') }}" width="40%">
              </a>
              <p style="display: none;">Thanh toán trực tuyến qua MOMO (<a target="_blank"
                  href="https://momo.vn/tin-tuc/tin-tuc-su-kien/huong-dan-su-dung-hinh-thuc-thanh-toan-quet-ma-va-ma-thanh-toan-673">Xem
                  hướng dẫn</a>)</p>
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
