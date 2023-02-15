@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/user.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/pages/page/cashplan.css') }}"> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  @if (isset($infor))
    @include('layouts.partials.messages.infor')
  @endif

  <div class="section customer-user__info">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <span>Tổng quan user</span> / <span class="current">Thông tin user</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="box-form">
          <div class="form-group">
            <label for="fullname">Họ và tên<span>*</span>:</label>
            <input type="text" class="form-control" name="fullname" id="fullname" value="{{ $model->fullname }}"
              placeholder="Nhập..." readonly>
          </div>
          <div class="form-group">
            <label for="phone">Số điện thoại<span>*</span>:</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ $model->phone }}"
              placeholder="Nhập..." readonly>
          </div>
          <div class="form-group">
            <label for="email">Email<span>*</span>:</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $model->email }}"
              placeholder="Nhập..." readonly>
          </div>
          <div class="form-group">
            <label for="birthday">Ngày bắt đầu<span>*</span>:</label>
            <div class="input-group">
              <input type="text" class="form-control" name="birthday" id="birthday"
                value="{{ $model->birthday == null ? '' : ConvertSQLDate($model->birthday) }}" readonly>
              <span class="input-group-addon">
                <img src="{{ asset('img/icon-calender.svg') }}" alt="">
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="">Phân loại<span>*</span>:</label>
            <input type="text" class="form-control" name="usercustomertype" id="usercustomertype"
              value="{{ $model->usercustomertype == '' ? '' : $usercustomertypes[$model->usercustomertype] }}" readonly>
          </div>
          <div class="form-group">
            <label for="">Chức vụ<span>*</span>:</label>
            <input type="text" class="form-control" name="relationshiptype" id="relationshiptype"
              value="{{ $model->relationshiptype == '' ? '' : $relationshiptypes[$model->relationshiptype] }}" readonly>
          </div>

          <div class="form-group">
            <label for="">Phân quyền<span>*</span>:</label>
            <input type="text" class="form-control" name="" id=""
              value="{{ $model->role_member == '' ? '' : $rolemembertypes[$model->role_member] }}" readonly>
          </div>

          {{-- <div class="form-group">
            <label for=""></label>
            <div class="form-text">
              <input type="checkbox" name="" id="" {{ $model->dependent==1 ? 'checked="checked"' : '' }}>
              Người phụ thuộc
            </div>
          </div> --}}
        </div>
        <div class="box-search">
          <div class="control">
            <a href="{{ route('customers-editUser', ['id' => $model->customer_id]) }}" class="btn btn-primary btn-edit">
              Chỉnh sửa
            </a>
            <a href="{{ route('customers-dashboardMain') }}" class="btn btn-primary btn-view">
              Xem tài khoản
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection

@section('scripts')
  {{-- @include('product-manage.cashplan.partials.script') --}}
@endsection
