@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="{{ asset('css/pages/page/retireplans.css') }}">
@endsection

@section('content')
@if (isset($infor) and $error == 1)
<div class="alert {{ $alert }}">
  {{ $infor }}
</div>
@endif

@if (session()->has('success'))
@include('layouts.partials.messages.success')
@endif

<div class="section retireplans">
  <div class="breadcrumb">
    <span>Quản lý tài khoản</span> / <span class="current">Tính số tiền nghỉ hưu</span>
  </div>
  <p class="title-page">{{ $title->heading }}</p>

  <form role="form" action="{{ route('retireplans-process') }}?continue=true" method="post" id="frm">
    {{ csrf_field() }}
    <input type='hidden' name='typereport' value=''>
    <div class="box-content">
      <div class="box box-primary">
        <h6 class="box-title">Nhập số liệu tính toán</h6>
        <p class="box-des">Nhập thông tin để tính số tiền nghỉ hưu tương lai của bạn.</p>
        <div class="box-form">
          <div class="form-group">
            <label for="currentage">Tuổi hiện tại của bạn<span>*</span>:</label>
            <input type="text" class="form-control" name="currentage" id="currentage"
              value="{{ $currentage == null ? old('currentage') : formatNumber($currentage, 1, 0, 0) }}"
              onkeyup="this.value=formatNumberDecimal(this.value)" placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="retirementage">Tuổi nghỉ hưu dự án<span>*</span>:</label>
            <input type="text" class="form-control" name="retirementage" id="retirementage"
              value="{{ $retirementage == null ? old('retirementage') : formatNumber($retirementage, 1, 0, 0) }}"
              onkeyup="this.value=formatNumberDecimal(this.value)" placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="longevity">Tuổi thọ dự kiến<span>*</span>:</label>
            <input type="text" class="form-control" name="longevity" id="longevity"
              value="{{ $longevity == null ? old('longevity') : formatNumber($longevity, 1, 0, 0) }}"
              onkeyup="this.value=formatNumberDecimal(this.value)" placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="currentincome">Thu nhập hiện tại (tháng)<span>*</span>:</label>
            <input type="text" class="form-control" name="currentincome" id="currentincome"
              value="{{ $currentincome == null ? old('currentincome') : formatNumber($currentincome, 1, 0, 0) }}"
              onkeyup="this.value=formatNumberDecimal(this.value)" placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="currentcost">Chi phí hiện tại (tháng)<span>*</span>:</label>
            <input type="text" class="form-control" name="currentcost" id="currentcost"
              value="{{ $currentcost == null ? old('currentcost') : formatNumber($currentcost, 1, 0, 0) }}"
              onkeyup="this.value=formatNumberDecimal(this.value)" placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="retirementsavings">Tiền đóng góp hưu trí (tháng)<span>*</span>:</label>
            <input type="text" class="form-control" name="retirementsavings" id="retirementsavings"
              value="{{ $retirementsavings == null ? old('retirementsavings') : formatNumber($retirementsavings, 1, 0, 0) }}"
              onkeyup="this.value=formatNumberDecimal(this.value)" placeholder="Nhập..." required>
          </div>
          <div class="form-group">
            <label for="">Tiền cho các mục tiêu tài chính khác (tháng):</label>
            <input type='hidden' name='otherplan' id='otherplan' value='{{ $otherplan }}'>
            <div class="form-text">
              @if ($otherplan > 0)
              {!! formatNumberColorCustom($otherplan, 1, 0, 1, 2) !!}
              @else
              {!! formatNumberColorCustom($otherplan, 1, 0, 1, 3) !!}
              @endif
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-analysis">Phân tích</button>
      </div>

      <div class="box box-primary">
        <h6 class="box-title">Mục xuất số liệu tính toán</h6>
        <div class="box-form">
          <div class="form-group">
            <label for="">Số năm còn làm việc</label>
            <input type="text" class="form-control" name="" id="" value="{{ $workage_d }} năm" readonly>
          </div>
          <div class="form-group">
            <label for="">Số năm nghỉ hưu</label>
            <input type="text" class="form-control" name="" id="" value="{{ $retirementyear_e }} năm" readonly>
          </div>
          <div class="form-group">
            <label for="">Tổng số tiền đóng góp dự kiến cho kỳ nghỉ hưu</label>
            <div class="form-text">
              {!! formatNumberColorCustom($retirementamount_j, 1, 0, 1, 2) !!}
            </div>
          </div>
          <div class="form-group">
            <label for="">Tiền chi phí dự kiến để sống khi nghỉ hưu (tháng)</label>
            <div class="form-text">
              {!! formatNumberColorCustom($expenseretirementamount_k, 1, 0, 1, 2) !!}
            </div>
          </div>
          <div class="form-group">
            <label for="">Tổng số tiền sinh hoạt phí dự kiến chúng ta cần cho kỳ nghỉ hưu
              sẽ là</label>
            <div class="form-text">
              {!! formatNumberColorCustom($totalexpenseretirementamount_l, 1, 0, 1, 2) !!}
            </div>
          </div>
          <div class="form-group">
            <label for="">Số tiền còn thiếu hụt khi nghỉ hưu</label>
            <div class="form-text">
              @if ($otherplan > 0)
              {!! formatNumberColorCustom($otherplan, 1, 0, 1, 2) !!}
              @else
              {!! formatNumberColorCustom($otherplan, 1, 0, 1, 3) !!}
              @endif
              @if ($totalamount_m <= 0) {!! formatNumberColorCustom($totalamount_m, 1, 0, 1, 3) !!} @else
                {!!formatNumberColorCustom($totalamount_m, 1, 0, 0, 2) !!} @endif </div>
            </div>
            @if (isset($infor) and $error == 2)
            <div class="alert {{ $alert }}" role="alert">{{ $infor }}</div>
            @endif
          </div>
        </div>
      </div>
  </form>
</div>
@endsection

@section('scripts')
@include('product-manage.retireplan.partials.script')
@endsection