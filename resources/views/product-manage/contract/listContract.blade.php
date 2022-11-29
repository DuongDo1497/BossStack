@extends('layouts.master')

@section('head')
  {{-- <style type="text/css">
    @media only screen and (max-width: 768px) {
      .box .box-body {
        overflow-x: auto;
      }

      .box .box-body table {
        width: 1000px;
      }

      .table-contract tbody tr td {
        white-space: nowrap !important;
      }
    }
  </style> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section listContractQueue">
    <div class="breadcrumb">
      <span>Dịch vụ</span> / <span class="current">Đang chờ duyệt</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <table class="table table-bordered table-list">
          <thead>
            <tr>
              <th>
                <input type="checkbox" name="" id="">
              </th>
              <th>STT</th>
              <th>Mã đơn hàng</th>
              <th>Tên dịch vụ</th>
              <th>Thời gian tạo</th>
              <th>Thanh toán</th>
              <th>Tình trạng</th>
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
            @endphp
            @foreach ($collections as $contract)
              <tr>
                <td>
                  <input type="checkbox" name="" id="">
                </td>
                <td class="text-center">{{ $i++ }}</td>
                <td>{{ $contract->contractno }}</td>
                <td>
                  <ul>
                    <li><b>Gói:</b> {{ $contract->service_product_name }}
                      ({{ formatNumber($contract->service_product_price, 1, 0, 1) }} đồng/tháng)
                    </li>
                    <li><b>Thời hạn:</b> {{ formatNumber($contract->term, 1, 0, 1) }} tháng, giảm
                      {{ formatNumber($contract->discount, 1, 0, 1) }} %</li>
                    <li><b>Số tiền:</b> {{ formatNumber($contract->amount, 1, 0, 1) }} đồng</li>
                    <li><b>Thời gian từ:</b>
                      {{ $contract->contractdate == null ? '' : ConvertSQLDate($contract->contractdate) }}
                      -
                      {{ ($contract->lastcontractdate == null or $contract->contractdate == $contract->lastcontractdate) ? 'Không thời hạn' : ConvertSQLDate($contract->lastcontractdate) }}
                    </li>
                  </ul>
                </td>
                <td class="text-center">
                  {{ $contract->created_at == null ? '' : ConvertSQLDate($contract->created_at, 1) }}
                </td>
                <td class="text-center">
                  @if ($contract->service_product_price != 0)
                    @if ($contract->payment == null or $contract->payment == '0')
                      <div class="status status-error">{{ $paymenttype[0] }}</div>
                    @elseif($contract->payment == '1')
                      <div class="status status-success">{{ $paymenttype[1] }}</div>
                    @endif
                  @endif
                </td>
                <td class="text-center">
                  @if ($contract->contractstatustype == 1)
                    <div class="status status-warning">
                      {{ $contractstatustype[$contract->contractstatustype] }}</div>
                  @elseif($contract->contractstatustype == 2)
                    <div class="status status-success">
                      {{ $contractstatustype[$contract->contractstatustype] }}</div>
                  @else
                    <div class="status status-error">
                      {{ $contractstatustype[$contract->contractstatustype] }}</div>
                  @endif
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="box-control">
          <div class="control">
            <p class="count">4</p>
            <p class="text">Hàng tài chính đang được chọn</p>
            <a href="#" class="btn btn-delete">
              <img src="{{ asset('img/icon-delete.svg') }}" alt="">
              Xóa
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
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-home" aria-hidden="true"></i> / {{ $title->sub_heading }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-hover table-contract">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
                            <th style="text-align: center;" class="text-nowrap">MÃ ĐƠN HÀNG</th>
                            <th style="text-align: center;" class="text-nowrap">TÊN DỊCH VỤ</th>
                            <th style="text-align: center;" class="text-nowrap">THỜI GIAN TẠO</th>
                            <th style="text-align: center;" class="text-nowrap">THANH TOÁN</th>
                            <th style="text-align: center;" class="text-nowrap">TÌNH TRẠNG</th>
                            <th style="text-align: center;" width="10%">THAO TÁC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($collections->count() === 0)
                        <tr>
                            <td colspan="7"><b>Không có dữ liệu!!!</b></td>
                        </tr>
                        @endif
                        @php
                            $i = 1
                        @endphp                        
                        @foreach ($collections as $contract)
                            <tr>
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap">{{ $i++ }}</td>
                                <td style="text-align: left; vertical-align: middle;" class="text-nowrap">{{ $contract->contractno }}</td>
                                <td style="text-align: left; vertical-align: middle;" class="text-nowrap">
                                        - <b>Gói</b>: {{ $contract->service_product_name }} ({{ formatNumber($contract->service_product_price, 1, 0, 1) }} đồng/tháng)<br>        
                                        - <b>Thời hạn</b>: {{ formatNumber($contract->term, 1, 0, 1) }} tháng, giảm {{ formatNumber($contract->discount, 1, 0, 1) }} %<br>
                                        - <b>Số tiền</b>: {{ formatNumber($contract->amount, 1, 0, 1) }} đồng<br>
                                        - <b>Thời hạn từ</b>: {{ $contract->contractdate == null ? "" : ConvertSQLDate($contract->contractdate) }} - {{ ($contract->lastcontractdate == null or $contract->contractdate == $contract->lastcontractdate) ? "Không thời hạn" : ConvertSQLDate($contract->lastcontractdate) }}<br>
                                </td>
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap">{{ $contract->created_at == null ? "" : ConvertSQLDate($contract->created_at, 1) }}</b></td>
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap">
                                    @if ($contract->service_product_price != 0)
                                        @if ($contract->payment == null or $contract->payment == '0')
                                            <b class="alert-danger">{{ $paymenttype[0] }}</b>        
                                        @elseif($contract->payment == '1')
                                            <b class="alert-success">{{ $paymenttype[1] }}</b>        
                                        @endif  
                                    @endif 
                                </td>
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap">
                                    @if ($contract->contractstatustype == 1)
                                        <b class="alert-warning">{{ $contractstatustype[$contract->contractstatustype] }}</b>        
                                    @elseif($contract->contractstatustype == 2)
                                        <b class="alert-success">{{ $contractstatustype[$contract->contractstatustype] }}</b>        
                                    @else 
                                        <b class="alert-danger">{{ $contractstatustype[$contract->contractstatustype] }}</b>        
                                    @endif 
                                </td>
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap">
                                    <a style="color: #1b1464;" href="{{ route('contracts-detailContract',['id'=> $contract->id]) }}" title='Xem chi tiết'><i class="fa fa-bars" style="margin-right: 10px;"></i></a> 
                                    @if ($contract->approvestatustype != 'A')
                                        <a style="color: #1b1464;" href="javascript:void(0)" data-id="{{ $contract->id }}" class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <form name="form-delete-{{ $contract->id }}" method="post" action="{{ route('contracts-deleteContract', ['id' => $contract->id ]) }}">
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
        </div>
        <!-- /.box -->
    </div>
</div>

<hr>
<a href="{{ route('dashboard') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>    --}}
@endsection

@section('scripts')
  @include('product-manage.contract.partials.script')
@endsection
