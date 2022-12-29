@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/dashboard.css') }}">

  {{--
<link rel="stylesheet" href="{{ asset('css/pages/products.css') }}">
<style type="text/css">
    @media only screen and (min-width: 320px) and (max-width: 575px) {
        .content-wrapper .content {
            padding-top: 0;
        }
    }
</style> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif


  <div class="section dashboard-index no-bg">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <span class="current">Tổng quan tài khoản</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('dashboard-customer') }}" method="get" name="frm" id="frm">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value=''>
      <div class="box-content">
        <div class="box box-primary">
          <div class="overview-page">
            <div class="overview-page__item">
              <a href="{{ route('profits-index') }}">
                <img class="icon" src="{{ asset('img/dashboard-1.svg') }}" alt="">
                <span class="text">Tính lợi nhuận<br />kinh doanh</span>
              </a>
            </div>

            <div class="overview-page__item">
              <a href="{{ route('retireplans-index') }}">
                <img class="icon" src="{{ asset('img/dashboard-2.svg') }}" alt="">
                <span class="text">Tính số tiền<br />nghỉ hưu</span>
              </a>
            </div>

            <div class="overview-page__item">
              <a href="{{ route('cashplans-index') }}">
                <img class="icon" src="{{ asset('img/dashboard-3.svg') }}" alt="">
                <span class="text">Thiết lập ví tài chính</span>
              </a>
            </div>

            <div class="overview-page__item add">
              <a href="{{ route('customers-addFunction') }}">
                <img class="icon" src="{{ asset('img/dashboard-add.svg') }}" alt="">
                <span class="text">Thêm tiện ích</span>
              </a>
            </div>

            {{-- <div class="overview-page__item">
              <a href="{{ route('cash-index') }}">
                <img class="icon" src="{{ asset('img/dashboard-4.svg') }}" alt="">
                <span class="text">Thu chi ví tổng</span>
              </a>
            </div>

            <div class="overview-page__item">
              <a href="{{ route('cashassets-index') }}">
                <img class="icon" src="{{ asset('img/dashboard-5.svg') }}" alt="">
                <span class="text">Danh mục<br />tài sản - nợ</span>
              </a>
            </div>

            <div class="overview-page__item">
              <a href="{{ route('cash-process') }}">
                <img class="icon" src="{{ asset('img/dashboard-6.svg') }}" alt="">
                <span class="text">Bóc tách dòng tiền</span>
              </a>
            </div>

            <div class="overview-page__item">
              <a href="{{ route('cash-process') }}">
                <img class="icon" src="{{ asset('img/dashboard-6.svg') }}" alt="">
                <span class="text">Bóc tách dòng tiền</span>
              </a>
            </div> --}}
          </div>
        </div>

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
                  <input type="text" class="form-control number" name="year" id="year" value="2022">
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
    </form>
  </div>

  {{-- <form role="form" action="{{ route('dashboard-customer') }}" method="get" name="frm" id="frm">
    {{ csrf_field() }}
    <input type='hidden' name='typereport' value=''>

    <div class="row">
        <div class="banner-dashboard">
            <h5>
                <span>Phần mềm quản lý dòng tiền</span>
                <img src="{{ asset('img/logo-bossstack.png') }}" alt="">
            </h5>
            <div class="banner-icon">
                <div class="icon">
                    <a href="{{ route('cash-index') }}" title="CẬP NHẬT THU CHI VÍ TỔNG">
                        <div class="banner-img"><img src="{{ asset('img/dashboard-1.png') }}"></div>
                        <p>Cập nhật thu chi<br />ví tổng</p>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('invests-index') }}" title="ĐẦU TƯ">
                        <div class="banner-img"><img src="{{ asset('img/dashboard-2.png') }}"></div>
                        <p>Đầu tư</p>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('cash-process') }}" title="DÒNG TIỀN CÁ NHÂN">
                        <div class="banner-img"><img src="{{ asset('img/dashboard-3.png') }}"></div>
                        <p>Dòng tiền<br />cá nhân</p>
                    </a>
                </div>

                <div class="icon">
                    <a href="{{ route('cashassets-index') }}" title="THEO DÕI DANH MỤC TÀI SẢN">
                        <div class="banner-img"><img src="{{ asset('img/dashboard-4.png') }}"></div>
                        <p>Theo dõi danh<br />mục tài sản</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-12" style="padding: 0;">
            <div class="box box-dashboard box-customer" style="padding-top: 0px; margin-bottom: 38px;">
                <div class="box-body">
                    <div class="title">
                        <h3><b>dòng tiền của tôi</b></h3>
                        <div class="title-2">
                            <div class="filter-date">
                                <div class="items">
                                    <label>Thời gian từ:</label>
                                </div>
                                <div class="items">
                                    <input type='text' class="form-control" name="fromDate" id='fromDate'
                                        value="{{ old('fromDate') == "" ? $fromDate : old('fromDate') }}" />
                                </div>
                                <div class="items">
                                    <label style="text-align: center;">đến:</label>
                                </div>
                                <div class="items">
                                    <input type='text' class="form-control" name="toDate" id='toDate'
                                        value="{{ old('toDate') == "" ? $toDate : old('toDate') }}" />
                                </div>
                                <div class="items">
                                    <button class="btn btn-primary btn-search">
                                        <span class="text">Lọc</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-cash">
                        <div id="chart5"></div>
                    </div>
                </div>
            </div>

            <div class="box box-dashboard box-customer" style="padding-top: 0px; margin-bottom: 38px;">
                <div class="box-body">
                    <h3><b>ví mục tiêu tài chính</b></h3>
                    <div class="financial-planning">
                        <div class="row">
                            <div class="col-md-12" style="text-align: right;">
                                <font size='2' color='#ff0000'>(ĐVT: VND)&nbsp;&nbsp;</font>
                            </div>
                        </div>
                        <div class="financial-planning-list">
                            <div class="wrap">
                                <div class="financial-planning-item">
                                    <a class="btn btn-default add-objective" href="{{ route('cashplans-add') }}"
                                        title="">
                                        <i class="fas fa-plus-circle"></i>
                                        <p>Thêm ví mục tiêu</p>
                                    </a>
                                </div>

                                @php
                                $i = 0;
                                @endphp
                                @foreach ($listcashplans as $item)
                                <div class="financial-planning-item">
                                    <h4>Ví {{ $plantypes[$item->plantype] }}</h4>
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <th>Số tuổi mục tiêu</th>
                                                <td class="text-right">
                                                    <font color='#F52020'>{{ $item->planage }}</font> TUỔI
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Số tiền mục tiêu</th>
                                                <td class="text-right">
                                                    <font color='#F52020'>{{ formatNumber($item->requireamount *
                                                        $item->requireamountunittype, 1, 0, 0) }}</font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Số tiền đã thực hiện</th>
                                                <td class="text-right">
                                                    <font color='#1eb40f'>{{ formatNumber($item->amount, 1, 0, 1) }}
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Số tiền còn thiếu</th>
                                                <td class="text-right">
                                                    <font color='#F52020'>{{
                                                        formatNumber(($item->requireamount*intval($item->requireamountunittype)
                                                        - $item->amount), 1, 0, 0) }}</font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Thời gian hoàn thiện</th>
                                                <td class="text-right">
                                                    <font color='#F52020'>{{ $item->planage - $item->currentage }}
                                                    </font> NĂM
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="financial-planning-btn">
                                        <div class="row">
                                            <div class="col-md-7 col-xs-7">
                                                <a class="btn btn-primary btn-analytical" target="blank"
                                                    href="{{ route('cashplans-analysis',['id'=> $item->id]) }}">Phân
                                                    tích</a>
                                            </div>
                                            <div class="col-md-5 col-xs-5">
                                                <a class="btn-income" target="blank"
                                                    href="{{ route('cashplans-edit',['id'=> $item->id]) }}">Chỉnh
                                                    sửa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                $i++;
                                if ($i == 10){
                                break;
                                }
                                @endphp
                                @endforeach
                            </div>
                        </div>

                        <div class="view-detail">
                            <a href="{{ route('cashplans-index') }}" target="_blank">Xem chi tiết <i
                                    class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box box-dashboard box-customer">
                <div class="box-body">
                    <h3><b>theo dõi các tài sản</b></h3>

                    <div class="my-assets">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="report">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12" style="text-align: center;">
                                            <p class="title">Nợ</p>
                                            <div id="rptasset1" style="margin-top: 12px;"></div>
                                        </div>
                                        <div class="col-md-4 col-xs-12" style="text-align: center;">
                                            <p class="title">Tài sản</p>
                                            <div id="rptasset2" style="margin-top: 12px;"></div>
                                        </div>
                                        <div class="col-md-4 col-xs-12" style="text-align: center;">
                                            <p class="title">Tổng tài sản thực</p>
                                            <div id="rptasset3" style="margin-top: 12px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="view-detail">
                        <a href="{{ route('cashassets-index') }}" target="_blank">Xem chi tiết <i
                                class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form> --}}
@endsection

@section('scripts')
  @include('dashboard.partials.script')
  @include('dashboard.partials.script_customer')
@endsection
