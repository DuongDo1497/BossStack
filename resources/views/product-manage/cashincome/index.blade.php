@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/cashincome.css') }}">

  {{--
<link rel="stylesheet" href="{{ asset('css/pages/products.css') }}">

<style type="text/css">
    @media only screen and (max-width: 768px) {
        .box-body {
            overflow-x: auto;
        }

        .box-body>.table {
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
    @if (isset($checkError) and $checkError == 1)
      @include('layouts.partials.messages.warning')
    @else
      @include('layouts.partials.messages.infor')
    @endif
  @endif

  <div class="section cashincome-index">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <span>Thu chi ví tổng</span> / <span class="current">Quản lý Thu nhập/Chi
        phí</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="noti-index">
          <div class="noti-index__wrap">
            <div class="noti-index__item">
              <p class="title">Số ví tài chính:</p>
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
        <div class="box-search">
          <div class="control">
            <a href="{{ route('cashtranfers-add') }}" class="btn btn-gray btn-transfer">
              <img class="icon" src="{{ asset('img/icon-transfer.svg') }}" alt="">
              Phân bổ
            </a>
            <a href="{{ route('cashincomes-process', ['incomestatustype' => 0]) }}" class="btn btn-gray btn-income">
              <img class="icon" src="{{ asset('img/icon-add.svg') }}" alt="">
              Thu nhập
            </a>
            <a href="{{ route('cashincomes-process', ['incomestatustype' => 1]) }}" class="btn btn-gray btn-cost">
              <img class="icon" src="{{ asset('img/icon-add.svg') }}" alt="">
              Chi phí
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
                  <th rowspan="2" class="fixed fixed-3">Phân loại</th>
                  <th rowspan="2">Chi tiết</th>
                  <th rowspan="2">Nội dung</th>
                  <th rowspan="2">Ngày</th>
                  <th colspan="2">Số tiền</th>
                </tr>
                <tr>
                  <th class="draft"></th>
                  <th class="draft"></th>
                  <th>Thu nhập</th>
                  <th>Chi phí</th>
                </tr>
              </thead>
              <tbody>
                @if ($collections->count() === 0)
                  <tr>
                    <td colspan="8"><b>Không có dữ liệu!!!</b></td>
                  </tr>
                @endif
                @php
                  $i = 1;
                  $total_income = 0;
                  $total_expense = 0;
                @endphp
                @foreach ($collections as $cashincome)
                  @php
                    if ($cashincome->incomestatustype == 0) {
                        $total_income += $cashincome->amount;
                    } elseif ($cashincome->incomestatustype == 1) {
                        $total_expense += $cashincome->amount;
                    } elseif ($cashincome->incomestatustype == 2) {
                        $total_expense += $cashincome->amount;
                    }
                  @endphp
                  <tr>
                    <td class="text-center fixed fixed-1">
                      <input type="checkbox" name="" id="">
                    </td>
                    <td class="text-center fixed fixed-2">{{ $i++ }}</td>
                    <td class="fixed fixed-3">
                      {{ $cashincome->config_types_name }}
                      @if ($cashincome->document != '')
                        <a target="_blank" href="{{ $pathdocument . $cashincome->document }}"
                          title='Hình ảnh, hóa đơn, chứng từ ...'><i class="fa fa-paperclip"></i></a>
                      @endif
                    </td>
                    <td><a
                        href="{{ route('cashincomes-edit', ['id' => $cashincome->id]) }}">{{ $cashincome->config_type_details_name }}</a>
                    </td>
                    <td class="text-center">{{ $cashincome->assetname }}</td>
                    <td class="text-center">
                      {{ $cashincome->incomedate == null ? '' : ConvertSQLDate($cashincome->incomedate) }}
                    </td>
                    @if ($cashincome->incomestatustype == 0)
                      <td class="text-right">{!! formatNumberColorCustom($cashincome->amount, 1, 0, 0, 0) !!}</td>
                      <td class="text-right"></td>
                    @elseif($cashincome->incomestatustype == 1 or $cashincome->incomestatustype == 2)
                      <td class="text-right"></td>
                      <td class="text-right">{!! formatNumberColorCustom($cashincome->amount, 1, 0, 0, 3) !!}</td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
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
          </div>
          <div class="paging">
            {{ $collections->links() }}
          </div>
        </div>
        <div class="note-content">
          <p>* Một số lưu ý khi thao tác :</p>
          <p>- Bạn có thể thiết lập, chỉnh sửa và xem lại các ví tài chính sau khi lập.
          </p>
          <p>- Số dư hiện có trong ví tài chính sẽ mặc định được chuyển về ví tổng sau
            khi bạn thực hiện thao tác xóa ví tài chính.</p>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
                <div class="box-tools" style="right: 0;">
                    <div class="btn-group btn-group-sm">
                        <a href="{{ route('cashtranfers-add') }}" class="btn btn-primary"><i class="fa fa-refresh"
                                aria-hidden="true"></i> Chuyển tiền</a>
                        <a href="{{ route('cashincomes-process', ['incomestatustype' => 0]) }}"
                            class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thu nhập</a>
                        <a href="{{ route('cashincomes-process', ['incomestatustype' => 1]) }}"
                            class="btn btn-danger"><i class="fa fa-plus" aria-hidden="true"></i> Chi phí</a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <font style="font-weight: bold;font-size:12pt;">&nbsp;Số dư ví tổng: &nbsp;{!!
                    formatNumberColorCustom($cashaccount_amount, 1, 0, 0, 0) !!}</font><br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2'
                                class="text-nowrap" width="1%">STT</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2'
                                class="text-nowrap" width="15%">LOẠI</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2'
                                class="text-nowrap" width="15%">CHI TIẾT</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2'
                                class="text-nowrap" width="15%">NỘI DUNG</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2'
                                class="text-nowrap" width="15%">NGÀY</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" colspan='2'
                                class="text-nowrap" width="30%">SỐ TIỀN</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2'
                                class="text-nowrap" width="9%">CHỨC NĂNG</th>
                        </tr>
                        <tr>
                            <th style="text-align: center; color: #2d3194;" class="text-nowrap" width="15%">THU NHẬP
                            </th>
                            <th style="text-align: center; color: #2d3194;" class="text-nowrap" width="15%">CHI PHÍ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($collections->count() === 0)
                        <tr>
                            <td colspan="8"><b>Không có dữ liệu!!!</b></td>
                        </tr>
                        @endif
                        @php
                        $i = 1;
                        $total_income = 0; $total_expense = 0;
                        @endphp
                        @foreach ($collections as $cashincome)
                        @php
                        if($cashincome->incomestatustype == 0){
                        $total_income += $cashincome->amount;
                        }elseif($cashincome->incomestatustype == 1){
                        $total_expense += $cashincome->amount;
                        }elseif($cashincome->incomestatustype == 2){
                        $total_expense += $cashincome->amount;
                        }
                        @endphp
                        <tr class="table-cashincome">
                            <td style="text-align: center;" class="text-nowrap">{{ $i++ }}</td>
                            <td style="text-align: left;" class="text-nowrap">{{ $cashincome->config_types_name }}
                                &nbsp;&nbsp;&nbsp;
                                @if ($cashincome->document != '')
                                <a target="_blank" href="{{ $pathdocument . $cashincome->document }}"
                                    title='Hình ảnh, hóa đơn, chứng từ ...'><i class="fa fa-paperclip"></i></a>
                                @endif
                            </td>
                            <td style="text-align: left;" class="text-nowrap">{{ $cashincome->config_type_details_name
                                }}</td>
                            <td style="text-align: left;" class="text-nowrap">{{ $cashincome->assetname }}</td>
                            <td style="text-align: center;" class="text-nowrap">{{ $cashincome->incomedate == null ? ""
                                : ConvertSQLDate($cashincome->incomedate) }}</td>
                            @if ($cashincome->incomestatustype == 0)
                            <td style="text-align: right;" class="text-nowrap">{!!
                                formatNumberColorCustom($cashincome->amount, 1, 0, 0, 0) !!}</td>
                            <td style="text-align: right;" class="text-nowrap"></td>
                            @elseif($cashincome->incomestatustype == 1 or $cashincome->incomestatustype == 2)
                            <td style="text-align: right;" class="text-nowrap"></td>
                            <td style="text-align: right;" class="text-nowrap">{!!
                                formatNumberColorCustom($cashincome->amount, 1, 0, 0, 1) !!}</td>
                            @endif
                            <td style="text-align: center;" class="text-nowrap">
                                <a style="color: #1b1464;"
                                    href="{{ route('cashincomes-edit',['id'=> $cashincome->id]) }}" title='Sửa'><i
                                        class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a>
                                <a style="color: #1b1464;" href="javascript:void(0)" data-id="{{ $cashincome->id }}"
                                    class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                <form name="form-delete-{{ $cashincome->id }}" method="post"
                                    action="{{ route('cashincomes-delete', ['id' => $cashincome->id ]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        <tr>
                            <th style="text-align: left; border-left: 1px solid #a6a6a6;" colspan='5'
                                class="text-nowrap">TỔNG CỘNG</th>
                            <th style="text-align: right;" class="text-nowrap">{!!
                                formatNumberColorCustom($total_income, 1, 0, 0, 0) !!}</th>
                            <th style="text-align: right;" class="text-nowrap">{!!
                                formatNumberColorCustom($total_expense, 1, 0, 0, 1) !!}</th>
                            <th style="text-align: left; border-left: 1px solid #a6a6a6;" class="text-nowrap"></th>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix text-right">
                {{ $collections->links() }}
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>

<a href="{{ route('cash-index') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a> --}}
@endsection

@section('scripts')
  @include('product-manage.cashincome.partials.script')
@endsection
