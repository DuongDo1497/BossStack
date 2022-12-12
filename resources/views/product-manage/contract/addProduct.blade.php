@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/contract.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/pages/products.css') }}"> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section contract-add">
    <div class="breadcrumb">
      <span>Thông tin tài khoản</span> / <span>Dịch vụ</span> / <a class="prev"
        href="{{ route('contracts-addContract') }}">Đăng ký dịch
        vụ</a> / <span class="current">Thông
        tin đơn hàng</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('contracts-storeProduct') }}?continue=true" method="post" id="frm">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value=''>
      <input type='hidden' name='service_product_id' value='{{ $service_product_id }}'>
      <input type='hidden' name='producttypes_numtime' value='{{ $producttypes_numtime }}'>
      <input type='hidden' name='producttypes_discount' value='{{ $producttypes_discount }}'>
      <input type='hidden' name='producttypes_amount' value='{{ $producttypes_amount }}'>
      <div class="box-content">
        <div class="box box-primary">
          <div class="service-info__table">
            <table class="table">
              <thead>
                <tr>
                  <th>Dịch vụ</th>
                  <th>Thời hạn</th>
                  <th>Giảm giá</th>
                  <th>Số tiền thanh toán</th>
                </tr>
              </thead>
              <tbody>
                <td><b>Gói {{ $service_product_name }}</b>
                  <br />{{ formatNumber($service_product_price, 1, 0, 0) }} đồng/tháng
                </td>
                <td>{{ $producttypes_numtime }} tháng</td>
                <td>{{ $producttypes_discount }} %</td>
                <td>{{ formatNumber($producttypes_amount, 1, 0, 0) }} đồng</td>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3"><b>Thành tiền</b></td>
                  <td><b>{{ formatNumber($producttypes_amount, 1, 0, 0) }} đồng</b></td>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="service-info__list">
            <div class="box-form">
              <div class="form-group">
                <label>Dịch vụ</label>
                <p class="form-text"><b>Gói {{ $service_product_name }}</b></p>
              </div>
              <div class="form-group">
                <label>Thời hạn</label>
                <p class="form-text"><b>{{ $producttypes_numtime }} tháng</b></p>
              </div>
              <div class="form-group">
                <label>Giảm giá</label>
                <p class="form-text"><b>{{ $producttypes_discount }}%</b></p>
              </div>
              <div class="form-group">
                <label>Số tiền thanh toán</label>
                <p class="form-text"><b>{{ formatNumber($producttypes_amount, 1, 0, 0) }} đồng</b></p>
              </div>
            </div>
            <div class="line"></div>
            <div class="box-form">
              <div class="form-group">
                <label>Tổng</label>
                <p class="form-text"><b>{{ formatNumber($producttypes_amount, 1, 0, 0) }} đồng</b></p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <button class="btn btn-primary btn-pay" onclick="processReports('frm', 'store')">
        <span class="text">Thanh toán</span>
        <span class="icon"><i class="fa fa-arrow-right"></i></span>
      </button>
    </form>
  </div>

  {{-- <div class="row">
    <form role="form" action="{{ route('contracts-storeProduct') }}?continue=true" method="post" id="frm">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-home" aria-hidden="true"></i> / {{ $title->sub_heading }}</h3>
          </div>
          {{ csrf_field() }}
          <input type='hidden' name='typereport' value=''>
          <div class="box-body">
            <div class="row">

              <div class="col-md-5">
                <div class="panel panel-default panel-info-account">
                  <div class="panel-heading">
                    <h3 class="panel-title">Thông tin tài khoản</h3>

                    <a href="{{ route('customers-editCustomer') }}" class="text-success"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i> <b>Chỉnh sửa</b></a>
                  </div>

                  <div class="panel-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                          <b>Họ và tên:</b>
                        </div>
                        <div class="col-md-7">
                          <p class="text-primary">{{ $customer->fullname }}</p>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                          <b>Địa chỉ email:</b>
                        </div>
                        <div class="col-md-3">
                          <p class="text-primary">{{ $customer->email }}</p>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                          <b>Địa chỉ liên hệ:</b>
                        </div>
                        <div class="col-md-7">
                          <p class="text-primary">{{ $customer->address }}</p>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                          <b>Điện thoại:</b>
                        </div>
                        <div class="col-md-3">
                          <p class="text-primary">{{ $customer->phone }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-7">
                <div class="panel panel-default panel-order">
                  <div class="panel-heading">
                    <h3 class="panel-title">Thông tin đơn hàng</h3>
                  </div>

                  <div class="panel-body">

                    <input type='hidden' name='service_product_id' value='{{ $service_product_id }}'>
                    <input type='hidden' name='producttypes_numtime' value='{{ $producttypes_numtime }}'>
                    <input type='hidden' name='producttypes_discount' value='{{ $producttypes_discount }}'>
                    <input type='hidden' name='producttypes_amount' value='{{ $producttypes_amount }}'>

                    <table class="table table-hover" width="100%">
                      <thead>
                        <tr>
                          <th class="text-center" width="40%"><b>Dịch vụ</b></th>
                          <th class="text-center" width="15%"><b>Thời hạn (tháng)</b></th>
                          <th class="text-center" width="15%"><b>Giảm giá (%)</b></th>
                          <th class="text-center" width="30%"><b>Số tiền thanh toán (đồng)</b></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><b>{{ $service_product_name }}</b> <br> Giá:
                            {{ formatNumber($service_product_price, 1, 0, 0) }} đồng/tháng</td>
                          <td class="text-center">{{ $producttypes_numtime }}</td>
                          <td class="text-center">{{ $producttypes_discount }}</td>
                          <td class="text-right">{{ formatNumber($producttypes_amount, 1, 0, 0) }}</td>
                        </tr>
                        <tr>
                          <td class="text-right" colspan="3"><b>THÀNH TIỀN</b></td>
                          <td class="text-right">{{ formatNumber($producttypes_amount, 1, 0, 0) }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>

        <div class="button-function clearfix">
          <a class="btn btn-default clearfix" href="{{ route('contracts-addContract') }}">
            <span class="icon"><i class="fa fa-arrow-left"></i></span>
            <span class="text">Quay lại</span>
          </a>
          <button class="btn btn-primary btn-pay clearfix" onclick="processReports('frm', 'store')"
            style="background-color: rgba(235, 161, 52); border: 1px solid rgba(235, 161, 52);">
            <span class="text">Tiếp tục thanh toán</span>
            <span class="icon"><i class="fa fa-arrow-right"></i></span>
          </button>
        </div>

      </div>
    </form>
  </div> --}}
@endsection

@section('scripts')
  @include('product-manage.contract.partials.script')
@endsection
