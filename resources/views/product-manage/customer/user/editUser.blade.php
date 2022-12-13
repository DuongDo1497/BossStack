@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/user.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  @if (isset($infor))
    @include('layouts.partials.messages.infor')
  @endif

  <div class="section customer-user__edit">
    <div class="breadcrumb">
      <span>Quản lý user</span> / <span>Tổng quan user</span> / <span>Thông tin user</span> / <span class="current">Chỉnh
        sửa</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="box-form">
          <div class="form-group">
            <label for="fullname">Họ và tên<span>*</span>:</label>
            <input type="text" class="form-control" name="fullname" id="fullname" value="" placeholder="Nhập..."
              required>
          </div>
          <div class="form-group">
            <label for="phone">Số điện thoại<span>*</span>:</label>
            <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="Nhập..."
              required>
          </div>
          <div class="form-group">
            <label for="email">Email<span>*</span>:</label>
            <input type="text" class="form-control" name="email" id="email" value="" placeholder="Nhập..."
              required>
          </div>
          <div class="form-group">
            <label for="birthday">Ngày sinh<span>*</span>:</label>
            <input type="date" class="form-control" name="birthday" id="birthday" value="" required>
          </div>
          <div class="form-group">
            <label for="">Phân loại<span>*</span>:</label>
            <select class="form-select select2" name="" id="">
              <option selected>Chọn loại</option>
              <option value="">Gia đình</option>
              <option value="">Kinh doanh</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Mối quan hệ<span>*</span>:</label>
            <select class="form-select select2" name="" id="">
              <option selected>Chọn loại</option>
              <option value="">Gia đình</option>
              <option value="">Kinh doanh</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Phân quyền<span>*</span>:</label>
            <select class="form-select select2" name="" id="">
              <option selected>Chọn loại</option>
              <option value="">User Thành viên</option>
              <option value="">User Admin</option>
            </select>
          </div>

          <div class="form-group">
            <label for=""></label>
            <div class="form-text">
              <input type="checkbox" name="" id="">
              Người phụ thuộc
            </div>
          </div>
        </div>
        <div class="box-search">
          <div class="control">
            <a href="{{ route('customers-dashboardUser') }}" class="btn btn-primary btn-cancel">
              Hủy bỏ
            </a>
            <button type="submit" class="btn btn-primary btn-save">
              Lưu
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <a href="{{ route('customers-editUser',['id'=>0]) }}" style="width: 16%;">Cập nhật user</a> --}}
@endsection

@section('scripts')
  @include('product-manage.cashplan.partials.script')
@endsection
