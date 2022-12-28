@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/cashasset.css') }}">

  {{-- <style type="text/css">
    .detailed-property .box-body table tbody td.text-nowrap,
    .detailed-property .box-body table tbody th.text-nowrap {
        white-space: nowrap !important;
    }

    @media only screen and (max-width: 1024px) {
        .detailed-property .box-body {
            overflow-x: auto;
        }
    }

    @media only screen and (max-width: 768px) {
        .content-wrapper .content-header>h1 {
            font-size: 21px;
        }

        .report>.row .col-md-4 {
            margin-bottom: 20px;
        }

        .detailed-property .box-header {
            height: 90px;
        }

        .detailed-property .box-header .box-tools {
            bottom: 10px;
            top: auto;
        }

        .detailed-property .box-body {
            overflow-x: auto;
        }

        .detailed-property .box-body table {
            width: 1000px;
        }
    }
</style> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  @if (isset($infor))
    @if ($error == 1)
      @include('layouts.partials.messages.warning')
    @else
      @include('layouts.partials.messages.infor')
    @endif
  @endif

  <div class="section cashasset-index">
    <div class="breadcrumb">
      <span>Danh mục tài sản - nợ</span> / <span class="current">Quản lý tài sản - nợ</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="noti-index">
          <div class="noti-index__wrap">
            <div class="noti-index__item">
              <p class="title">Tổng nợ</p>
              <p class="number">-1,720,000,000</p>
            </div>
            <div class="noti-index__item">
              <p class="title">Tổng tài sản</p>
              <p class="number">+20,000,000</p>
            </div>
            <div class="noti-index__item">
              <p class="title">Tỷ lệ nợ/tài sản</p>
              <p class="number">24%</p>
            </div>
            <div class="noti-index__item">
              <p class="title">Tổng tài sản thực</p>
              <p class="number">+16,350,000</p>
            </div>
          </div>
        </div>
        <h6 class="box-title">Biểu đồ tỷ trọng tài sản</h6>
        <p class="box-des">Chức năng quản lý tài sản - nợ của phần mềm BossStack là công cụ hữu ích để
          hỗ
          trợ bạn đánh giá và xem lại việc quản lý tài sản của mình.</p>
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
      </div>

      <div class="box box-primary">
        <h6 class="box-title">
          Danh sách Chi tiết
          <a href="#" class="box-title__link">Lịch sử tài sản - nợ</a>
        </h6>
        <div class="noti-index">
          <div class="noti-index__wrap">
            <div class="noti-index__item">
              <p class="title">Tổng Tài sản nợ</p>
              <p class="number">- 1,300,000,000</p>
            </div>
            <div class="noti-index__item">
              <p class="title">Tổng Tài sản có</p>
              <p class="number">+ 3,500,000,000</p>
            </div>
          </div>
        </div>
        <div class="box-search">
          <div class="control">
            <a href="{{ route('cashassets-process', ['assetstatustype' => 3]) }}" class="btn btn-gray btn-debt">
              <img class="icon" src="{{ asset('img/icon-add.svg') }}" alt="">
              Nợ
            </a>
            <a href="{{ route('cashassets-process', ['assetstatustype' => 4]) }}" class="btn btn-gray btn-asset">
              <img class="icon" src="{{ asset('img/icon-add.svg') }}" alt="">
              Tài sản
            </a>
          </div>
        </div>
        <div class="table-wrap">
          <div class="table-content">
            <table class="table table-bordered table-list">
              <thead>
                <tr>
                  <th rowspan="2" class="fixed fixed-1">
                    <input type="checkbox" name="" id="">
                  </th>
                  <th rowspan="2" class="fixed fixed-2">STT</th>
                  <th rowspan="2" class="fixed fixed-3">Tài sản</th>
                  <th rowspan="2">Phân loại</th>
                  <th rowspan="2">Chi tiết</th>
                  <th rowspan="2">Ngày</th>
                  <th colspan="2">Tài sản</th>
                </tr>
                <tr>
                  <th></th>
                  <th>Nợ</th>
                  <th>Có</th>
                </tr>
              </thead>
              <tbody>
                @if ($collections->count() === 0)
                  <tr>
                    <td colspan="7"><b>Không có dữ liệu!!!</b></td>
                  </tr>
                @endif
                @php
                  $i = 1;
                  $total_asset = 0;
                  $total_expense = 0;
                @endphp
                @foreach ($collections as $cashasset)
                  @php
                    if ($cashasset->assetstatustype == 3) {
                        $total_asset += $cashasset->remainamount;
                    } elseif ($cashasset->assetstatustype == 4) {
                        $total_expense += $cashasset->remainamount;
                    }
                  @endphp
                  <tr>
                    <td class="text-center fixed fixed-1">
                      <input type="checkbox" name="" id="">
                    </td>
                    <td class="text-center fixed fixed-2">{{ $i++ }}</td>
                    <td class="fixed fixed-3">
                      <p>
                        <a href="{{ route('cashassets-edit', ['id' => $cashasset->id]) }}">{{ $cashasset->assetname }}</a>
                        @if ($cashasset->document != '')
                          <a target="_blank" href="{{ $pathdocument . $cashasset->document }}"
                            title='Hình ảnh, hóa đơn, chứng từ ...'><i class="fa fa-paperclip"
                              style="margin-right: 10px;"></i></a>
                        @endif
                      </p>
                      <p>Số tiền: {{ formatNumber($cashasset->amount, 1, 0, 1) }}</p>
                    </td>
                    <td>{{ $cashasset->config_types_name }}</td>
                    <td class="text-center">{{ $cashasset->config_type_details_name }}</td>
                    <td class="text-center">
                      {{ $cashasset->assetdate == null ? '' : ConvertSQLDate($cashasset->assetdate) }}
                    </td>
                    @if ($cashasset->assetstatustype == 3)
                      <td class="text-right">{!! formatNumberColorCustom($cashasset->remainamount, 1, 0, 0, 3) !!}</td>
                      <td class="text-right"></td>
                    @elseif($cashasset->assetstatustype == 4)
                      <td class="text-right"></td>
                      <td class="text-right">{!! formatNumberColorCustom($cashasset->remainamount, 1, 0, 0, 0) !!}</td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="6">Tổng cộng</td>
                  <td class="text-right">{!! formatNumberColorCustom($total_asset, 1, 0, 0, 3) !!}</td>
                  <td class="text-right">{!! formatNumberColorCustom($total_expense, 1, 0, 0, 0) !!}</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="box-control">
          <div class="control">
            <p class="count">4</p>
            <p class="text">Ví tài chính đang được chọn</p>
            <a href="#" class="btn btn-gray btn-delete">
              <img src="{{ asset('img/icon-delete.svg') }}" alt="">
            </a>
            <a href="#" class="btn btn-gray btn-export">
              <img src="{{ asset('img/icon-export.svg') }}" alt="">
            </a>
          </div>
          <div class="paging">
            {{ $collections->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="row">
    <form role="form" action="{{ route('cashassets-modify') }}?continue=true" method="post" id="frm">
        {{ csrf_field() }}
        <div class="col-xs-12">
            <div class="box">
                <br>
                <p style="margin-left:10px;font-size:11pt;">
                    Chức năng quản lý tài sản - nợ của phần mềm BossStack Coaching là công cụ hữu ích để hỗ trợ bạn đánh
                    giá và xem lại việc quản lý tài sản của mình.
                </p>
                <p style="margin-left:10px;font-size:14pt;color:#ff0000; text-transform: uppercase; font-weight: bold;">
                    Biểu đồ tỷ trọng tài sản</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="report">
                            <div class="row">
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <div id="rptasset1" style="margin-bottom: 12px;"></div>
                                    <font size='3' color="#2d3194"><b>Nợ</b></font>
                                </div>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <div id="rptasset2" style="margin-bottom: 12px;"></div>
                                    <font size='3' color="#2d3194"><b>Tài sản</b></font>
                                </div>
                                <div class="col-md-4 col-xs-12" style="text-align: center;">
                                    <div id="rptasset3" style="margin-bottom: 12px;"></div>
                                    <font size='3' color="#2d3194"><b>Tổng tài sản thực</b></font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

                <div class="detailed-property">
                    <div class="box-header">
                        <p
                            style="margin-left:0px;font-size:14pt;color:#ff0000; text-transform: uppercase; font-weight: bold;">
                            Danh sách chi tiết tài sản</p>
                        <div class="box-tools" style="right: 0;">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('cashassets-process', ['assetstatustype' => 3]) }}"
                                    class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Nợ</a>
                                <a href="{{ route('cashassets-process', ['assetstatustype' => 4]) }}"
                                    class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i> Tài sản</a>
                                <button class="btn btn-danger" onclick="processReports('frm', 'modify')">Điều chỉnh tài
                                    sản</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="1%" rowspan='2'></th>
                                    <th style="text-align: center;vertical-align: middle;" rowspan='2'
                                        class="text-nowrap" width="1%">STT</th>
                                    <th style="text-align: center;vertical-align: middle;" rowspan='2'
                                        class="text-nowrap" width="20%">TÀI SẢN</th>
                                    <th style="text-align: center;vertical-align: middle;" rowspan='2'
                                        class="text-nowrap" width="15%">LOẠI</th>
                                    <th style="text-align: center;vertical-align: middle;" rowspan='2'
                                        class="text-nowrap" width="15%">CHI TIẾT</th>
                                    <th style="text-align: center;vertical-align: middle;" rowspan='2'
                                        class="text-nowrap">NGÀY</th>
                                    <th style="text-align: center;vertical-align: middle;" colspan='2'
                                        class="text-nowrap">TÀI SẢN</th>
                                    <th style="text-align: center;vertical-align: middle;" rowspan='2' width="10%">CHỨC
                                        NĂNG</th>
                                </tr>
                                <tr>
                                    <th style="text-align: center;" class="text-nowrap">NỢ</th>
                                    <th style="text-align: center;" class="text-nowrap">CÓ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($collections->count() === 0)
                                <tr>
                                    <td colspan="7"><b>Không có dữ liệu!!!</b></td>
                                </tr>
                                @endif
                                @php
                                $i = 1;
                                $total_asset = 0; $total_expense = 0;
                                @endphp
                                @foreach ($collections as $cashasset)
                                @php
                                if($cashasset->assetstatustype == 3){
                                $total_asset += $cashasset->remainamount;
                                }elseif($cashasset->assetstatustype == 4){
                                $total_expense += $cashasset->remainamount;
                                }
                                @endphp
                                <tr class="table-cashasset">
                                    <td>
                                        <label>
                                            <input type="checkbox" name="assetid" value="{{ $cashasset->id }}"
                                                onclick="selectOnlyThis(this)">
                                        </label>
                                    </td>
                                    <td style="text-align: center;" class="text-nowrap">{{ $i++ }}</td>
                                    <td style="text-align: left;" class="text-nowrap">{{ $cashasset->assetname }}
                                        &nbsp;&nbsp;&nbsp;
                                        @if ($cashasset->document != '')
                                        <a style="color: #1b1464;" target="_blank"
                                            href="{{ $pathdocument . $cashasset->document }}"
                                            title='Hình ảnh, hóa đơn, chứng từ ...'><i class="fa fa-paperclip"
                                                style="margin-right: 10px;"></i></a>
                                        @endif
                                        <br>Số tiền: {{ formatNumber($cashasset->amount, 1, 0, 1) }}
                                    </td>
                                    <td style="text-align: left;" class="text-nowrap">{{ $cashasset->config_types_name
                                        }}</td>
                                    <td style="text-align: left;" class="text-nowrap">{{
                                        $cashasset->config_type_details_name }}</td>
                                    <td style="text-align: center;" class="text-nowrap">{{ $cashasset->assetdate == null
                                        ? "" : ConvertSQLDate($cashasset->assetdate) }}</td>
                                    @if ($cashasset->assetstatustype == 3)
                                    <td style="text-align: right;" class="text-nowrap">{!!
                                        formatNumberColorCustom($cashasset->remainamount, 1, 0, 0, 1) !!}</td>
                                    <td style="text-align: right;" class="text-nowrap"></td>
                                    @elseif($cashasset->assetstatustype == 4)
                                    <td style="text-align: right;" class="text-nowrap"></td>
                                    <td style="text-align: right;" class="text-nowrap">{!!
                                        formatNumberColorCustom($cashasset->remainamount, 1, 0, 0, 0) !!}</td>
                                    @endif
                                    <td style="text-align: center;" class="text-nowrap">
                                        <a style="color: #1b1464;"
                                            href="{{ route('cashassets-edit',['id'=> $cashasset->id]) }}" title='Sửa'><i
                                                class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a>
                                        <a style="color: #1b1464;" href="javascript:void(0)"
                                            data-id="{{ $cashasset->id }}" class="btn-delete" title='Xóa'><i
                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                        <form name="form-delete-{{ $cashasset->id }}" method="post"
                                            action="{{ route('cashassets-delete', ['id' => $cashasset->id ]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                @foreach ($listaccounts as $cashasset)
                                @php
                                $total_expense += $cashasset->amount;

                                $requireamount = 0; $cashname = "Ví mục tiêu";
                                if($cashasset->accountno == $primaryaccount){
                                $requireamount = $cashasset->amount;
                                $cashname = "Ví tổng";
                                }else{
                                $requireamount = $cashasset->requireamount;
                                $cashname = "Ví mục tiêu";
                                }
                                @endphp
                                <tr class="table-cashasset">
                                    <td></td>
                                    <td style="text-align: center;" class="text-nowrap">{{ $i++ }}</td>
                                    <td style="text-align: left;" class="text-nowrap">{{ $cashasset->accountname }}
                                        &nbsp;&nbsp;&nbsp;
                                        <br>Số tiền: {{ formatNumber($requireamount, 1, 0, 1) }}
                                    </td>
                                    <td style="text-align: left;" class="text-nowrap">{{ $cashname }}</td>
                                    <td style="text-align: left;" class="text-nowrap">Mã ví {{ $cashasset->accountno
                                        }} </td>
                                    <td style="text-align: center;" class="text-nowrap">{{ $cashasset->accountdate ==
                                        null ? "" : ConvertSQLDate($cashasset->accountdate) }}</td>
                                    <td style="text-align: right;" class="text-nowrap"></td>
                                    <td style="text-align: right;" class="text-nowrap">{!!
                                        formatNumberColorCustom($cashasset->amount, 1, 0, 0, 0) !!}</td>
                                    <td style="text-align: center;" class="text-nowrap">
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th style="text-align: left; border-left: 1px solid #a6a6a6;" colspan='6'
                                        class="text-nowrap">TỔNG CỘNG</th>
                                    <th style="text-align: right;" class="text-nowrap">{!!
                                        formatNumberColorCustom($total_asset, 1, 0, 0, 1) !!}</th>
                                    <th style="text-align: right;" class="text-nowrap">{!!
                                        formatNumberColorCustom($total_expense, 1, 0, 0, 0) !!}</th>
                                    <th></th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix text-right">
                        {{ $collections->links() }}
                    </div>
                </div>

                <p style="margin-left:10px;font-size:14pt;color:#ff0000; text-transform: uppercase; font-weight: bold;">
                    Tổng quan về tài sản</p>

                <div class="row">
                    <div class="col-md-3 col-xs-6" style="text-align: center;">
                        <img src="{{ asset('img/saving-2.png') }}" width="50" height="50">
                        <p style="font-size:12pt; margin-top: 10px; color: #1b1464;"><b>TỔNG NỢ</b></p>
                        <p style="font-size:12pt;font-weight: bold;">{{ formatNumber($total_asset, 1, 0, 1) }}</p>
                    </div>
                    <div class="col-md-3 col-xs-6" style="text-align: center;">
                        <img src="{{ asset('img/cash-personal-3.png') }}" width="50" height="50">
                        <p style="font-size:12pt; margin-top: 10px; color: #1b1464;"><b>TỔNG TÀI SẢN</b></p>
                        <p style="font-size:12pt;font-weight: bold;">{{ formatNumber($total_expense, 1, 0, 1) }}</p>
                    </div>
                    <div class="col-md-3 col-xs-6" style="text-align: center;">
                        <img src="{{ asset('img/cash-personal-2.png') }}" width="50" height="50">
                        <p style="font-size:12pt; margin-top: 10px; color: #1b1464;"><b>TỈ LỆ NỢ/TÀI SẢN</b></p>
                        <p style="font-size:12pt;font-weight: bold;">{{ ($total_expense == 0 ? 0 :
                            formatNumber(($total_asset/$total_expense)*100, 1, 0, 1)) }} %</p>
                    </div>
                    <div class="col-md-3 col-xs-6" style="text-align: center;">
                        <img src="{{ asset('img/saving-1.png') }}" width="50" height="50">
                        <p style="font-size:12pt; margin-top: 10px; color: #1b1464;"><b>TỔNG TÀI SẢN THỰC</b></p>
                        <p style="font-size:12pt;font-weight: bold;">{{ formatNumber($total_expense-$total_asset, 1, 0,
                            1) }}</p>
                    </div>
                </div>

                <br><br>
            </div>
            <!-- /.box -->
        </div>
    </form>
</div> --}}
@endsection

@section('scripts')
  @include('product-manage.cashasset.partials.script')
@endsection
