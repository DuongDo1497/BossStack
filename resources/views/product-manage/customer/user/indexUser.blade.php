@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/dashboard.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif


  <div class="section dashboard-index no-bg">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <a href="#" class="prev">Tổng quan user - Gia đình</a> / <a href="#"
        class="prev">Thông tin user</a> / <span class="current">Nguyễn Văn A</span>
    </div>
    <p class="title-page">{{ $title->heading }} - Nguyễn Văn A</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="spending-history">
          <div class="spending-history__list">
            <h6 class="box-title">Theo dõi tổng tài sản - nợ</h6>
            <div class="chart-list">
              <div class="chart-item">
                <p class="chart-title">Nợ</p>
                <div id="rptasset1"></div>
              </div>
              <div class="chart-item">
                <p class="chart-title">Tài sản</p>
                <div id="rptasset2"></div>
              </div>
              <div class="chart-item">
                <p class="chart-title">Tổng tài sản thực</p>
                <div id="rptasset3"></div>
              </div>
            </div>
            <div class="chart-tab">
              <ul class="nav nav-tabs nav-tabs__mobile">
                <li class="active"><a data-toggle="tab" href="#chart1">Nợ</a></li>
                <li><a data-toggle="tab" href="#chart2">Tài sản</a></li>
                <li><a data-toggle="tab" href="#chart3">Tổng tài sản thực</a></li>
              </ul>

              <div class="tab-content">
                <div id="chart1" class="tab-pane fade in active">
                  <div id="rptasset1mb"></div>
                </div>
                <div id="chart2" class="tab-pane fade">
                  <div id="rptasset2mb"></div>
                </div>
                <div id="chart3" class="tab-pane fade">
                  <div id="rptasset3mb"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="spending-history__sort">
            <div class="income-highest">
              <p>Lợi nhuận cao nhất</p>
              <table class="table table-bordered table-list">
                <tbody>
                  <tr>
                    <td>Lợi nhuận 1</td>
                    <td class="text-right">+ 15,000,000</td>
                  </tr>
                  <tr>
                    <td>Lợi nhuận 2</td>
                    <td class="text-right">+ 15,000,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="line"></div>
            <div class="cost-highest">
              <p>Lợi nhuận thấp nhất</p>
              <table class="table table-bordered table-list">
                <tbody>
                  <tr>
                    <td>Lợi nhuận 1</td>
                    <td class="text-right">+ 15,000,000</td>
                  </tr>
                  <tr>
                    <td>Lợi nhuận 2</td>
                    <td class="text-right">+ 15,000,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="box box-primary">
        <div class="wrap">
          <h6 class="box-title">Theo dõi tình hình kinh doanh</h6>
          <div class="box-search">
            <div class="filter-timeline">
              <div class="form-group">
                <label for="year">Năm:</label>
                <div class="input-group">
                  <input type="text" class="form-control number" name="year" id="year" value="2022">
                  <span class="input-group-addon">
                    <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                  </span>
                </div>
              </div>
              {{-- <button type="submit" class="btn btn-primary btn-filter">
                  Lọc
                  <img class="icon" src="{{ asset('img/icon-filter.svg') }}" alt="">
                </button> --}}
            </div>
          </div>
          <div class="my-cash">
            <p class="chart-unit">ĐVT: triệu VND</p>
            <div id="chart5"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('product-manage.customer.user.partials.script')
@endsection
