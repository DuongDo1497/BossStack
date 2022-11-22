@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/register.css') }}">
@endsection

@section('content')
  <div class="section section-register register">
    <div class="container">
      <div class="wrap">
        <div class="register-header">
          <img class="img-fluid logo" src="{{ asset('img/web/logo.svg') }}" alt="">
          <h6>THÔNG TIN CÁ NHÂN</h6>
        </div>
        <form action="" method="post" class="register-form">
          <div class="register-form__info">
            <div class="form-group">
              <label class="form-label" for="fullname">Họ và tên <span>*</span></label>
              <input type="text" class="form-control" id="fullname" name="fullname"
                placeholder="Họ và tên *" required>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="birthday">Ngày sinh <span>*</span></label>
                <input type="date" class="form-control" id="birthday" name="birthday"
                  placeholder="Ngày sinh *" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="sex">Giới tính <span>*</span></label>
                <select class="form-select" id="sex" required>
                  <option selected>Chọn giới tính</option>
                  <option value="">Nam</option>
                  <option value="">Nữ</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="address">Địa chỉ <span>*</span></label>
              <input type="text" class="form-control" id="address" name="address"
                placeholder="Địa chỉ *" required>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="phone">Điện thoại <span>*</span></label>
                <input type="text" class="form-control" id="phone" name="phone"
                  placeholder="Điện thoại *" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="email">Email <span>*</span></label>
                <input type="email" class="form-control" id="email" name="email"
                  placeholder="Email *" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="people">Người liên hệ khi cần</label>
                <input type="text" class="form-control" id="people" name="people"
                  placeholder="Người liên hệ khi cần">
              </div>
              <div class="form-group">
                <label class="form-label" for="phone1">Điện thoại</label>
                <input type="text" class="form-control" id="phone1" name="phone1"
                  placeholder="Điện thoại">
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="type">Nhóm khách hàng <span>*</span></label>
              <select class="form-select" id="type" required>
                <option selected>Chọn nhóm khách hàng</option>
                <option value="">Demo</option>
                <option value="">Demo</option>
              </select>
            </div>
          </div>
          <div class="register-form__service">

          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
