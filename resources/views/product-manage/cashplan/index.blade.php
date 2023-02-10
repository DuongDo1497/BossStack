@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/cashplan.css') }}">

  {{--
<link rel="stylesheet" href="{{ asset('css/pages/products.css') }}">

<style type="text/css">
  .table-cashplan tbody tr td {
    white-space: nowrap !important;
  }

  .table-cashplan tbody tr td:last-child a {
    margin-right: 10px;
  }

  .table-cashplan tbody tr td:last-child a.btn-delete {
    margin-right: 0;
  }

  .table-cashplan tfoot tr td {
    border: 1px solid #a6a6a6;
  }

  @media only screen and (min-width: 769px) and (max-width: 1024px) {
    .box-body {
      overflow-x: auto
    }

    /*.table-cashplan{
            width: 1500px;
        }*/

    .table-cashplan tbody tr td:last-child a {
      margin-right: 10px;
    }
  }

  @media only screen and (max-width: 768px) {
    .box .box-header .box-tools {
      right: 0;
    }

    .box .box-body {
      overflow-x: auto;
    }

    .box .box-body table {
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
    @include('layouts.partials.messages.infor')
  @endif

  <form role="form" action="{{ route('cashplans-index') }}?continue=true" method="post" name="frm" id="frm">
    {{ csrf_field() }}
    <input type='hidden' name='typereport' value=''>

    <div class="section cashplan-index">
      <div class="breadcrumb">
        <span>Quản lý tài khoản</span> / <span class="current">Thiết lập dòng tiền</span>
      </div>
      <p class="title-page">{{ $title->heading }}</p>
      <div class="box-content">
        <div class="box box-primary">
          <div class="noti-index">
            <div class="noti-index__wrap">
              <div class="noti-index__item">
                <p class="title">Số dòng tiền:</p>
                <p class="number">{{ $collections->count() }}</p>
              </div>
              <div class="noti-index__item">
                <p class="title">Tổng số tiền mục tiêu:</p>
                <p class="number">{!! formatNumberColor($collections->sum('requireamount'), 1, 0, 0) !!}</p>
              </div>
              <div class="noti-index__item">
                <p class="title">Tổng số tiền đang thực hiện:</p>
                <p class="number">{!! formatNumberColor($collections->sum('amount'), 1, 0, 1) !!}</p>
              </div>
              <div class="noti-index__item">
                <p class="title">Tổng số tiền còn lại:</p>
                <p class="number">
                  {!! formatNumberColor($collections->sum('requireamount') - $collections->sum('amount'), 1, 0, 1) !!}
                </p>
              </div>
            </div>
          </div>

          <a href="{{ route('cashplans-processAdd', ['incomestatustype' => 5]) }}" class="btn btn-primary btn-add text">
            <img src="{{ asset('img/icon-add-w.svg') }}" alt="">
            Thêm dòng tiền
          </a>

          <div class="box-search">
            <div class="filter-timeline">
              <div class="form-row">
                <div class="form-group">
                  <label for="status">Lọc dòng tiền theo</label>
                  <select class="form-control select2" name="incometype" onchange="processReports('frm', 'selectstatus')">
                    <option value="">Chọn phân loại</option>
                    @foreach ($incometypes as $item)
                      @if ($incometype != '' and $item->id == $incometype)
                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                      @else
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <select class="form-control select2" name="selectaccountstatustype"
                    onchange="processReports('frm', 'selectstatus')">
                    <option value="">Chọn trạng thái</option>
                    @foreach ($accountstatustype as $key => $value)
                      @if ($selectaccountstatustype != '' and $key == $selectaccountstatustype)
                        <option value="{{ $key }}" selected>{{ $value }}</option>
                      @else
                        <option value="{{ $key }}">{{ $value }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="table-wrap">
            <div class="table-content">
              <table class="table table-bordered table-list">
                <thead>
                  <tr>
                    <th class="text-center fixed fixed-1">
                      <input name="allbox" type="checkbox" id="allbox" onclick="CheckAll(this)">
                    </th>
                    <th class="fixed fixed-2">STT</th>
                    <th class="fixed fixed-3">Tên dòng tiền</th>
                    <th style="width: 10%;">Phân loại</th>
                    <th>Mục tiêu</th>
                    <th>Ngày lập</th>
                    <th>Số tuổi đạt mục tiêu</th>
                    <th>Số tiền mục tiêu</th>
                    <th>Đang thực hiện</th>
                    <th>Còn lại</th>
                    <th>Trạng thái</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($collections->count() === 0)
                    <tr>
                      <td colspan="11"><b>Không có dữ liệu!!!</b></td>
                    </tr>
                  @endif
                  @php
                    $i = 1;
                  @endphp
                  @foreach ($collections as $cashplan)
                    <tr>
                      <td class="text-center fixed fixed-1">
                        <input type='checkbox' name='ids[]' id='ids[]' value="{{ $cashplan->id }}"
                          onclick="CheckId(this)">
                      </td>
                      <td class="text-center fixed fixed-2">{{ $i++ }}</td>
                      <td class="fixed fixed-3">
                        <a
                          href="{{ route('cashplans-analysis', ['id' => $cashplan->id]) }}">{{ $cashplan->description }}</a>
                        @if ($cashplan->document != '')
                          <a style="color: #1b1464;" target="_blank" href="{{ $pathdocument . $cashplan->document }}"
                            title='Hình ảnh, hóa đơn, chứng từ ...'><i class="fa fa-paperclip"
                              style="margin-right: 10px;"></i></a>
                        @endif
                      </td>
                      <td class="text-left">{{ $cashplan->name }}</td>
                      <td class="text-left">{{ $cashplan->config_type_details_name }}</td>
                      <td class="text-center">
                        {{ $cashplan->plandate == null ? '' : ConvertSQLDate($cashplan->plandate) }}</td>
                      <td class="text-center">{{ formatNumber($cashplan->planage, 1, 0, 0) }}</td>
                      <td class="text-right">{!! formatNumberColor($cashplan->requireamount, 1, 0, 0) !!}</td>
                      <td class="text-right">{!! formatNumberColor($cashplan->amount, 1, 0, 1) !!}</td>
                      <td class="text-right">{!! formatNumberColor($cashplan->requireamount - $cashplan->amount, 1, 0, 1) !!}</td>
                      <td class="text-center">
                        @if ($cashplan->finish == 1)
                          <div class="status status-error">{{ $accountstatustype[$cashplan->finish] }}
                          </div>
                        @else
                          <div class="status status-success">{{ $accountstatustype[$cashplan->finish] }}
                          </div>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

          <div class="box-control">
            <div class="control">
              <p class="count"><span id="checklabel">0</span></p>
              <p class="text">Ví tài chính đang được chọn</p>
              <a href="javascript:processDeleteReports('frm', 'delete')" class="btn btn-gray btn-delete">
                <img src="{{ asset('img/icon-delete.svg') }}" alt="">
              </a>
            </div>
            <div class="paging">
              {{ $collections->links() }}
            </div>
          </div>
          <div class="note-content">
            <p>* Một số lưu ý khi thao tác :</p>
            <p>- Bạn có thể thiết lập, chỉnh sửa và xem lại các dòng tiền sau khi lập.
            </p>
            <p>- Số dư hiện có trong dòng tiền sẽ mặc định được chuyển về ví tổng sau
              khi bạn thực hiện thao tác xóa dòng tiền.</p>
          </div>
        </div>
      </div>

    </div>
  </form>
  {{-- <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <p style="margin-left:5px;margin-top:10px;font-size:11pt;">
        Chức năng quản lý các ví tài chính của phần mềm BossStack Coaching là công cụ hữu ích để hỗ trợ bạn đánh giá
        và xem lại việc quản lý tài chính của mình.
      </p>

      <div class="row" style="padding: 10px 0;">
        <div class="col-lg-2 col-md-6 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <table style="width: 100%;">
                <tbody>
                  <tr>
                    <td style="text-align: left; font-size: 16px; color: #312f90;" class="text-nowrap"><b>SỐ VÍ MỤC
                        TIÊU:</b></td>
                    <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b>{{
                        $collections->count() }}</b></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <table style="width: 100%;">
                <tbody>
                  <tr>
                    <td style="text-align: left; font-size: 16px; color: #312f90;" class="text-nowrap"><b>TỔNG SỐ TIỀN
                        MỤC TIÊU:</b></td>
                    <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b>{!!
                        formatNumberColor($collections->sum('requireamount'), 1, 0, 0) !!}</b></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <table style="width: 100%;">
                <tbody>
                  <tr>
                    <td style="text-align: left; font-size: 16px; color: #312f90;" class="text-nowrap"><b>TỔNG SỐ TIỀN
                        ĐANG THỰC HIỆN:</b></td>
                    <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b>{!!
                        formatNumberColor($collections->sum('amount'), 1, 0, 1) !!}</b></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <table style="width: 100%;">
                <tbody>
                  <tr>
                    <td style="text-align: left; font-size: 16px; color: #312f90;" class="text-nowrap"><b>TỔNG SỐ TIỀN
                        CÒN LẠI:</b></td>
                    <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b>{!!
                        formatNumberColor(($collections->sum('requireamount')-$collections->sum('amount')), 1, 0, 1)
                        !!}</b></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="box-header">
        <h3 class="box-title">&nbsp;</h3>
        <div class="box-tools">
          <div class="btn-group btn-group-sm">
            <a href="{{ route('cashplans-add') }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>
              Thêm ví mục tiêu</a>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <table class="table table-hover table-cashplan">
          <thead>
            <tr>
              <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
              <th style="text-align: center;" class="text-nowrap" width="10%">KẾ HOẠCH</th>
              <th style="text-align: center;" class="text-nowrap" width="10%">VÍ MỤC TIÊU</th>
              <th style="text-align: center;" width="6%" class="text-nowrap">NGÀY LẬP</th>
              <th style="text-align: center;" width="7%" class="text-nowrap">SỐ TUỔI <br> HIỆN TẠI</th>
              <th style="text-align: center;" width="7%" class="text-nowrap">SỐ TUỔI ĐẠT <br> MỤC TIÊU</th>
              <th style="text-align: center;" width="5%" class="text-nowrap">SỐ TIỀN <br> MỤC TIÊU</th>
              <th style="text-align: center;" width="7%" class="text-nowrap">ĐANG THỰC HIỆN</th>
              <th style="text-align: center;" width="5%" class="text-nowrap">CÒN LẠI</th>
              <th style="text-align: center;" width="5%" class="text-nowrap">TRẠNG THÁI</th>
              <th style="text-align: center;" width="6%">CHỨC NĂNG</th>
            </tr>
          </thead>
          <tbody>
            @if ($collections->count() === 0)
            <tr>
              <td colspan="9"><b>Không có dữ liệu!!!</b></td>
            </tr>
            @endif
            @php
            $i = 1;
            @endphp
            @foreach ($collections as $cashplan)
            <tr>
              <td style="text-align: center;" class="text-nowrap">{{ $i++ }}</td>
              <td style="text-align: left;">{{ $cashplan->description }} &nbsp;&nbsp;&nbsp;
                @if ($cashplan->document != '')
                <a style="color: #1b1464;" target="_blank" href="{{ $pathdocument . $cashplan->document }}"
                  title='Hình ảnh, hóa đơn, chứng từ ...'><i class="fa fa-paperclip"
                    style="margin-right: 10px;"></i></a>
                @endif
              </td>
              <td style="text-align: left;" class="text-nowrap">{{ $plantypes[$cashplan->plantype] }}</td>
              <td style="text-align: center;" class="text-nowrap">{{ $cashplan->plandate == null ? "" :
                ConvertSQLDate($cashplan->plandate) }}</td>
              <td style="text-align: center;" class="text-nowrap">{{ formatNumber($cashplan->currentage, 1, 0, 0) }}
              </td>
              <td style="text-align: center;" class="text-nowrap">{{ formatNumber($cashplan->planage, 1, 0, 0) }}</td>
              <td style="text-align: right;" class="text-nowrap">{!! formatNumberColor($cashplan->requireamount, 1, 0,
                0) !!}</td>
              <td style="text-align: right;" class="text-nowrap">{!! formatNumberColor($cashplan->amount, 1, 0, 1) !!}
              </td>
              <td style="text-align: right;" class="text-nowrap">{!!
                formatNumberColor(($cashplan->requireamount-$cashplan->amount), 1, 0, 1) !!}</td>
              <td style="text-align: center;">
                @if ($cashplan->finish == 1)
                <b class="alert-danger text-nowrap">{{ $accountstatustype[$cashplan->finish] }}</b>
                @else
                <b class="alert-success text-nowrap">{{ $accountstatustype[$cashplan->finish] }}</b>
                @endif
              </td>
              <td style="text-align: center;" class="text-nowrap">
                <a style="color: #1b1464;" href="{{ route('cashplans-analysis',['id'=> $cashplan->id]) }}"
                  title='Phân tích'><i class="fa fa-line-chart"></i></a>
                @if ($cashplan->finish != 1)
                <a style="color: #1b1464;" href="javascript:void(0)" data-id="{{ $cashplan->id }}" class="btn-delete"
                  title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                <form name="form-delete-{{ $cashplan->id }}" method="post"
                  action="{{ route('cashplans-delete', ['id' => $cashplan->id ]) }}">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                </form>
                @endif

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix text-right">
        {{ $collections->links() }}
      </div>
      <p style="margin-left:5px;margin-top:0px;margin-bottom:10px;font-size:11pt;">
        <font color='#ff0000'><u>Một số lưu ý khi thao tác : </u></font><br>
        - Bạn có thể thiết lập, chỉnh sửa và xem lại các ví tài chính sau khi lập.<br>
        - Số dư hiện có trong ví tài chính sẽ mặc định được chuyển về ví tổng sau khi bạn thực hiện
        thao tác xóa ví tài chính.<br><br>
      </p>
    </div>
    <!-- /.box -->
  </div>
</div>

<a href="{{ route('cash-index') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a> --}}
@endsection

@section('scripts')
  @include('product-manage.cashplan.partials.script')
@endsection
