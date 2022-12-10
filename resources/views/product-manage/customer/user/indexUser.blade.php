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
            <a href="{{ route('retireplans-index') }}">
              <span class="icon">
                <i class="fa fa-pie-chart"></i>
              </span>
              <span class="text">Tính số tiền nghỉ hưu</span>
            </a>
          </div>

          <div class="overview-page__item">
            <a href="{{ route('cashplans-index') }}">
              <span class="icon">
                <i class="fa fa-building"></i>
              </span>
              <span class="text">Thiết lập ví tài chính</span>
            </a>
          </div>

          <div class="overview-page__item">
            <a href="{{ route('cash-index') }}">
              <span class="icon">
                <i class="fas fa-calculator"></i>
              </span>
              <span class="text">Thu chi ví tổng</span>
            </a>
          </div>

          <div class="overview-page__item">
            <a href="{{ route('cashassets-index') }}">
              <span class="icon">
                <i class="fa fa-list-alt"></i>
              </span>
              <span class="text">Danh mục tài sản - nợ</span>
            </a>
          </div>

          <div class="overview-page__item">
            <a href="{{ route('cash-process') }}">
              <span class="icon">
                <i class="fa fa-tasks"></i>
              </span>
              <span class="text">Bóc tách dòng tiền</span>
            </a>
          </div>
        </div>
      </div>

      <div class="box box-primary">
        <div class="spending-history">
          <div class="spending-history__list">
            <h6 class="box-title">Theo dõi tài sản</h6>
            <div class="chart-list">
              <div class="chart-item">
                <p class="chart-title">Nợ</p>
                {{-- <div id="rptasset1"></div> --}}
              </div>
              <div class="chart-item">
                <p class="chart-title">Tài sản</p>
                {{-- <div id="rptasset2"></div> --}}
              </div>
              <div class="chart-item">
                <p class="chart-title">Tổng tài sản thực</p>
                {{-- <div id="rptasset3"></div> --}}
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
                  {{-- <div id="rptasset1mb"></div> --}}
                </div>
                <div id="chart2" class="tab-pane fade">
                  {{-- <div id="rptasset2mb"></div> --}}
                </div>
                <div id="chart3" class="tab-pane fade">
                  {{-- <div id="rptasset3mb"></div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="spending-history__sort">
            <div class="income-highest">
              <p>Thu nhập cao nhất</p>
              <table class="table table-bordered table-list">
                <tbody>
                  <tr>
                    <td>abc</td>
                    <td class="text-right">+ 15,000,000</td>
                  </tr>
                  <tr>
                    <td>anc</td>
                    <td class="text-right">+ 15,000,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="line"></div>
            <div class="cost-highest">
              <p>Chi phí cao nhất</p>
              <table class="table table-bordered table-list">
                <tbody>
                  <tr>
                    <td>abc</td>
                    <td class="text-right">- 15,000,000</td>
                  </tr>
                  <tr>
                    <td>abc</td>
                    <td class="text-right">- 15,000,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="box box-primary">
        <div class="wrap">
          <h6 class="box-title">Dòng tiền của tôi</h6>
          <div class="box-search">
            <div class="filter-timeline">
              <div class="form-row">
                <div class="form-group">
                  <label for="fromDate">Thời gian từ:</label>
                  <input type="text" class="form-control" name="fromDate" id="fromDate" value="19/11/2022">
                </div>
                <div class="form-group">
                  <label for="toDate">đến:</label>
                  <input type="text" class="form-control" name="toDate" id="toDate" value="19/11/2022">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-filter">
                Lọc
                <img class="icon" src="{{ asset('img/icon-filter.svg') }}" alt="">
              </button>
            </div>
          </div>
          <div class="my-cash">
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
