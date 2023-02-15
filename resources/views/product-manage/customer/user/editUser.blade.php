@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/user.css') }}">
@endsection

@section('content')
  <div class="section customer-user__edit">
    <div class="breadcrumb">
      <span>Quản lý user</span> / <span>Tổng quan user</span> / <span>Thông tin user</span> / <span class="current">Chỉnh
        sửa</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  @if (isset($infor))
    @include('layouts.partials.messages.infor')
  @endif
  
    <form role="form" action="{{ route('customers-updateUser', ['id' => $model->id]) }}?continue=true"
      method="post" id="customer-form">
      {{ csrf_field() }}
      {{ method_field('put') }}

    <div class="box-content">
      <div class="box box-primary">
        <div class="box-form">
          <div class="form-group">
            <label for="fullname">Họ và tên<span>*</span>:</label>
            <input type="text" class="form-control" name="fullname" id="fullname" value="{{ $model->fullname }}" placeholder="Nhập..."
              required>
            @if ($errors->has('fullname'))
              <span class="text-danger">{{ $errors->first('fullname') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="phone">Số điện thoại<span>*</span>:</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ $model->phone }}" placeholder="Nhập..."
              required>
            @if ($errors->has('phone'))
              <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="email">Email<span>*</span>:</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $model->email }}" placeholder="Nhập..."
              required>
            @if ($errors->has('email'))
               <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="birthday">Ngày sinh<span>*</span>:</label>
            <input type="text" class="form-control" name="birthday" id="birthday" value="{{ ConvertSQLDate($model->birthday) }}" required>
            @if ($errors->has('birthday'))
              <span class="text-danger">{{ $errors->first('birthday') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="">Phân loại<span>*</span>:</label>
            <select class="form-select select2" id="usercustomertype" name="usercustomertype" required>
              <option value="">Chọn phân loại</option>
              @foreach ($usercustomertypes as $key => $value)
                @if ($model->usercustomertype != '' and $key == $model->usercustomertype)
                  <option value="{{ $key }}" selected>{{ $value }}</option>
                @else
                  <option value="{{ $key }}">{{ $value }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
          <label for="">Mối quan hệ<span>*</span>:</label>
            <select class="form-select select2" id="relationshiptype" name="relationshiptype" required>
              <option value="">Chọn mối quan hệ</option>
              @foreach ($relationshiptypes as $key => $value)
                @if ($model->relationshiptype != '' and $key == $model->relationshiptype)
                  <option value="{{ $key }}" selected>{{ $value }}</option>
                @else
                  <option value="{{ $key }}">{{ $value }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="form-group">
              <label for=""></label>
              <div class="form-text">
                <input type="checkbox" tabindex="4" name="dependent" value="1" {{ $model->dependent==1 ? 'checked="checked"' : '' }}>
                Người phụ thuộc
              </div>
          </div>
        </div>
        <div class="box-search">
          <div class="control">
            <a href="{{ route('customers-dashboardMain') }}" class="btn btn-primary btn-cancel">
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

@endsection

@section('scripts')
  @include('product-manage.customer.user.partials.script')
@endsection
