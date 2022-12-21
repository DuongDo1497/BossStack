@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/package.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <h1 class="banner-default__title text-center">
            <p><span class="highlight">Boss</span>Stack</p> gói giải pháp
          </h1>
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
                  <li>Quản lý ví tài chính từ 1.000đ</li>
                  <li>Tính số tiền nghỉ hưu</li>
                  <li>Cập nhật thu chi ví tổng</li>
                  <li>Theo dõi danh mục tài sản</li>
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
                    <h5 class="amount">899.000</h5>
                    <small class="unit">VND/tháng</small>
                  </div>
                  <small class="note">1 admin + 5 users</small>
                </div>
                <div class="package-option">
                  <select class="form-select" name="producttypes_1">
                    <option value="0">Chọn gói thời gian</option>
                    <option value="1">1 năm</option>
                    <option value="2">2 năm</option>
                    <option value="3">3 năm</option>
                  </select>
                  <button type="submit" onclick="processReports('frm', '1')"
                    class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Sử dụng <a href="{{ asset('feature') }}">toàn bộ tính năng sản phẩm</a></li>
                  <li>Miễn phí cập nhật tính năng mới</li>
                </ul>
              </div>
              <div class="package-policy">
                <p class="package-title">Chính sách</p>
                <ul class="package-info">
                  <li>Giảm <b>20%</b> khi đăng ký mua gói <b>1 năm</b></li>
                  <li>Giảm <b>30%</b> khi đăng ký mua gói <b>2 năm</b> trở lên</li>
                </ul>
                <small>(Đăng ký tối thiểu 12 tháng)</small>
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
                <img src="{{ asset('img/web/best-seller.svg') }}" alt="best-seller" class="img-fluid seller">
              </h6>
              <div class="package-control">
                <div class="package-price">
                  <div class="info">
                    <small class="user-type"></small>
                    <h5 class="amount">1.699.000</h5>
                    <small class="unit">VND/tháng</small>
                  </div>
                  <small class="note">1 admin + 15 users</small>
                </div>
                <div class="package-option">
                  <select class="form-select" name="producttypes_2">
                    <option value="0">Chọn gói thời gian</option>
                    <option value="1">1 năm</option>
                    <option value="2">2 năm</option>
                    <option value="3">3 năm</option>
                  </select>
                  <button type="submit" onclick="processReports('frm', '2')"
                    class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Sử dụng <a href="{{ asset('feature') }}">toàn bộ tính năng sản phẩm</a></li>
                  <li>Miễn phí cập nhật tính năng mới</li>
                  <li>Đội ngũ BossStack hướng dẫn Giải pháp chuyển đổi</li>
                </ul>
              </div>
              <div class="package-policy">
                <p class="package-title">Chính sách</p>
                <ul class="package-info">
                  <li>Giảm <b>20%</b> khi đăng ký mua gói <b>1 năm</b></li>
                  <li>Giảm <b>30%</b> khi đăng ký mua gói <b>2 năm</b> trở lên</li>
                </ul>
                <small>(Đăng ký tối thiểu 12 tháng)</small>
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
                    <h5 class="amount">2.899.000</h5>
                    <small class="unit">VND/tháng</small>
                  </div>
                  <small class="note">1 admin + 30 users</small>
                </div>
                <div class="package-option">
                  <select class="form-select" name="producttypes_3">
                    <option value="0">Chọn gói thời gian</option>
                    <option value="1">1 năm</option>
                    <option value="2">2 năm</option>
                    <option value="3">3 năm</option>
                  </select>
                  <button type="submit" onclick="processReports('frm', '3')"
                    class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Sử dụng <a href="{{ asset('feature') }}">toàn bộ tính năng sản phẩm</a></li>
                  <li>Miễn phí cập nhật tính năng mới</li>
                  <li>Đội ngũ BossStack hướng dẫn Giải pháp chuyển đổi</li>
                </ul>
              </div>
              <div class="package-policy">
                <p class="package-title">Chính sách</p>
                <ul class="package-info">
                  <li>Giảm <b>20%</b> khi đăng ký mua gói <b>1 năm</b></li>
                  <li>Giảm <b>30%</b> khi đăng ký mua gói <b>2 năm</b> trở lên</li>
                </ul>
                <small>(Đăng ký tối thiểu 12 tháng)</small>
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
  </form>

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
@endsection
