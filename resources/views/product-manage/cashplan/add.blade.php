@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/cashplan.css') }}">

  {{-- <link rel="stylesheet" href="{{ asset('css/pages/products.css') }}">

  <style type="text/css">
    label {
      font-size: 12px;
    }

    .select2-container .selection .select2-selection--single {
      height: 34px !important;
      padding: 6px 12px !important;
    }

    .select2-container .selection .select2-selection--single .select2-selection__arrow {
      height: 28px !important;
    }

    @media only screen and (max-width: 768px) {
      .box-cashplans.box-customer .help>div {
        display: block;
        justify-content: normal;
      }
    }
  </style> --}}
@endsection

@section('content')
  @if (isset($infor))
    <div class="alert alert-success">
      {{ $infor }}
    </div>
  @endif

  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section cashplan-add">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <a class="prev" href="{{ route('cashplans-index') }}">Thiết lập
        dòng tiền</a> / <span class="current">Thêm dòng tiền</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('cashplans-process') }}?continue=true" method="post" id="frm"
      enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value=''>
      <input type='hidden' name='customer_id' value='{{ $customer_id }}'>
      <input type="hidden" name="currentamountunittype" id="currentamountunittype" value="1">
      <input type="hidden" name="requireamountunittype" id="requireamountunittype" value="1">

      <div class="box-content">
        <div class="box box-primary">
          <div class="box-form">
            <div class="form-group">
              <label for="">Phân loại<span>*</span>:</label>
              <select class="form-select select2" name="" id="">
                <option selected>Chọn loại</option>
                <option value="">Cá nhân</option>
                <option value="">Gia đình</option>
                <option value="">Đầu tư</option>
                <option value="">Kinh doanh</option>
                <option value="">Dòng tiền khác</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Mục tiêu<span>*</span>:</label>
              <select class="form-select select2" name="plantype" id="plantype" required>
                @foreach ($plantypes as $key => $value)
                  @if ($key == old('plantype'))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    @if (Auth()->user()->service_product_id == 3)
                      <option value="{{ $key }}">{{ $value }}</option>
                    @else
                      @if ($key == 9 or $key == 13)
                      @else
                        <option value="{{ $key }}">{{ $value }}</option>
                      @endif
                    @endif
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="description">Tên dòng tiền<span>*</span>:</label>
              <input type="text" class="form-control" name="description" id="description"
                value="{{ old('description') }}" placeholder="Nhập tên dòng tiền" required>
            </div>
            <div class="form-group">
              <label for="plandate">Ngày lập:</label>
              <div class="input-group">
                <input type="text" class="form-control" name="plandate" id="plandate"
                  value="{{ old('plandate') == '' ? $plandate : old('plandate') }}" readonly>
                <span class="input-group-addon">
                  <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="currentage">Tuổi hiện tại:</label>
              <div class="input-group">
                <input type="text" class="form-control" name="currentage" id="currentage"
                  value="{{ $currentage == null ? old('currentage') : $currentage }}"
                  onkeyup="this.value=formatNumberDecimal(this.value)" readonly>
                <span class="input-group-addon">tuổi</span>
              </div>
            </div>
            <div class="form-group">
              <label for="planage">Tuổi hoàn thành mục tiêu<span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control" name="planage" id="planage"
                  value="{{ old('planage') == '' ? '' : old('planage') }}" placeholder="Nhập tuổi hoàn thành mục tiêu"
                  required>
                <span class="input-group-addon">tuổi</span>
              </div>
            </div>
            <div class="form-group">
              <label for="requireamount">Số tiền mục tiêu<span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="requireamount" id="requireamount"
                  value="{{ old('requireamount') == '' ? 0 : old('requireamount') }}"
                  onkeyup="this.value=formatNumberDecimal(this.value)" required>
                <span class="input-group-addon">&#8363;</span>
              </div>
            </div>
            <div class="form-group">
              <label for="finishdate">Ngày dự kiến hoàn thành:</label>
              <div class="input-group">
                <input type="text" class="form-control" name="finishdate" id="finishdate" value=""
                  placeholder="Chọn ngày dự kiến hoàn thành">
                <span class="input-group-addon">
                  <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="">Hóa đơn, chứng từ kèm theo:</label>
              <input type="file" class="form-control" name="fImages" id="" value="" onkeyup=""
                placeholder="">
            </div>
          </div>
          <button class="btn btn-primary btn-add" onclick="processReports('frm', 'process')">
            Thêm dòng tiền
          </button>
        </div>
      </div>
    </form>
  </div>

  {{-- <div class="row">
    <form role="form" action="{{ route('cashplans-process') }}?continue=true" method="post" id="frm"
      enctype="multipart/form-data">


      <div class="col-md-12">
        <div class="box box-cashplans box-customer">
          {{ csrf_field() }}
          <input type='hidden' name='typereport' value=''>
          <input type='hidden' name='customer_id' value='{{ $customer_id }}'>
          <input type="hidden" name="currentamountunittype" id="currentamountunittype" value="1">
          <input type="hidden" name="requireamountunittype" id="requireamountunittype" value="1">

          <div class="box-body">
            <font style="font-size:11pt;">Thông tin thiết lập các kế hoạch tài chính của khách hàng.
              Để xem lại thông tin chi tiết các mục tiêu tài chính khách hàng vui lòng xem <a
                href="{{ route('cashplans-index') }}"><b>
                  <font color="#FFA500">tại đây</font>
                </b></a>.</font><br><br><br>
            <div class="form-group">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>MỤC TIÊU <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-4 col-xs-7">
                  <select class="form-control select2" name="plantype" id="plantype">
                    @foreach ($plantypes as $key => $value)
                      @if ($key == old('plantype'))
                        <option value="{{ $key }}" selected>{{ $value }}</option>
                      @else
                        @if (Auth()->user()->service_product_id == 3)
                          <option value="{{ $key }}">{{ $value }}</option>
                        @else
                          @if ($key == 9 or $key == 13)
                          @else
                            <option value="{{ $key }}">{{ $value }}</option>
                          @endif
                        @endif
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>Chi tiết <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-4 col-xs-7">
                  <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                  @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>Ngày lập <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-4 col-xs-7">
                  <input type='text' class="form-control" name="plandate" id='plandate'
                    value="{{ old('plandate') == '' ? $plandate : old('plandate') }}" />
                  @if ($errors->has('plandate'))
                    <span class="text-danger">{{ $errors->first('plandate') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>Tuổi hiện tại <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-4 col-xs-7">
                  <input type="text" class="form-control" name="currentage" id="currentage"
                    value="{{ $currentage == null ? old('currentage') : $currentage }}"
                    onkeyup='this.value=formatNumberDecimal(this.value)'>
                  @if ($errors->has('currentage'))
                    <span class="text-danger">{{ $errors->first('currentage') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>Tuổi hoàn thành mục tiêu <small class="text-danger text">
                      (*)</small>:</label>
                </div>
                <div class="col-md-4 col-xs-7" style="align-self: center;">
                  <input type="text" class="form-control" value="{{ old('planage') == '' ? '' : old('planage') }}"
                    name="planage" id="planage">
                  @if ($errors->has('planage'))
                    <span class="text-danger">{{ $errors->first('planage') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group" style="display: none;">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>Liên kết ví tiền <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-4 col-xs-7">
                  <select class="form-control select2" name="accountno" id="accountno">
                    <option value="">Chọn ví tiền mà bạn muốn liên kết</option>
                    @foreach ($listaccounts as $item)
                      @if ($item->id == old('accountno'))
                        <option value="{{ $item->id . '_' . $item->amount }}" selected>
                          {{ 'Tài khoản ' . $item->accountno . ' - Số dư: ' . formatNumber($item->amount, 1, 0, 0) }}
                        </option>
                      @else
                        <option value="{{ $item->id . '_' . $item->amount }}">
                          {{ 'Tài khoản ' . $item->accountno . ' - Số dư:  ' . formatNumber($item->amount, 1, 0, 0) }}
                        </option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group" style="display: none;">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>Vốn đầu tư hiện tại <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-4 col-xs-7" style="align-self: center;">
                  <input type="text" class="form-control"
                    value="{{ old('currentamount') == '' ? 0 : old('currentamount') }}" name="currentamount"
                    id="currentamount" onkeyup='this.value=formatNumberDecimal(this.value)'>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>Số tiền mục tiêu <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-4 col-xs-7" style="align-self: center;">
                  <input type="text" class="form-control"
                    value="{{ old('requireamount') == '' ? 0 : old('requireamount') }}" name="requireamount"
                    id="requireamount" onkeyup='this.value=formatNumberDecimal(this.value)'>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>Ngày dự kiến hoàn thành :</label>
                </div>
                <div class="col-md-4 col-xs-7">
                  <input type='text' class="form-control" name="finishdate" id='finishdate' value="" />
                </div>
              </div>
            </div>

            <div class="form-group" style="display: none;">
              <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-5" style="align-self: center;">
                  <label>Số tiền tích lũy hiện tại:</label>
                </div>
                <div class="col-md-4 col-xs-7" style="text-align: right; align-self: center;">
                  <font size="3" color='red'><b><span id="totalcurrentamountlabel"></span>
                    </b></font>
                  <input type='hidden' name='totalcurrentamount' id='totalcurrentamount'
                    value='{{ old('totalcurrentamount') }}'>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row" style="display: flex;">
                <div class="col-md-6" style="text-align: left; align-self: center;">
                  <font size="3" color='red'><b><span id="checkamountlabel"></span></b>
                  </font>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-xs-12">
                  <label>Hóa đơn, chứng từ kèm theo :</label>
                </div>
                <div class="col-md-7 col-xs-12">
                  <div class="box-body">
                    <input type="file" name="fImages" style="width: 100%">
                    <p class="text-danger" style="margin-top: 10px;"><u>Lưu ý:</u> gửi kèm các hóa
                      đơn, chứng từ ... kèm theo</p>
                  </div>
                </div>
              </div>
            </div>

            <button class="btn btn-success" style="background-color: #ff7f0e; border: 1px solid #ff7f0e;"
              onclick="processReports('frm', 'process')">Thêm mục tiêu</button>


            <br><br><br><br><br>

            <h5>HỖ TRỢ</h5>

            <font size="2" style="text-align: justify;"><b>Nếu bạn cần tư vấn để gia tăng thu
                nhập và hoàn thành mục tiêu tài chính, xin hãy liên hệ với chúng tôi để nhận được
                những lời khuyên tốt nhất. Hotline: 0918.905.500 (Zalo/Viber/Skype) hoặc Email:
                info@bossstack.vn.</b></font>

            <div class="help">
              <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4" style="text-align: center;">
                  <a href="https://bossstack.vn/public/advisorys/formAdvisory">
                    <div class="icon" style="margin-bottom: 10px;">
                      <img src="{{ asset('img/icon-10.png') }}">
                    </div>
                    <div class="name">
                      <font size="3" color="#2d3194"><b>HỖ TRỢ TƯ VẤN</b></font>
                    </div>
                  </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4" style="text-align: center;">
                  <a href="https://bossstack.vn/public/invests">
                    <div class="icon" style="margin-bottom: 10px;">
                      <img src="{{ asset('img/icon-11.png') }}">
                    </div>
                    <div class="name">
                      <font size="3" color="#2d3194"><b>TIN TỨC ĐẦU TƯ</b></font>
                    </div>
                  </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4" style="text-align: center;">
                  <a href="https://bossstack.vn/public/cashs/process">
                    <div class="icon" style="margin-bottom: 10px;">
                      <img src="{{ asset('img/icon-12.png') }}">
                    </div>
                    <div class="name">
                      <font size="3" color="#2d3194"><b>DÒNG TIỀN CÁ NHÂN</b></font>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </form>
  </div> --}}
@endsection

@section('scripts')
  @include('product-manage.cashplan.partials.script')
@endsection
