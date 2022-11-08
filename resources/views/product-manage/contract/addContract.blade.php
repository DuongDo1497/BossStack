@extends('layouts.master')

@section('head')
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
  </style>
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif
  <div class="row">
    <form role="form" action="{{ route('contracts-addProduct') }}?continue=true" method="post"
      id="frm">
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
  </div>
@endsection

@section('scripts')
  @include('product-manage.contract.partials.script')
@endsection
