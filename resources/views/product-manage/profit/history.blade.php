@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/profit.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section profit-history">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <a class="prev" href="{{ route('profits-add') }}">Tính lợi nhuận kinh doanh</a> /
      <span class="current">Lịch sử</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <table class="table table-bordered table-list">
          <thead>
            <tr>
              <th>STT</th>
              <th>Chi phí</th>
              <th>Doanh thu</th>
              <th>Thuế TNDN (20%)</th>
              <th>Lợi nhuận</th>
              <th>Thời gian</th>
            </tr>
          </thead>
          <tbody>
            <td>01</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>24/11/2022 09:58:24</td>
          </tbody>
          <tbody>
            <td>02</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>24/11/2022 09:58:24</td>
          </tbody>
          <tbody>
            <td>03</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>24/11/2022 09:58:24</td>
          </tbody>
          <tbody>
            <td>04</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>18,010,000,000 VND</td>
            <td>24/11/2022 09:58:24</td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
