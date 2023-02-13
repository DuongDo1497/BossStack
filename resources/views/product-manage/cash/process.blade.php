@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/cash.css') }}">

  {{--
<link rel="stylesheet" href="{{ asset('css/pages/products.css') }}">

<style type="text/css">
    .synthetic-table {
        height: 213px;
        overflow-y: auto;
    }

    .synthetic-table table {
        min-height: 100%;
        margin-bottom: 0;
    }

    .cash-analysis {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .cash-analysis .item:first-child {
        flex-basis: calc(18% - 5px);
    }

    .cash-analysis .item:nth-child(3) {
        flex-basis: calc(5% - 5px);
        text-align: center;
    }

    .cash-analysis .item:nth-child(2n + 2) {
        flex-basis: calc(calc(47% / 2) - 5px);
    }

    .cash-analysis .item:last-child {
        display: flex;
        flex-basis: calc(30% - 5px);
        justify-content: space-between;
    }

    .cash-analysis .item:last-child button {
        flex-basis: calc(calc(100% / 2) - 5px);
    }

    table tbody .table-cashasset td {
        vertical-align: middle;
    }

    .cash-progress,
    .planned-cash {
        table-layout: fixed;
    }

    .cash-progress thead tr .target-name,
    .planned-cash thead tr .target-name {
        border-right: 2px solid #a6a6a6;
        width: 115px;
    }

    .cash-progress thead tr:first-child th:nth-child(6),
    .cash-progress thead tr:nth-child(2) th:first-child,
    .cash-progress thead tr:nth-child(3) th:first-child,
    .cash-progress thead tr:last-child th:first-child,
    .planned-cash thead tr:first-child th:nth-child(6),
    .planned-cash thead tr:nth-child(2) th:first-child,
    .planned-cash thead tr:nth-child(3) th:first-child,
    .planned-cash thead tr:last-child th:first-child {
        border-left: 2px solid #a6a6a6;
    }

    .cash-progress thead tr:nth-child(2) th:last-child,
    .cash-progress thead tr:nth-child(3) th:last-child,
    .cash-progress thead tr:last-child th:last-child,
    .planned-cash thead tr:nth-child(2) th:last-child,
    .planned-cash thead tr:nth-child(3) th:last-child,
    .planned-cash thead tr:last-child th:last-child {
        border-right: 2px solid #a6a6a6;
    }

    .cash-progress tbody tr td:last-child,
    .planned-cash tbody tr td:last-child {
        border-right: 1px solid #a6a6a6;
    }

    .cash-progress tfoot,
    .planned-cash tfoot {
        border-right: 1px solid #a6a6a6;
        border-left: 1px solid #a6a6a6;
        border-bottom: 2px solid #a6a6a6;
    }

    .cash-progress tfoot tr th:first-child,
    .planned-cash tfoot tr th:first-child {
        border-left: none;
    }

    .cash-progress tfoot tr th:last-child {
        border-right: none;
    }

    .planned-cash tfoot tr th:last-child {
        border-right: 1px solid #a6a6a6;
    }

    .cash-progress tbody tr td,
    .planned-cash tbody tr td {
        border-bottom: 1px solid #a6a6a6;
        vertical-align: middle;
    }

    .tabledit-toolbar-column {
        display: none;
    }

    .ability-assessment-wrap {
        max-height: 575px;
        height: 100%;
        overflow-y: auto;
    }

    .ability-assessment-wrap #ability-assessment thead tr th {
        color: #2d3194;
    }

    .ability-assessment-wrap #ability-assessment tbody tr td,
    .ability-assessment-wrap #ability-assessment tfoot tr td {
        white-space: nowrap !important;
        vertical-align: middle;
    }

    .ability-assessment-wrap #ability-assessment tfoot tr td {
        border: 1px solid #a6a6a6;
    }

    .square {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 3px;
        margin-right: 5px;
    }

    .square.success {
        background-color: #00a65a;
    }

    .square.danger {
        background-color: #dd4b39;
    }

    @media only screen and (min-width: 1201px) {}

    @media only screen and (min-width: 993px) and (max-width: 1200px) {
        .cash-analysis .item:first-child {
            flex-basis: calc(18% - 5px);
        }

        .cash-analysis .item:nth-child(3) {
            flex-basis: calc(5% - 5px);
        }

        .cash-analysis .item:nth-child(2n + 2) {
            flex-basis: calc(calc(47% / 2) - 5px);
        }

        .cash-analysis .item:last-child {
            flex-basis: calc(30% - 5px);
        }
    }

    @media only screen and (min-width: 992px) {
        .cash-analysis .item:last-child button .text {
            display: block;
        }

        .cash-analysis .item:last-child button .icon {
            display: none;
        }
    }

    @media only screen and (max-width: 992px) {
        .cash-analysis .item:last-child button .text {
            display: none;
        }

        .cash-analysis .item:last-child button .icon {
            display: block;
        }
    }

    @media only screen and (min-width: 769px) and (max-width: 992px) {
        .cash-analysis .item:first-child {
            flex-basis: calc(26% - 5px);
        }

        .cash-analysis .item:nth-child(3) {
            flex-basis: calc(5% - 5px);
        }

        .cash-analysis .item:nth-child(2n + 2) {
            flex-basis: calc(calc(39% / 2) - 5px);
        }

        .cash-analysis .item:last-child {
            flex-basis: calc(30% - 5px);
        }
    }

    @media only screen and (max-width: 768px) {
        .content-wrapper .content-header>h1 {
            font-size: 22px;
        }

        .ability-assessment-wrap {
            height: 500px;
            overflow: auto;
        }

        .ability-assessment-wrap #ability-assessment {
            width: 1000px;
        }
    }

    @media only screen and (min-width: 426px) and (max-width: 768px) {
        .cash-analysis .item:first-child {
            flex-basis: calc(28% - 5px);
        }

        .cash-analysis .item:nth-child(3) {
            flex-basis: calc(5% - 5px);
        }

        .cash-analysis .item:nth-child(2n + 2) {
            flex-basis: calc(calc(37% / 2) - 5px);
        }

        .cash-analysis .item:last-child {
            flex-basis: calc(30% - 10px);
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 425px) {
        .synthetic-table table {
            margin-bottom: 20px;
        }

        .cash-analysis .item:first-child {
            flex-basis: calc(40% - 5px);
        }

        .cash-analysis .item:nth-child(3) {
            flex-basis: calc(40% - 5px);
            text-transform: capitalize;
            text-align: left;
        }

        .cash-analysis .item:nth-child(2n + 2) {
            margin-bottom: 10px;
            flex-basis: calc(calc(120% / 2) - 5px);
        }

        .cash-analysis .item:last-child {
            flex-basis: 100%;
        }

        .cash-analysis .item:last-child button .text {
            display: block;
        }

        .cash-analysis .item:last-child button .icon {
            display: none;
        }
    }
</style> --}}
@endsection
@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section cash-process">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <span class="current">Bóc tách dòng tiền</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('cash-processPlan') }}" method="post" id="frm" name="frm">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value=''>
      <div class="box-content">
        <div class="box box-primary">
          {{-- <div class="box-search">
            <div class="filter-timeline">
              <div class="form-row">
                <div class="form-group">
                  <label for="fromdate">Thời gian từ:</label>
                  <input type="text" class="form-control" name="fromdate" id="fromdate" value="{{ $fromdate }}">
                </div>
                <div class="form-group">
                  <label for="todate">đến:</label>
                  <input type="text" class="form-control" name="todate" id="todate" value="{{ $todate }}">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-filter">
                Tìm kiếm
                <img class="icon" src="{{ asset('img/icon-search.svg') }}" alt="">
              </button>
            </div>
          </div> --}}

          {{-- <div class="noti-index">
            <div class="noti-index__wrap">
              <div class="noti-index__item">
                <p class="title">Số tiền các ví:</p>
                <p class="number">+20,000,000</p>
              </div>
              <div class="noti-index__item">
                <p class="title">Tổng tài sản:</p>
                <p class="number">+20,000,000</p>
              </div>
              <div class="noti-index__item">
                <p class="title">Tổng nợ:</p>
                <p class="number">-70,350,000</p>
              </div>
            </div>
          </div> --}}

          <div class="cash-process__wrap">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#cashFlowDissection">Bóc tách dòng tiền</a></li>
              <li><a data-toggle="tab" href="#assessment">Đánh giá khả năng thực hiện</a></li>
            </ul>

            <div class="tab-content">
              <div id="cashFlowDissection" class="tab-pane fade in active">
                <div class="tab-pane__body">
                  <div class="cash-dissection" id="cash-dissection__accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#cash-dissection__accordion1"
                            href="#cash-dissection__dashboard">
                            Tổng quan
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                          </a>
                        </h4>
                      </div>
                      <div id="cash-dissection__dashboard" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <div class="box-search">
                            <div class="filter-timeline">
                              <div class="form-row">
                                <div class="form-group">
                                  <label for="">Chọn từ:</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="" id=""
                                      value="09/2022">
                                    <span class="input-group-addon">
                                      <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                                    </span>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="">đến:</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="" id=""
                                      value="11/2022">
                                    <span class="input-group-addon">
                                      <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                                    </span>
                                  </div>
                                </div>
                              </div>

                              <button type="submit" class="btn btn-primary btn-filter text">
                                Lọc
                                <img class="icon last" src="{{ asset('img/icon-filter.svg') }}" alt="">
                              </button>
                            </div>
                          </div>
                          <p class="note-date">09/2022 đến 11/2022</p>
                          <div class="table-wrap">
                            <div class="table-content">
                              <table class="table table-bordered table-list">
                                <thead>
                                  <tr>
                                    <th rowspan="2" class="fixed fixed-1">Bóc tách dòng tiền</th>
                                    <th rowspan="2" class="fixed fixed-2">Số lượng mục tiêu</th>
                                    <th colspan="3">Số tiền</th>
                                    <th rowspan="2">Còn thiếu</th>
                                  </tr>
                                  <tr>
                                    <th></th>
                                    <th>Mục tiêu</th>
                                    <th>Cần phân bổ</th>
                                    <th>Đã thực hiện</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="fixed fixed-1">Cá nhân</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-right">+800,000,000</td>
                                    <td class="text-right">-10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1">Gia đình</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-right">+800,000,000</td>
                                    <td class="text-right">-10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1">Đầu tư</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-right">+800,000,000</td>
                                    <td class="text-right">-10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1">Kinh doanh</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-right">+800,000,000</td>
                                    <td class="text-right">-10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1">Dòng tiền khác</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-right">+800,000,000</td>
                                    <td class="text-right">-10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1"><b>Tổng cộng</b></td>
                                    <td class="text-center fixed fixed-2"><b>56</b></td>
                                    <td class="text-right"><b>+1,500,000,000</b></td>
                                    <td class="text-right"><b>+10,000,000</b></td>
                                    <td class="text-right"><b>+800,000,000</b></td>
                                    <td class="text-right"><b>-10,000,000</b></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#cash-dissection__accordion2"
                            href="#cash-dissection__detail">
                            Chi tiết
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                          </a>
                        </h4>
                      </div>
                      <div id="cash-dissection__detail" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="box-search">
                            <div class="filter-timeline">
                              <div class="form-row">
                                <div class="form-group">
                                  <label for="">Chọn từ:</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="" id=""
                                      value="09/2022">
                                    <span class="input-group-addon">
                                      <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                                    </span>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="">đến:</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="" id=""
                                      value="11/2022">
                                    <span class="input-group-addon">
                                      <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-filter text">
                                Lọc
                                <img class="icon last" src="{{ asset('img/icon-filter.svg') }}" alt="">
                              </button>
                            </div>
                          </div>
                          <p class="note-date">09/2022 đến 11/2022</p>
                          <div class="table-wrap">
                            <div class="table-content">
                              <table class="table table-bordered table-list">
                                <thead>
                                  <tr>
                                    <th rowspan="2" class="fixed fixed-1">Tên ví</th>
                                    <th colspan="3">Số tiền</th>
                                    <th rowspan="2">Còn thiếu</th>
                                  </tr>
                                  <tr>
                                    <th></th>
                                    <th>Mục tiêu</th>
                                    <th>Cần phân bổ</th>
                                    <th>Đã thực hiện</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="fixed fixed-1">
                                      <p><b>Ví mục tiêu quỹ dự phòng Ví mục tiêu quỹ dự phòng</b></p>
                                      <p><span>Ngày lập:</span> 28/11/2022</p>
                                      <p><span>Kế hoạch:</span> 26 năm</p>
                                    </td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-right">+800,000,000</td>
                                    <td class="text-right">-10,000,000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="assessment" class="tab-pane fade">
                <div class="tab-pane__body">
                  {{-- <table class="table table-bordered table-list">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Mục Tiêu</th>
                        <th>Tên Mục Tiêu</th>
                        <th>Kế hoạch</th>
                        <th>Số tiền đã thực hiện</th>
                        <th width="10%">Tình Trạng</th>
                        <th width="30%">Tiến Độ</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $icash = 1;
                        $total_requireamount = 0;
                        $total_realamount = 0;
                        $checkTotalPlan = '';
                        $checkTotalText = '';
                        $percentTotalProcess = 0;
                        $percentProcess = 0;
                      @endphp
                      @foreach ($listcashplan as $cashplan)
                        @php
                          $checkAmountPlan = $sumArray[$cashplan->id . '_realamount'] - $sumArray[$cashplan->id . '_planamount'];
                          $checkPlan = $checkAmountPlan > 0 ? 'status status-success' : 'status status-error';
                          
                          $checkText = $checkAmountPlan > 0 ? 'Đang thực hiện tốt' : 'Đang thiếu hụt ';
                          
                          if ($cashplan->requireamount > 0){
                              $percentProcess = round(($sumArray[$cashplan->id . '_realamount'] / $cashplan->requireamount) * 100, 0);
                              if ($percentProcess >= 100) {
                                  $percentProcess = 100;
                              }
                          }
                          
                          //tong cong ke hoach, da thuc hien
                          $total_requireamount += $cashplan->requireamount;
                          $total_realamount += $sumArray[$cashplan->id . '_realamount'];
                          
                          $checkTotalAmountPlan = $total_realamount - $total_requireamount;
                          $checkTotalPlan = $checkTotalAmountPlan > 0 ? 'label label-success' : 'label label-danger';
                          
                          $checkTotalText = $checkTotalAmountPlan > 0 ? 'Đang thực hiện tốt' : 'Đang thiếu hụt ';
                          
                          $percentTotalProcess = round(($total_realamount / $total_requireamount) * 100, 0);
                          if ($percentTotalProcess >= 100) {
                              $percentTotalProcess = 100;
                          }
                        @endphp

                        <tr>
                          <td class="text-center">{{ $icash }}</td>
                          <td class="text-center">Mục tiêu {{ $icash++ }}</td>
                          <td><b>{{ $cashplan->planname }}</b> <br> {{ $cashplan->description }}
                            <br>Ngày lập: {{ $cashplan->plandate == null ? '' : ConvertSQLDate($cashplan->plandate) }}
                          </td>
                          <td class="text-right">{!! formatNumberColorCustom($cashplan->requireamount, 1, 0, 0, 0) !!}</td>
                          <td class="text-right">{!! formatNumberColorCustom($sumArray[$cashplan->id . '_realamount'], 1, 0, 0, 0) !!}</td>
                          <td class="text-center">
                            <span class="{{ $checkPlan }}">{{ $checkText }}</span>
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar"
                                aria-valuenow="{{ formatNumber($percentProcess, 1, 2, 1) }}" aria-valuemin="0"
                                aria-valuemax="100" style="width: {{ formatNumber($percentProcess, 1, 2, 1) }}%">
                                {{ formatNumber($percentProcess, 1, 0, 1) }}%
                              </div>
                              <div class="progress-bar progress-bar-danger" role="progressbar"
                                aria-valuenow="{{ formatNumber(100 - $percentProcess, 1, 2, 1) }}" aria-valuemin="0"
                                aria-valuemax="100" style="width: {{ formatNumber(100 - $percentProcess, 1, 2, 1) }}%">
                                {{ formatNumber(100 - $percentProcess, 1, 0, 1) }}%
                              </div>
                            </div>
                            <p>
                              <span class="square status-success"></span>
                              Đã thực hiện: {{ formatNumber($percentProcess, 1, 0, 1) }}%
                            </p>
                            <p>
                              <span class="square status-error"></span>
                              Chưa thực hiện: {{ formatNumber(100 - $percentProcess, 1, 0, 1) }}%
                            </p>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                    @if ($checkTotalText != '')
                      <tfoot>
                        <tr>
                          <td colspan="3"><b>Tổng cộng</b></td>
                          <td class="text-right" style="white-space: nowrap !important;">
                            {!! formatNumberColorCustom($total_requireamount, 1, 0, 0, 0) !!}
                          </td>
                          <td class="text-right" style="white-space: nowrap !important;">
                            {!! formatNumberColorCustom($total_realamount, 1, 0, 0, 0) !!}
                          </td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tfoot>
                    @endif
                  </table> --}}

                  <div class="cash-dissection" id="assessment__accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#assessment__accordion1"
                            href="#assessment__dashboard">
                            Tổng quan
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                          </a>
                        </h4>
                      </div>
                      <div id="assessment__dashboard" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <div class="box-search">
                            <div class="filter-timeline">
                              <div class="form-row">
                                <div class="form-group">
                                  <label for="">Chọn từ:</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="" id=""
                                      value="09/2022">
                                    <span class="input-group-addon">
                                      <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                                    </span>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="">đến:</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="" id=""
                                      value="11/2022">
                                    <span class="input-group-addon">
                                      <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-filter text">
                                Lọc
                                <img class="icon last" src="{{ asset('img/icon-filter.svg') }}" alt="">
                              </button>
                            </div>
                          </div>
                          <div class="note-group">
                            <p class="note-date">09/2022 đến 11/2022</p>
                            <div class="progress-bar__note">
                              <div class="item">
                                <span class="square success"></span>
                                <span class="text">Đã thực hiện</span>
                              </div>
                              <div class="item">
                                <span class="square error"></span>
                                <span class="text">Chưa thực hiện</span>
                              </div>
                            </div>
                          </div>
                          <div class="table-wrap">
                            <div class="table-content">
                              <table class="table table-bordered table-list">
                                <thead>
                                  <tr>
                                    <th rowspan="2" class="fixed fixed-1">Phân loại</th>
                                    <th rowspan="2" class="fixed fixed-2">Số lượng ví tài chính</th>
                                    <th colspan="2">Số tiền</th>
                                    <th rowspan="2">Tiến độ</th>
                                    <th rowspan="2">Số tiền còn lại</th>
                                  </tr>
                                  <tr>
                                    <th></th>
                                    <th>Kế hoạch</th>
                                    <th>Đã thực hiện</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="fixed fixed-1">Cá nhân</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-center">
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                      </div>
                                      <span class="text-success">Đang thực hiện tốt</span>
                                    </td>
                                    <td class="text-right">+10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1">Gia đình</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-center">
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                      </div>
                                      <span class="text-success">Đang thực hiện tốt</span>
                                    </td>
                                    <td class="text-right">+10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1">Đầu tư</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-center">
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                      </div>
                                      <span class="text-success">Đang thực hiện tốt</span>
                                    </td>
                                    <td class="text-right">+10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1">Kinh doanh</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-center">
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                      </div>
                                      <span class="text-success">Đang thực hiện tốt</span>
                                    </td>
                                    <td class="text-right">+10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1">Dòng tiền khác</td>
                                    <td class="text-center fixed fixed-2">11</td>
                                    <td class="text-right">+1,500,000,000</td>
                                    <td class="text-right">+10,000,000</td>
                                    <td class="text-center">
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                      </div>
                                      <span class="text-success">Đang thực hiện tốt</span>
                                    </td>
                                    <td class="text-right">+10,000,000</td>
                                  </tr>
                                  <tr>
                                    <td class="fixed fixed-1"><b>Tổng cộng</b></td>
                                    <td class="text-center fixed fixed-2"><b>56</b></td>
                                    <td class="text-right"><b>+1,500,000,000</b></td>
                                    <td class="text-right"><b>+10,000,000</b></td>
                                    <td class="text-center">
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                          50%
                                        </div>
                                      </div>
                                      <span class="text-error">Đang thiếu hụt</span>
                                    </td>
                                    <td class="text-right"><b>+10,000,000</b></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#assessment__accordion2" href="#assessment__detail">
                            Chi tiết
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                          </a>
                        </h4>
                      </div>
                      <div id="assessment__detail" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="box-search">
                            <div class="filter-timeline">
                              <div class="form-row">
                                <div class="form-group">
                                  <label for="">Chọn từ:</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="" id=""
                                      value="09/2022">
                                    <span class="input-group-addon">
                                      <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                                    </span>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="">đến:</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="" id=""
                                      value="11/2022">
                                    <span class="input-group-addon">
                                      <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-filter text">
                                Lọc
                                <img class="icon last" src="{{ asset('img/icon-filter.svg') }}" alt="">
                              </button>
                            </div>
                          </div>
                          <div class="note-group">
                            <p class="note-date">09/2022 đến 11/2022</p>
                            <div class="progress-bar__note">
                              <div class="item">
                                <span class="square success"></span>
                                <span class="text">Đã thực hiện</span>
                              </div>
                              <div class="item">
                                <span class="square error"></span>
                                <span class="text">Chưa thực hiện</span>
                              </div>
                            </div>
                          </div>
                          <div class="table-wrap">
                            <div class="table-content">
                              <table class="table table-bordered table-list">
                                <thead>
                                  <tr>
                                    <th rowspan="2" class="fixed fixed-1">Tên ví</th>
                                    <th colspan="2">Số tiền</th>
                                    <th rowspan="2">Tiến độ</th>
                                    <th rowspan="2">Số tiền còn lại</th>
                                  </tr>
                                  <tr>
                                    <th></th>
                                    <th>Kế hoạch</th>
                                    <th>Đã thực hiện</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @php
                                    $icash = 1;
                                    $total_requireamount = 0;
                                    $total_realamount = 0;
                                    $checkTotalPlan = '';
                                    $checkTotalText = '';
                                    $percentTotalProcess = 0;
                                    $percentProcess = 0;
                                  @endphp
                                  @foreach ($listcashplan as $cashplan)
                                    @php
                                      $checkAmountPlan = $sumArray[$cashplan->id . '_realamount'] - $sumArray[$cashplan->id . '_planamount'];
                                      $checkPlan = $checkAmountPlan > 0 ? 'text-success' : 'text-error';
                                      
                                      $checkText = $checkAmountPlan > 0 ? 'Đang thực hiện tốt' : 'Đang thiếu hụt ';
                                      if ($cashplan->requireamount > 0) {
                                          $percentProcess = round(($sumArray[$cashplan->id . '_realamount'] / $cashplan->requireamount) * 100, 0);
                                          if ($percentProcess >= 100) {
                                              $percentProcess = 100;
                                          }
                                      }
                                      
                                      //tong cong ke hoach, da thuc hien
                                      $total_requireamount += $cashplan->requireamount;
                                      $total_realamount += $sumArray[$cashplan->id . '_realamount'];
                                      
                                      $checkTotalAmountPlan = $total_realamount - $total_requireamount;
                                      $checkTotalPlan = $checkTotalAmountPlan > 0 ? 'label label-success' : 'label label-danger';
                                      
                                      $checkTotalText = $checkTotalAmountPlan > 0 ? 'Đang thực hiện tốt' : 'Đang thiếu hụt ';
                                      
                                      $percentTotalProcess = round(($total_realamount / $total_requireamount) * 100, 0);
                                      if ($percentTotalProcess >= 100) {
                                          $percentTotalProcess = 100;
                                      }
                                    @endphp
                                    <tr>
                                      <td class="fixed fixed-1">
                                        <p><b>{{ $cashplan->planname }}</b></p>
                                        <p><span>Ngày lập:</span>
                                          {{ $cashplan->plandate == null ? '' : ConvertSQLDate($cashplan->plandate) }}
                                        </p>
                                        <p><span>Kế hoạch:</span> -- năm</p>
                                      </td>
                                      <td class="text-right">{!! formatNumberColorCustom($cashplan->requireamount, 1, 0, 0, 0) !!}</td>
                                      <td class="text-right">{!! formatNumberColorCustom($sumArray[$cashplan->id . '_realamount'], 1, 0, 0, 0) !!}</td>
                                      <td class="text-center">
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-success" role="progressbar"
                                            aria-valuenow="{{ formatNumber($percentProcess, 1, 2, 1) }}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{ formatNumber($percentProcess, 1, 2, 1) }}%">
                                            {{ formatNumber($percentProcess, 1, 0, 1) }}%
                                          </div>
                                          <div class="progress-bar progress-bar-danger" role="progressbar"
                                            aria-valuenow="{{ formatNumber(100 - $percentProcess, 1, 2, 1) }}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{ formatNumber(100 - $percentProcess, 1, 2, 1) }}%">
                                            {{ formatNumber(100 - $percentProcess, 1, 0, 1) }}%
                                          </div>
                                        </div>
                                        <span class="{{ $checkPlan }}">{{ $checkText }}</span>
                                      </td>
                                      <td class="text-right">
                                        +10,000,000
                                      </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
@section('scripts')
  @include('product-manage.cash.partials.script_process')
@endsection
