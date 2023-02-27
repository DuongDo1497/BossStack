@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/contract.css') }}">

  {{--
<link rel="stylesheet" href="{{ asset('css/pages/products.css') }}">

<style type="text/css">
  .box-body .row {
    width: 70%;
    margin: 0 auto;
  }

  @media only screen and (min-width: 1025px) and (max-width: 1200px) {
    .box-body .row {
      width: 100%;
    }
  }

  @media only screen and (max-width: 768px) {
    .card-price-list {
      width: 100%;
      margin-bottom: 15px;
    }

    .button-function a {
      width: 35%;
    }
  }

  @media only screen and (min-width: 320px) and (max-width: 425px) {
    .box-body .row {
      width: 100%;
    }
  }
</style> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section contract-package">
    <div class="breadcrumb">
      <span>Thông tin tài khoản</span> / <span class="current">Dịch vụ</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <form role="form" action="{{ route('contracts-addProduct') }}?continue=true" method="post" id="frm">
          {{ csrf_field() }}
          <input type='hidden' name='typereport' value=''>
          <div class="package-list">
            {{-- <div class="package-item">
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
                  <select class="form-select select2" disabled>
                    <option selected>Chọn gói thời gian</option>
                    <option value="">1 năm</option>
                    <option value="">2 năm</option>
                    <option value="">3 năm</option>
                  </select>
                  <button type="submit" class="btn btn-second btn-buy">Mua ngay</button>
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
            </div> --}}

            <div class="package-item">
              <h6 class="package-name">Basic</h6>
              <div class="package-control">
                <div class="package-price">
                  <div class="info">
                    {{-- <small class="user-type"></small>
                    <h5 class="amount">899.000</h5>
                    <small class="unit">VND/tháng</small> --}}
                    <p>Vui lòng liên hệ để biết thêm chi tiết.</p>
                  </div>
                  <small class="note">1 admin + 5 users</small>
                </div>
                <div class="package-option">
                  <select class="form-select select2" name="producttypes_1">
                    <option selected>Chọn gói thời gian</option>
                    <option value="">1 năm</option>
                    <option value="">2 năm</option>
                    <option value="">3 năm</option>
                  </select>
                  <a onclick="processReports('frm', '1')" class="btn btn-second btn-buy">Mua ngay</a>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Sử dụng toàn bộ tính năng sản phẩm</li>
                  <li>Miễn phí cập nhập tính năng mới</li>
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

            <div class="package-item package-seller">
              <h6 class="package-name">
                Standard
                <img src="{{ asset('img/web/best-seller.svg') }}" alt="best-seller" class="img-fluid seller">
              </h6>
              <div class="package-control">
                <div class="package-price">
                  <div class="info">
                    {{-- <small class="user-type"></small>
                    <h5 class="amount">1.699.000</h5>
                    <small class="unit">VND/tháng</small> --}}
                    <p>Vui lòng liên hệ để biết thêm chi tiết.</p>
                  </div>
                  <small class="note">1 admin + 15 users</small>
                </div>
                <div class="package-option">
                  <select class="form-select select2">
                    <option selected>Chọn gói thời gian</option>
                    <option value="">1 năm</option>
                    <option value="">2 năm</option>
                    <option value="">3 năm</option>
                  </select>
                  <button type="submit" class="btn btn-second btn-size-lg btn-buy">Mua ngay</button>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Sử dụng toàn bộ tính năng sản phẩm</li>
                  <li>Miễn phí cập nhập tính năng mới</li>
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
                    {{-- <small class="user-type"></small>
                    <h5 class="amount">2.899.000</h5>
                    <small class="unit">VND/tháng</small> --}}
                    <p>Vui lòng liên hệ để biết thêm chi tiết.</p>
                  </div>
                  <small class="note">1 admin + 30 users</small>
                </div>
                <div class="package-option">
                  <select class="form-select select2">
                    <option selected>Chọn gói thời gian</option>
                    <option value="">1 năm</option>
                    <option value="">2 năm</option>
                    <option value="">3 năm</option>
                  </select>
                  <button type="submit" class="btn btn-second btn-size-lg btn-buy">Mua
                    ngay</button>
                </div>
              </div>
              <div class="package-service">
                <p class="package-title">Các dịch vụ bao gồm</p>
                <ul class="package-info">
                  <li>Sử dụng toàn bộ tính năng sản phẩm</li>
                  <li>Miễn phí cập nhập tính năng mới</li>
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
        </form>
      </div>
    </div>
  </div>

  {{-- <div class="row">
  <form role="form" action="{{ route('contracts-addProduct') }}?continue=true" method="post" id="frm">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title"><i class="fa fa-home" aria-hidden="true"></i> /
            {{ $title->sub_heading }}</h3>
        </div>

        {{ csrf_field() }}
        <input type='hidden' name='typereport' value=''>

        <div class="box-body">

          <div class="row">
            <div class="col-md-4 col-12">
              <div class="panel panel-default card-price-list">
                <div class="panel-heading">
                  <p class="name"><b>Gói Basic</b></p>
                  <p class="percent"><span>99.000</span><br>đồng/tháng</p>
                </div>
                <div class="panel-body">
                  <ul>
                    <li>Sử dụng toàn bộ tính năng sản phẩm Miễn phí</li>
                    <li>Xây dựng mục tiêu dòng tiền xuyên suốt</li>
                    <li>Triển khai việc quản lý tiền và dòng tiền</li>
                    <li>Bóc tách dòng tiền cá nhân và đầu tư kinh doanh</li>
                    <li>Theo dõi, đánh giá dòng tiền sau bóc tách</li>
                    <li>Hỗ trợ trong giờ hành chính</li>
                    <li>Miễn phí cập nhật tính năng mới</li>
                  </ul>
                </div>
                <div class="panel-footer">
                  <select class="form-control" name="producttypes_1">
                    <option value="0">Chọn gói thời gian</option>
                    @foreach ($producttypes as $key => $value)
                    @if ($key > 0)
                    @if ($key == old('producttypes_1'))
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
                  <a onclick="processReports('frm', '1')" class="btn btn-primary btn-buy">Mua
                    ngay</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="panel panel-default card-price-list package-standard">
                <div class="panel-heading">
                  <p class="name"><b>Gói Standard</b></p>
                  <p class="percent">User chủ: <span>299.000</span> đồng/tháng</p>
                  <p class="percent">User con: <span>69.000</span> đồng/tháng</p>
                  <!-- <p class="discount">
                                                          <span><small>715.000</small></span>
                                                          <span><small style="padding-left: 10px;"><font color="red"><b>-30%</b></font></small></span>
                                                      </p> -->
                </div>
                <div class="panel-body">
                  <ul>
                    <li>Sử dụng toàn bộ tính năng sản phẩm Basic</li>
                    <li>Quyền admin và tạo các user con cho các thành viên</li>
                    <li>Phân bổ các tính năng phần mềm cho các thành viên</li>
                    <li>Theo dõi, đánh giá việc quản lý tiền và dòng tiền các thành viên</li>
                    <li>Điều chỉnh theo biến động các dòng tiền của các thành viên linh hoạt</li>
                    <li>Hỗ trợ trong giờ hành chính</li>
                    <li>Miễn phí cập nhật tính năng mới</li>
                    <li>Tạo user con không giới hạn</li>
                  </ul>
                </div>
                <div class="panel-footer">
                  <input type="text" class="form-control count-user" name="countUser"
                    placeholder="Nhập số lượng user con...">
                  <select class="form-control" name="producttypes_2">
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
                  <a onclick="processReports('frm', '2')" class="btn btn-primary btn-buy">Mua
                    ngay</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="panel panel-default card-price-list">
                <div class="panel-heading">
                  <p class="name"><b>Gói Premium</b></p>
                  <p class="percent"><span>499.000</span><br>đồng/tháng</p>
                  <!-- <p class="discount">
                                                          <span><small>8.580.000</small></span>
                                                          <span><small style="padding-left: 10px;"><font color="red"><b>-43%</b></font></small></span>
                                                      </p> -->
                </div>
                <div class="panel-body">
                  <ul>
                    <li>Sử dụng toàn bộ tính năng sản phẩm Basic</li>
                    <li>Sử dụng toàn bộ tính năng sản phẩm Standard</li>
                    <li>Phân bổ dòng tiền đầu tư hằng tháng theo phần mềm</li>
                    <li>Theo dõi khuyến nghị đầu tư chứng khoán Việt Nam</li>
                    <li>Giảm 50% khi đăng ký gói thời gian 12 tháng</li>
                    <li>Hỗ trợ trong giờ hành chính</li>
                    <li>Miễn phí cập nhật tính năng mới</li>
                  </ul>
                </div>
                <div class="panel-footer">
                  <select class="form-control" name="producttypes_3">
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
                  <a onclick="processReports('frm', '3')" class="btn btn-primary btn-buy">Mua
                    ngay</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="button-function clearfix">
        <a class="btn btn-default clearfix" href="{{ route('dashboard') }}">
          <span class="icon"><i class="fa fa-arrow-left"></i></span>
          <span class="text">Quay lại</span>
        </a>
      </div>
    </div>
  </form>
</div> --}}
@endsection

@section('scripts')
  @include('product-manage.contract.partials.script')
@endsection
