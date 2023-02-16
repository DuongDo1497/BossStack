@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/cashincome.css') }}">

  {{-- <style type="text/css">
    .box-body .form-group .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .box-body .form-group .row .item:nth-child(2n-1) {
        align-self: center;
        margin-bottom: 10px;
    }

    @media only screen and (max-width: 768px) {
        .box-body .form-group {
            margin-bottom: 0;
        }

        .box-body .form-group .row .item:nth-child(2n+2) {
            margin-bottom: 15px;
        }

        .box-body .form-group .row .item label {
            margin-bottom: 0;
        }

        .box-body .form-group:last-child .row .item label {
            margin-bottom: 5px;
        }
    }
</style> --}}
@endsection

@section('content')

  @if (isset($infor))
    @if ($checkAmount == 1)
      <div class="alert alert-danger">
        {{ $infor }}
      </div>
    @else
      <div class="alert alert-success">
        {{ $infor }}
      </div>
    @endif
  @endif

  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section cashincome-add">
    <div class="breadcrumb">
      <span>Quản lý kinh doanh</span> / <a class="prev" href="{{ route('cash-index') }}">Quản lý tiền mặt</a> / <span
        class="current">{{ $title->sub_heading }}</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('cashincomes-store') }}?continue=true" method="post" id="frm"
      enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value=''>
      <input type='hidden' name='customer_id' value='{{ $customer_id }}'>
      <input type='hidden' name='incomestatustype' value='{{ $incomestatustype }}'>
      <input type='hidden' name='cashaccount_id' value='{{ $cashaccount_id }}'>
      <input type='hidden' name='cashaccount_amount' value='{{ $cashaccount_amount }}'>
      <div class="box-content">
        <div class="box box-primary">
          <p class="box-des">Nhập thông tin các khoản thu/chi và các khoản nợ cá nhân. Để xem lại thông
            tin các khoản. Vui lòng xem <a href="{{ route('cashincomes-index') }}">[tại đây]</a></p>
          <div class="box-form">
            <div class="form-group">
              <label>Ngày giao dịch<span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control" name="incomedate" id="incomedate"
                  value="{{ old('incomedate') == '' ? $incomedate : old('incomedate') }}" readonly>
                <span class="input-group-addon">
                  <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                </span>
              </div>
            </div>
            <div class="form-group">
              <label>Dòng tiền:</label>
              <input type="text" class="form-control" name="" id=""
                value="{{ $cashaccount_name . ' [ ' . $cashaccountno . ' ]' }}" readonly>
            </div>
            <div class="form-group">
              <label for="">Số dư khả dụng:</label>
              <div class="form-text text-right">{!! formatNumberColor($cashaccount_amount, 1, 0, 1) !!} &#8363;</div>
            </div>
            <div class="form-group">
              <label for="incometype">Loại<span>*</span>:</label>
              <select class="form-select select2" name="incometype" id="incometype"
                onChange="processSubmitOpenWindow('frm', 'view', '_top', '{{ route('cashincomes-process', ['incomestatustype' => $incomestatustype]) }}', '1')"
                required>
                <option selected>Chọn loại</option>
                @foreach ($incometypes as $item)
                  @if ($item->id == $incometype or $item->id == old('incometype'))
                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                  @else
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="incometypedetail">Chi tiết<span>*</span>:</label>
              <select class="form-select select2" name="incometypedetail" id="incometypedetail"
                onChange="processSubmitOpenWindow('frm', 'view', '_top', '{{ route('cashincomes-process', ['incomestatustype' => $incomestatustype]) }}', '1')"
                required>
                <option selected>Chọn chi tiết</option>
                @foreach ($incometypedetails as $item)
                  @if ($item->id == $incometypedetail or $item->id == old('incometypedetail'))
                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                  @else
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            @if ($incometypedetaillevels->count() > 0)
              <div class="form-group">
                <label for="incometypedetaillevel">Phân loại<span>*</span>:</label>
                <select class="form-select select2" name="incometypedetaillevel" id="incometypedetaillevel" required>
                  <option selected>Chọn phân loại</option>
                  @foreach ($incometypedetaillevels as $item)
                    @if ($item->id == $incometypedetaillevel or $item->id == old('incometypedetaillevel'))
                      <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                    @else
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="cashassetid">Nội dung<span>*</span>:</label>
                <select class="form-select select2" name="cashassetid" id="cashassetid" required>
                  <option selected>Chọn nội dung</option>
                  @foreach ($cashassets as $item)
                    @if ($item->remainamount > 0)
                      @if ($item->id == $cashassetid or $item->id == old('cashassetid'))
                        <option value="{{ $item->id }}" selected>{{ $item->assetname }} - Số tiền còn phải
                          thanh toán: {{ formatNumber($item->remainamount, 1, 0, 1) }}</option>
                      @else
                        <option value="{{ $item->id }}">{{ $item->assetname }} - Số tiền còn phải thanh
                          toán: {{ formatNumber($item->remainamount, 1, 0, 1) }}</option>
                      @endif
                    @endif
                  @endforeach
                </select>
              </div>
            @endif
            <div class="form-group">
              <label for="amount">Số tiền<span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="amount" id="amount"
                  value="{{ old('amount') == '' ? $amount : old('amount') }}"
                  onkeyup="this.value=formatNumberDecimal(this.value)" placeholder="Nhập..." required>
                <span class="input-group-addon">&#8363;</span>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Ghi chú:</label>
              <input type="text" class="form-control" name="description" id="description"
                value="{{ old('description') == '' ? $description : old('description') }}" placeholder="Nhập...">
            </div>
            <div class="form-group">
              <label for="fImages">Hóa đơn chứng từ kèm theo:</label>
              <div class="form-div">
                <input type="hidden" name="document" value="">
                <input type="file" class="form-control" name="fImages" id="fImages">
                <small>Lưu ý: Gửi kèm các hóa đơn, chứng từ,... kèm theo</small>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-save"
            onclick="processSubmitOpenWindow('frm', 'add', '_top', '{{ route('cashincomes-store') }}?continue=true', '1')">Lưu</button>
        </div>
      </div>
    </form>
  </div>

  {{-- <div class="row">
    <form role="form" action="{{ route('cashincomes-store') }}?continue=true" method="post" id="frm"
        enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">THÊM MỚI {{ mb_strtoupper($incomestatustypes[$incomestatustype]) }}</h3>
                </div>
                <div class="box-header with-border">
                    <font style="font-size:10pt;color='#000'">Thông tin các khoản thu nhập/chi phí và các khoản nợ cá
                        nhân. Để xem lại thông tin chi tiết các khoản vui lòng xem <a
                            href="{{ route('cashincomes-index') }}" style="color: #FFA500;"><b>tại đây</b></a>.</font>
                </div>

                {{ csrf_field() }}
                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='customer_id' value='{{ $customer_id }}'>
                <input type='hidden' name='incomestatustype' value='{{ $incomestatustype }}'>
                <input type='hidden' name='cashaccount_id' value='{{ $cashaccount_id }}'>
                <input type='hidden' name='cashaccount_amount' value='{{ $cashaccount_amount }}'>
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Ngày giao dịch<small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type='text' class="form-control" name="incomedate" id='incomedate'
                                    value="{{ old('incomedate') == "" ? $incomedate : old('incomedate') }}" />
                                @if ($errors->has('incomedate'))<span class="text-danger">{{ $errors->first('incomedate')
                                    }}</span>@endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Ví tiền:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item" style="text-align: left;">
                                {{ $cashaccount_name . " [ " . $cashaccountno . " ]" }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Số dư khả dụng:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item" style="text-align: right;">
                                <font style="font-size: 17px;font-weight:normal">{!!
                                    formatNumberColor($cashaccount_amount, 1, 0, 1) !!}</font>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Loại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <select class="form-control select2" name="incometype"
                                    onChange="processSubmitOpenWindow('frm', 'view', '_top', '{{ route('cashincomes-process', ['incomestatustype' => $incomestatustype]) }}', '1')">
                                    <option value=""></option>
                                    @foreach ($incometypes as $item)
                                    @if ($item->id == $incometype or $item->id == old('incometype'))
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('incometype'))<span class="text-danger">{{ $errors->first('incometype')
                                    }}</span>@endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Chi tiết :</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <select class="form-control select2" name="incometypedetail"
                                    onChange="processSubmitOpenWindow('frm', 'view', '_top', '{{ route('cashincomes-process', ['incomestatustype' => $incomestatustype]) }}', '1')">
                                    <option value=""></option>
                                    @foreach ($incometypedetails as $item)
                                    @if ($item->id == $incometypedetail or $item->id == old('incometypedetail'))
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('incometypedetail'))<span class="text-danger">{{
                                    $errors->first('incometypedetail') }}</span>@endif
                            </div>
                        </div>
                    </div>

                    @if ($incometypedetaillevels->count() > 0)
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Phân loại :</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <select class="form-control select2" name="incometypedetaillevel">
                                    <option value=""></option>
                                    @foreach ($incometypedetaillevels as $item)
                                    @if ($item->id == $incometypedetaillevel or $item->id == old('incometypedetaillevel'))
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('incometypedetaillevel'))<span class="text-danger">{{
                                    $errors->first('incometypedetaillevel') }}</span>@endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Nội dung :</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <select class="form-control select2" name="cashassetid">
                                    <option value=""></option>
                                    @foreach ($cashassets as $item)
                                    @if ($item->remainamount > 0)
                                    @if ($item->id == $cashassetid or $item->id == old('cashassetid'))
                                    <option value="{{ $item->id }}" selected>{{ $item->assetname }} - Số tiền còn phải
                                        thanh toán: {{ formatNumber($item->remainamount, 1, 0, 1) }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->assetname }} - Số tiền còn phải thanh
                                        toán: {{ formatNumber($item->remainamount, 1, 0, 1) }}</option>
                                    @endif
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('cashassetid'))<span class="text-danger">{{
                                    $errors->first('cashassetid') }}</span>@endif
                            </div>
                        </div>
                    </div>

                    @endif

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Số tiền <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type="text" class="form-control" name="amount"
                                    value="{{ old('amount') == "" ? $amount : old('amount') }}"
                                    onkeyup='this.value=formatNumberDecimal(this.value)'>
                                @if ($errors->has('amount'))<span class="text-danger">{{ $errors->first('amount')
                                    }}</span>@endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-12 item">
                                <label>Ghi chú: </label>
                            </div>
                            <div class="col-md-5 col-xs-12 item">
                                <textarea class="form-control" name="description"
                                    rows="2">{{ old('description') == "" ? $description : old('description') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-12 item">
                                <label>Hóa đơn, chứng từ kèm theo :</label>
                            </div>
                            <div class="col-md-7 col-xs-12 item">
                                <div class="box-body">
                                    <input type="file" name="fImages" style="width: 100%">
                                    <p class="text-danger" style="margin-top: 10px;"><u>Lưu ý:</u> gửi kèm các hóa đơn,
                                        chứng từ ... kèm theo</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <button class="btn btn-success btn-bg-blue" style="width: 15%;"
                onclick="processSubmitOpenWindow('frm', 'add', '_top', '{{ route('cashincomes-store') }}?continue=true', '1')">Lưu</button>
            <br>
            <hr>
            <a href="{{ route('cash-index') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>
        </div>
    </form>
</div> --}}

@endsection

@section('scripts')
  @include('product-manage.cashincome.partials.script')
@endsection
