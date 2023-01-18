@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/coupon.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section coupon-edit">
    <div class="breadcrumb">
      <span>Quản lý khách hàng</span> / <a href="#" class="prev">Coupon</a> / <span class="current">Chỉnh sửa
        coupon</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('coupons-update', ['id' => $model->id]) }}?continue=true" method="post"
      id="coupons-form">
      {{ csrf_field() }}
      {{ method_field('put') }}
      <div class="box-content">
        <div class="box box-primary">
          <div class="box-form">
            <div class="form-group">
              <label for="typecoupon">Loại<span>*</span>:</label>
              <select class="form-select select2" name="typecoupon" id="typecoupon">
                @foreach ($coupontypes as $key => $value)
                  @if ($key == $model->typecoupon)
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="key">Mã giảm giá<span>*</span>:</label>
              <input type="text" class="form-control" name="key" id="key" value="{{ $model->key }}"
                required>
            </div>
            <div class="form-group">
              <label for="percent">% giảm giá<span>*</span>:</label>
              <div class="input-group">
                <input type="text" class="form-control number" name="percent" id="percent"
                  onkeyup='this.value=formatNumberDecimal(this.value)' value="{{ $model->percent }}" required>
                <span class="input-group-addon">%</span>
              </div>
            </div>
            <div class="form-group">
              <label for="quantity">Số lượng<span>*</span>:</label>
              <input type="text" class="form-control number" name="quantity" id="quantity"
                value="{{ $model->quantity }}" onkeyup='this.value=formatNumberDecimal(this.value)' required>
            </div>
            <div class="form-group">
              <label for="description">Ghi chú:</label>
              <textarea class="form-control" name="description" id="description" rows="5">{{ $model->description }}</textarea>
            </div>
            <div class="form-group">
              <label for="status">Tình trạng<span>*</span>:</label>
              <select class="form-select select2" name="status" id="status">
                @foreach ($couponstatus as $key => $value)
                  @if ($key == $model->status)
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="box-search">
            <div class="control">
              <a href="{{ route('coupons-index') }}" class="btn btn-primary btn-cancel">
                Hủy bỏ
              </a>
              <button type="submit" class="btn btn-primary btn-save">
                Lưu
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  {{-- <div class="row">
    <form role="form" action="{{ route('coupons-update', ['id' => $model->id]) }}?continue=true" method="post"
      id="coupons-form">
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{ 'Chỉnh sửa mã giảm giá' }}</h3>
          </div>
          {{ csrf_field() }}
          {{ method_field('put') }}
          <div class="box-body">
            <div class="form-group">
              <label>{{ 'Loại' }}</label>
              <select class="form-control select" name="typecoupon">
                @foreach ($coupontypes as $key => $value)
                  @if ($key == $model->typecoupon)
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group{{ $errors->has('key') ? ' has-error' : '' }}">
              <label>{{ 'Mã giảm giá' }}</label>
              <input type="text" class="form-control" name="key"value="{{ $model->key }}" tabindex="1">
              @if ($errors->has('key'))
                <span class="help-block">{{ $errors->first('key') }}</span>
              @endif
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>{{ '% giảm giá' }}</label>
              <input type="text" class="form-control" name="percent" value="{{ $model->percent }}" tabindex="2"
                onkeyup='this.value=formatNumberDecimal(this.value)'>
              @if ($errors->has('percent'))
                <span class="text-danger">{{ $errors->first('percent') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label>{{ 'Số lượng' }}</label>
              <input type="text" class="form-control" name="quantity" value="{{ $model->quantity }}" tabindex="3"
                onkeyup='this.value=formatNumberDecimal(this.value)'>
              @if ($errors->has('quantity'))
                <span class="text-danger">{{ $errors->first('quantity') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label>{{ 'Số lượng chưa sử dụng' }}</label>
              <input type="text" class="form-control" name="quantitied" value="{{ $model->quantitied }}"
                tabindex="3" onkeyup='this.value=formatNumberDecimal(this.value)'>
              @if ($errors->has('quantitied'))
                <span class="text-danger">{{ $errors->first('quantitied') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label>{{ 'Ghi chú' }}</label>
              <input type="text" class="form-control" name="description" value="{{ $model->description }}"
                tabindex="4">
              @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label>{{ 'Tình trạng' }}</label>
              <select class="form-control select" name="status">
                @foreach ($couponstatus as $key => $value)
                  @if ($key == $model->status)
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
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{ 'Chức năng' }}</h3>
          </div>
          <div class="box-body">
            <button type="submit" class="btn btn-primary btn-save" tabindex="9">{{ 'Lưu' }}</button>
            <a href="{{ route('coupons-index') }}" class="btn btn-default btn-cancel"
              tabindex="10">{{ 'Trở về' }}</a>
          </div>
        </div>
      </div>
    </form>
  </div> --}}
@endsection

@section('scripts')
  <script>
    $(function() {
      $('.btn-save').click(function() {
        $('#coupons-form').submit();
      });

      $('#chk-continue').on('ifChecked', function() {
        $('#coupons-form').attr('action', '{{ route('coupons-edit', ['id' => $model->id]) }}?continue=true');
      });

      $('#chk-continue').on('ifUnchecked', function() {
        $('#coupons-form').attr('action', '{{ route('coupons-edit', ['id' => $model->id]) }}');
      });
    });
  </script>
@endsection
