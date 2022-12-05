@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/contract.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section contract-detail">
    <div class="breadcrumb">
      <span>Thông tin tài khoản</span> / <span class="current">{{ $title->sub_heading }}</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('contracts-update', ['id' => $model->id]) }}?continue=true" method="post"
      id="contract-form">
      {{ csrf_field() }}
      {{ method_field('put') }}
      <input type='hidden' name='typereport' value=''>
      <div class="box-content">
        <div class="box box-primary">
          <h6 class="box-title">Thông tin dịch vụ</h6>
          <div class="box-form">
            <div class="form-group">
              <label for="">Mã đơn hàng:</label>
              <div class="form-text">{{ $model->contractno }}</div>
            </div>
            <div class="form-group">
              <label for="">Tình trạng:</label>
              <div class="form-text">{{ $contractstatustype[$model->contractstatustype] }}</div>
            </div>
            <div class="form-group">
              <label for="">Ngày bắt đầu:</label>
              <div class="form-text">{{ ConvertSQLDate($model->contractdate) }}</div>
            </div>
            <div class="form-group">
              <label for="">Ngày kết thúc:</label>
              <div class="form-text">
                {{ ($model->lastcontractdate == null or $model->contractdate == $model->lastcontractdate) ? 'Không thời hạn' : ConvertSQLDate($model->lastcontractdate) }}
              </div>
            </div>
          </div>
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
                <td><b>{{ $model->service_product_name }}</b>
                  <br />{{ formatNumber($model->service_product_price, 1, 0, 1) }} đồng/tháng
                </td>
                <td>{{ $model->term }} tháng</td>
                <td>{{ $model->discount }} %</td>
                <td>{{ formatNumber($model->amount, 1, 0, 1) }} đồng</td>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3"><b>Thành tiền</b></td>
                  <td><b>{{ formatNumber($model->amount, 1, 0, 1) }} đồng</b></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <div class="box box-primary">
          <h6 class="box-title">Thông tin phê duyệt</h6>
          <div class="box-form">
            <div class="form-group">
              <label for="">Trạng thái duyệt:</label>
              <div class="form-text">
                {{ $model->approvestatustype == '' ? '' : $approvestatustype[$model->approvestatustype] }}</div>
            </div>
            <div class="form-group">
              <label for="">Ngày duyệt:</label>
              <div class="form-text">{{ $model->approved_at == '0000-00-00' ? '' : ConvertSQLDate($model->approved_at) }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  {{-- <div class="row">
    <form role="form" action="{{ route('contracts-update', ['id' => $model->id]) }}?continue=true" method="post" id="contract-form">
        <div class="col-md-12">
            <div class="box box-primary">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <input type='hidden' name='typereport' value=''>
                <div class="box-body">
                    <div class="form-group">
                        <p class="text-primary" style="line-height: 2"><font size='3'><b>Thông tin khách hàng</b></font></p>                        
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ và tên :</label>
                            </div>
                            <div class="col-md-7">
                                {{ $model->customer()->first()->fullname }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Địa chỉ email :</label>
                            </div>
                            <div class="col-md-3">
                                {{ $model->customer()->first()->email }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Địa chỉ liên hệ:</label>
                            </div>
                            <div class="col-md-7">
                                {{ $model->customer()->first()->address }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Điện thoại :</label>
                            </div>
                            <div class="col-md-3">
                                {{ $model->customer()->first()->phone }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <p class="text-primary" style="line-height: 2"><font size='3'><b>Thông tin dịch vụ</b></font></p>                        
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Mã đơn hàng :</label>
                            </div>
                            <div class="col-md-3">
                                {{ $model->contractno }}
                            </div>
                            <div class="col-md-2">
                                <label>Tình trạng :</label>
                            </div>
                            <div class="col-md-2">
                                <font color="red"><b>{{ $contractstatustype[$model->contractstatustype] }}</b></font>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày bắt đầu :</label>
                            </div>
                            <div class="col-md-3">
                                {{ ConvertSQLDate($model->contractdate) }}
                            </div>
                            <div class="col-md-2">
                                <label>Ngày kết thúc :</label>
                            </div>
                            <div class="col-md-2">
                                {{ ($model->lastcontractdate == null or $model->contractdate == $model->lastcontractdate) ? "Không thời hạn" : ConvertSQLDate($model->lastcontractdate) }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;" class="text-nowrap">DỊCH VỤ</th>
                                            <th style="text-align: center;" class="text-nowrap">THỜI HẠN (tháng)</th>
                                            <th style="text-align: center;" class="text-nowrap">GIẢM GIÁ (%)</th>                                            
                                            <th style="text-align: center;" class="text-nowrap">SỐ TIỀN THANH TOÁN (đồng)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-contract">
                                            <td style="text-align: left;" class="text-nowrap">{{ $model->service_product_name }} <br> Giá: {{ formatNumber($model->service_product_price, 1, 0, 1) }} đồng/tháng</td>
                                            <td style="text-align: center;" class="text-nowrap">{{ $model->term }}</td>
                                            <td style="text-align: center;" class="text-nowrap">{{ $model->discount }}</td>
                                            <td style="text-align: right;" class="text-nowrap">{{ formatNumber($model->amount, 1, 0, 1) }}</td>
                                        </tr>
                                        <tr class="table-contract">
                                            <td style="text-align: left;" class="text-nowrap"></td>
                                            <td style="text-align: left;" class="text-nowrap"></td>
                                            <td style="text-align: right;" class="text-nowrap"><b>THÀNH TIỀN</b></td>
                                            <td style="text-align: right;" class="text-nowrap"><font color="#ff0000">{{ formatNumber($model->amount, 1, 0, 1) }}</font></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> 
                    </div> 

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Thanh toán :</label>
                            </div>
                            <div class="col-md-3">
                                @if ($model->service_product_price != 0)
                                    @if ($model->payment == null or $model->payment == '0')
                                        <b class="alert-danger">{{ $paymenttype[0] }}</b>        
                                    @elseif($model->payment == '1')
                                        <b class="alert-success">{{ $paymenttype[1] }}</b>        
                                    @endif
                                @endif                                    
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <p class="text-primary" style="line-height: 2"><font size='3'><b>Thông tin phê duyệt:</b></font></p>                        
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Trạng thái duyệt :</label>
                            </div>
                            <div class="col-md-2">
                                <font color="red"><b>{{ $model->approvestatustype == "" ? "" : $approvestatustype[$model->approvestatustype] }}</b></font>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <label>Ngày duyệt :</label>
                            </div>
                            <div class="col-md-2">
                                {{ $model->approved_at == "0000-00-00" ? "" : ConvertSQLDate($model->approved_at) }}
                            </div>
                        </div>
                    </div>
                      
                </div>
            </div>

            <hr>
            <a href="{{ route('dashboard') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
            
        </div>
    </form>
</div> --}}
@endsection

@section('scripts')
  @include('product-manage.contract.partials.script')
@endsection
