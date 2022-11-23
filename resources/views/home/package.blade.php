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
              <form action="" class="package-option">
                <select class="form-select" disabled>
                  <option selected>Chọn gói thời gian</option>
                  <option value="">1 tháng</option>
                  <option value="">3 tháng</option>
                  <option value="">6 tháng</option>
                  <option value="">12 tháng</option>
                </select>
                <button type="submit" class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
              </form>
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
              <form action="" class="package-option">
                <select class="form-select">
                  <option selected>Chọn gói thời gian</option>
                  <option value="">1 tháng</option>
                  <option value="">3 tháng</option>
                  <option value="">6 tháng</option>
                  <option value="">12 tháng</option>
                </select>
                <button type="submit" class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
              </form>
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
                <li>Giảm <b>15%</b> khi đăng ký mua gói <b>6 tháng</b></li>
                <li>Giảm <b>20%</b> khi đăng ký mua gói <b>12 tháng</b></li>
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
              <img src="{{ asset('img/web/best-seller.svg') }}" alt=""
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
              <form action="" class="package-option">
                <select class="form-select">
                  <option selected>Chọn gói thời gian</option>
                  <option value="">1 tháng</option>
                  <option value="">3 tháng</option>
                  <option value="">6 tháng</option>
                  <option value="">12 tháng</option>
                </select>
                <button type="submit" class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
              </form>
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
              <form action="" class="package-option">
                <select class="form-select">
                  <option selected>Chọn gói thời gian</option>
                  <option value="">1 tháng</option>
                  <option value="">3 tháng</option>
                  <option value="">6 tháng</option>
                  <option value="">12 tháng</option>
                </select>
                <button type="submit" class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
              </form>
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
                <li>Giảm <b>15%</b> khi đăng ký mua gói <b>3 tháng</b></li>
                <li>Giảm <b>20%</b> khi đăng ký mua gói <b>6 tháng</b></li>
                <li>Giảm <b>35%</b> khi đăng ký mua gói <b>12 tháng</b></li>
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
        <h3 class="advertise-title">Chúng tôi giải phóng chủ doanh nghiệp khỏi gánh nặng quản lý</h3>
        <a class="btn btn-second btn-size-lg btn-contact" href="{{ asset('contact') }}">Liên hệ</a>
      </div>
    </div>
  </div>
@endsection
