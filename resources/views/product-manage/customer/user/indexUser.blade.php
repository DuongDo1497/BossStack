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
      <span>Quản lý tài khoản</span> / <span class="current">Tổng quan tài khoản</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

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
  </div>
@endsection

@section('scripts')
  @include('product-manage.customer.user.partials.script')
@endsection
