@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/package.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <h1 class="banner-default__title text-center">bossstack gói giải pháp</h1>
        </div>
      </div>
    </div>
  </div>
  <form role="form" action="{{ route('customers-register') }}" method="post" id="frm">
    {{ csrf_field() }}
    <input type='hidden' name='typereport' value=''>

    <div class="section section-package package">
      <div class="container">
        <div class="wrap">
          <div class="package-list">
            <div class="package-item">
              <h6 class="package-name">Free</h6>
              <div class="package-control">
                <div class="package-price">
                  <div class="info">
                    <small class="user-type"></small>
                    <h5 class="amount">Miễn phí</h5>
                    <small class="unit"></small>
                  </div>
                </div>
                <div class="package-option">
                  <button type="submit" onclick="processReports('frm', '4')"
                    class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Tính số tiền nghỉ hưu</li>
                  <li>Quản lý thu nhập</li>
                  <li>Quản lý chi tiêu hằng ngày</li>
                  <li>Theo dõi các khoản nợ</li>
                  <li>Quản lý tài sản hiện có</li>
                </ul>
              </div>
              <div class="package-policy">
                <p class="package-title">Chính sách</p>
                <ul class="package-info">
                  <li>(N/A)</li>
                </ul>
              </div>
              <div class="package-support">
                <p class="package-title">Hỗ trợ và triển khai</p>
                <ul class="package-info">
                  <li>Hỗ trợ 24/7 qua email, chat và điện thoại</li>
                  <li>Đảm bảo hệ thống uptime tới 99.9%</li>
                </ul>
              </div>
              <div class="package-security">
                <p class="package-title">Tuân thủ và bảo mật</p>
                <ul class="package-info">
                  <li>Tuân thủ bảo mật và quyền riêng tư</li>
                  <li>Đặt các chính sách về tạo mật khẩu</li>
                </ul>
              </div>
            </div>

            <div class="package-item">
              <h6 class="package-name">Basic</h6>
              <div class="package-control">
                <div class="package-price">
                  <div class="info">
                    <small class="user-type"></small>
                    <h5 class="amount">99.000</h5>
                    <small class="unit">đồng/tháng</small>
                  </div>
                </div>
                <div class="package-option">
                  <select class="form-select" name="producttypes_1">
                    <option value="0">Chọn gói thời gian</option>
                    @foreach ($producttypes as $key => $value)
                      @if ($key > 0)
                        @if ($key == old('producttypes_1'))
                          <option value="{{ $key }}" selected>{{ $value['month'] }} tháng
                            (giảm
                            {{ $value['discount'] }}%)</option>
                        @else
                          <option value="{{ $key }}">{{ $value['month'] }} tháng (giảm
                            {{ $value['discount'] }}%)</option>
                        @endif
                      @endif
                    @endforeach
                  </select>
                  <button type="submit" onclick="processReports('frm', '1')"
                    class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Tất cả các tính năng của <b>gói Free</b></li>
                  <li>Xây dựng mục tiêu dòng tiền xuyên suốt</li>
                  <li>Triển khai việc quản lý tiền và dòng tiền</li>
                  <li>Bóc tách dòng tiền cá nhân, đầu tư, kinh doanh</li>
                  <li>Theo dõi, đánh giá dòng tiền sau bóc tách</li>
                </ul>
              </div>
              <div class="package-policy">
                <p class="package-title">Chính sách</p>
                <ul class="package-info">
                  <li>Giảm <b>10%</b> khi đăng ký mua gói <b>3 tháng</b></li>
                  <li>Giảm <b>20%</b> khi đăng ký mua gói <b>6 tháng</b></li>
                  <li>Giảm <b>30%</b> khi đăng ký mua gói <b>12 tháng</b></li>
                </ul>
              </div>
              <div class="package-support">
                <p class="package-title">Hỗ trợ và triển khai</p>
                <ul class="package-info">
                  <li>Hỗ trợ 24/7 qua email, chat và điện thoại</li>
                  <li>Đảm bảo hệ thống uptime tới 99.9%</li>
                </ul>
              </div>
              <div class="package-security">
                <p class="package-title">Tuân thủ và bảo mật</p>
                <ul class="package-info">
                  <li>Tuân thủ bảo mật và quyền riêng tư</li>
                  <li>Đặt các chính sách về tạo mật khẩu</li>
                </ul>
              </div>
            </div>

            <div class="package-item">
              <h6 class="package-name">
                Standard
                <img src="{{ asset('img/web/best-seller.svg') }}" alt="best-seller"
                  class="img-fluid seller">
              </h6>
              <div class="package-control">
                <div class="package-price">
                  <div class="info">
                    <small class="user-type">Admin:</small>
                    <h5 class="amount">299.000</h5>
                    <small class="unit">đồng/tháng</small>
                  </div>
                  <small class="note">Tặng 1 user thành viên <br />Basic 99.000 đồng/tháng</small>
                </div>
                <div class="package-option">
                  <select class="form-select" name="producttypes_2">
                    <option value="0">Chọn gói thời gian</option>
                    @foreach ($producttypes as $key => $value)
                      @if ($key > 0)
                        @if ($key == old('producttypes_2'))
                          <option value="{{ $key }}" selected>{{ $value['month'] }} tháng
                            (giảm {{ $value['discount'] }}%)
                          </option>
                        @else
                          <option value="{{ $key }}">{{ $value['month'] }} tháng (giảm
                            {{ $value['discount'] }}%)</option>
                        @endif
                      @endif
                    @endforeach
                  </select>
                  <button type="submit" onclick="processReports('frm', '2')"
                    class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Tất cả các tính năng của <b>gói Basic</b></li>
                  <li>Quyền Admin và tạo các user con cho các thành viên</li>
                  <li>Phân bổ các tính năng phần mềm cho các thành viên</li>
                  <li>Theo dõi, đánh giá việc quản lý tiền và dòng tiền các thành viên</li>
                  <li>Điều chỉnh theo biến động các dòng tiền của các thành viên linh hoạt</li>
                </ul>
              </div>
              <div class="package-policy">
                <p class="package-title">Chính sách</p>
                <ul class="package-info">
                  <li>Giảm <b>10%</b> khi đăng ký mua gói <b>3 tháng</b></li>
                  <li>Giảm <b>20%</b> khi đăng ký mua gói <b>6 tháng</b></li>
                  <li>Giảm <b>30%</b> khi đăng ký mua gói <b>12 tháng</b></li>
                </ul>
              </div>
              <div class="package-support">
                <p class="package-title">Hỗ trợ và triển khai</p>
                <ul class="package-info">
                  <li>Hỗ trợ 24/7 qua email, chat và điện thoại</li>
                  <li>Đảm bảo hệ thống uptime tới 99.9%</li>
                </ul>
              </div>
              <div class="package-security">
                <p class="package-title">Tuân thủ và bảo mật</p>
                <ul class="package-info">
                  <li>Tuân thủ bảo mật và quyền riêng tư</li>
                  <li>Đặt các chính sách về tạo mật khẩu</li>
                </ul>
              </div>
            </div>

            <div class="package-item">
              <h6 class="package-name">Premium</h6>
              <div class="package-control">
                <div class="package-price">
                  <div class="info">
                    <small class="user-type"></small>
                    <h5 class="amount">499.000</h5>
                    <small class="unit">đồng/tháng</small>
                  </div>
                </div>
                <div class="package-option">
                  <select class="form-select" name="producttypes_3">
                    <option value="0">Chọn gói thời gian</option>
                    @foreach ($producttypes as $key => $value)
                      @if ($key > 0)
                        @if ($key == old('producttypes_3'))
                          <option value="{{ $key }}" selected>{{ $value['month'] }} tháng
                            (giảm {{ $value['discount'] }}%)
                          </option>
                        @else
                          <option value="{{ $key }}">{{ $value['month'] }} tháng (giảm
                            {{ $value['discount'] }}%)</option>
                        @endif
                      @endif
                    @endforeach
                  </select>
                  <button type="submit" onclick="processReports('frm', '3')"
                    class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Tất cả các tính năng của <b>gói Standard</b></li>
                  <li>Phân bổ dòng tiền đầu tư, kinh doanh hằng tháng theo phần mềm</li>
                  <li>Cập nhật khuyến nghị của đội ngũ chuyên gia BossStack</li>
                </ul>
              </div>
              <div class="package-policy">
                <p class="package-title">Chính sách</p>
                <ul class="package-info">
                  <li>Giảm <b>10%</b> khi đăng ký mua gói <b>3 tháng</b></li>
                  <li>Giảm <b>20%</b> khi đăng ký mua gói <b>6 tháng</b></li>
                  <li>Giảm <b>30%</b> khi đăng ký mua gói <b>12 tháng</b></li>
                </ul>
              </div>
              <div class="package-support">
                <p class="package-title">Hỗ trợ và triển khai</p>
                <ul class="package-info">
                  <li>Hỗ trợ 24/7 qua email, chat và điện thoại</li>
                  <li>Đảm bảo hệ thống uptime tới 99.9%</li>
                </ul>
              </div>
              <div class="package-security">
                <p class="package-title">Tuân thủ và bảo mật</p>
                <ul class="package-info">
                  <li>Tuân thủ bảo mật và quyền riêng tư</li>
                  <li>Đặt các chính sách về tạo mật khẩu</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-advertise advertise bg-img-blue">
      <div class="container">
        <div class="wrap">
          <h3 class="advertise-title">Chúng tôi giải phóng chủ doanh nghiệp khỏi gánh nặng quản lý
          </h3>
          <a class="btn btn-second btn-size-lg btn-contact" href="{{ asset('contact') }}">Liên
            hệ</a>
        </div>
      </div>
    </div>

  </form>
@endsection
