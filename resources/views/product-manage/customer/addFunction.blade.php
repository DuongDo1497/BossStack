@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/customer.css') }}">
@endsection

@section('content')
  <div class="section extension-add">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <a class="prev" href="#">Tổng quan tài khoản</a> / <span class="current">Thêm
        tiện ích</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <p class="page-selected">Đang chọn <span class="selected-count">3</span> / 6 tiện ích được thêm</p>
        <div class="extension-body">
          <div class="extension-group">
            <p class="extension-title">Quản lý tài khoản</p>
            <div class="extension-list">
              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="profits" value="">
                  <label for="profits"></label>
                </div>
                <img src="{{ asset('img/dashboard-1.svg') }}" alt="" class="icon">
                <span class="text">Tính Lợi Nhuận<br>Kinh Doanh</span>
              </div>

              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="retireplans" value="">
                  <label for="retireplans"></label>
                </div>
                <img src="{{ asset('img/dashboard-2.svg') }}" alt="" class="icon">
                <span class="text">Tính số tiền<br>nghỉ hưu</span>
              </div>

              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="cashplans" value="">
                  <label for="cashplans"></label>
                </div>
                <img src="{{ asset('img/dashboard-3.svg') }}" alt="" class="icon">
                <span class="text">Thiết lập<br>dòng tiền</span>
              </div>

              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="cashs" value="">
                  <label for="cashs"></label>
                </div>
                <img src="{{ asset('img/dashboard-4.svg') }}" alt="" class="icon">
                <span class="text">Thu chi<br>ví tổng</span>
              </div>

              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="cashassets" value="">
                  <label for="cashassets"></label>
                </div>
                <img src="{{ asset('img/dashboard-5.svg') }}" alt="" class="icon">
                <span class="text">Danh mục<br>tài sản - nợ</span>
              </div>

              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="cashsprocess" value="">
                  <label for="cashsprocess"></label>
                </div>
                <img src="{{ asset('img/dashboard-6.svg') }}" alt="" class="icon">
                <span class="text">Bóc tách<br>dòng tiền</span>
              </div>

              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="invests" value="">
                  <label for="invests"></label>
                </div>
                <img src="{{ asset('img/dashboard-7.svg') }}" alt="" class="icon">
                <span class="text">Blog</span>
              </div>
            </div>
          </div>

          <div class="extension-group">
            <p class="extension-title">Quản lý user</p>
            <div class="extension-list">
              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="dashboardMain" value="">
                  <label for="dashboardMain"></label>
                </div>
                <img src="{{ asset('img/dashboard-8.svg') }}" alt="" class="icon">
                <span class="text">Tổng quan user</span>
              </div>
            </div>
          </div>

          <div class="extension-group">
            <p class="extension-title">Thông tin tài khoản</p>
            <div class="extension-list">
              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="editCustomer" value="">
                  <label for="editCustomer"></label>
                </div>
                <img src="{{ asset('img/dashboard-9.svg') }}" alt="" class="icon">
                <span class="text">Thông tin<br>cá nhân</span>
              </div>

              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="addContract" value="">
                  <label for="addContract"></label>
                </div>
                <img src="{{ asset('img/dashboard-10.svg') }}" alt="" class="icon">
                <span class="text">Dịch vụ</span>
              </div>

              <div class="item">
                <div class="checkbox-group">
                  <input class="select-item" type="checkbox" name="" id="formAdvisory" value="">
                  <label for="formAdvisory"></label>
                </div>
                <img src="{{ asset('img/dashboard-6.svg') }}" alt="" class="icon">
                <span class="text">Lịch sử<br>truy cập</span>
              </div>
            </div>
          </div>
        </div>
        <div class="box-search">
          <div class="control">
            <a href="#" class="btn btn-primary btn-cancel">Hủy bỏ</a>
            <button type="submit" class="btn btn-primary btn-save">Lưu thay đổi</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('product-manage.customer.partials.script')
@endsection
