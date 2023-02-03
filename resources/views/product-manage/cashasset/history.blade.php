@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/cashasset.css') }}">
@endsection

@section('content')
  <div class="section cashasset-history">
    <div class="breadcrumb">
      <span>Danh mục tài sản - nợ</span> / <a href="{{ route('cashassets-index') }}" class="prev">Quản lý tài sản - nợ</a>
      / <span class="current">Lịch sử tài sản - nợ</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="table-wrap">
          <div class="table-content">
            <table class="table table-bordered table-list">
              <thead>
                <tr>
                  <th class="fixed fixed-1">STT</th>
                  <th class="fixed fixed-2">Tài sản</th>
                  <th class="fixed fixed-3">Phân loại</th>
                  <th>Ví</th>
                  <th>Chi tiết</th>
                  <th>Ngày</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center fixed fixed-1">1</td>
                  <td class="fixed fixed-2">
                    <p>Xe máy</p>
                    <p>Số tiền: 10.000.000</p>
                  </td>
                  <td class="fixed fixed-3">Nợ tín chấp</td>
                  <td class="text-center">1322163965</td>
                  <td>Nợ vay mua nhà</td>
                  <td class="text-center">24/11/2022</td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('product-manage.cashasset.partials.script')
@endsection
