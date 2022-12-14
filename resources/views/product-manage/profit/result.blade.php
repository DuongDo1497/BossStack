@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/profit.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section profit-result">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <a class="prev" href="{{ route('profits-add') }}">Tính lợi nhuận kinh doanh</a> /
      <span class="current">Kết quả</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th colspan="2" class="text-center">Doanh thu</th>
              <td>81,910,000,000 <span>VND</span></td>
            </tr>
            <tr>
              <th rowspan="6">Chi phí</th>
            </tr>
            <tr>
              <th class="light">Giá vốn hàng bán (biến phí)</th>
              <td>81,910,000,000 <span>VND</span></td>
            </tr>
            <tr>
              <th class="light">Chi phí quản lý doanh nghiệp</th>
              <td>81,910,000,000 <span>VND</span></td>
            </tr>
            <tr>
              <th class="light">Chi phí bán hàng</th>
              <td>81,910,000,000 <span>VND</span></td>
            </tr>
            <tr>
              <th class="light">Chi phí tài chính</th>
              <td>81,910,000,000 <span>VND</span></td>
            </tr>
            <tr>
              <th class="light">Chi phí khác</th>
              <td>81,910,000,000 <span>VND</span></td>
            </tr>
            <tr>
              <th colspan="2" class="text-center">Thuế thu nhập doanh nghiệp (20%) (biến phí)</th>
              <td>81,910,000,000 <span>VND</span></td>
            </tr>
            <tr>
              <th colspan="2" class="text-center">Lợi nhuận</th>
              <td>81,910,000,000 <span>VND</span></td>
            </tr>
          </tbody>
        </table>
        <div class="box-search">
          <div class="control">
            <a href="{{ route('profits-add') }}" class="btn btn-primary btn-edit">Chỉnh sửa</a>
            <button type="submit" class="btn btn-primary btn-save">Lưu kết quả</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
