@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/cashasset.css') }}">
@endsection

@section('content')
  <div class="section cashasset-history">
    <div class="breadcrumb">
      <span>Lưu chuyển tiền tệ</span> / <a href="{{ route('cashassets-index') }}" class="prev">Quản lý Lưu chuyển tiền
        tệ</a>
      / <span class="current">Lịch sử Lưu chuyển tiền tệ</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <table class="table table-bordered table-list">
          <thead>
            <tr>
              <th>STT</th>
              <th>Dòng tiền</th>
              <th>Phân loại</th>
              <th>Chi tiết</th>
              <th>Ngày</th>
            </tr>
          </thead>
          <tbody>
            @php
              $i = 1;
            @endphp
            @foreach ($collections as $cashasset)
              <tr>
                <td class="text-center">{{ $i++ }}</td>
                <td>
                  <p>
                    {{ $cashasset->assetname }}
                  </p>
                  <p>Số tiền: {{ formatNumber($cashasset->amount, 1, 0, 1) }}</p>
                </td>
                <td class="text-left">{{ $cashasset->config_types_name }}</td>
                <td class="text-left">{{ $cashasset->config_type_details_name }}</td>
                <td class="text-center">
                  {{ $cashasset->assetdate == null ? '' : ConvertSQLDate($cashasset->assetdate) }}
                </td>
              </tr>
            @endforeach

            @foreach ($listaccounts as $cashasset)
              @php
                $cashname = 'Dòng tiền mục tiêu';
                if ($cashasset->accountno == $primaryaccount) {
                    $requireamount = $cashasset->amount;
                    $cashname = 'Dòng tiền tổng';
                } else {
                    $requireamount = $cashasset->requireamount;
                    $cashname = 'Dòng tiền mục tiêu';
                }
              @endphp
              <tr>
                <td class="text-center">{{ $i++ }}</td>
                <td>{{ $cashasset->accountname }}
                  &nbsp;&nbsp;&nbsp;
                  <br>Số tiền: {{ formatNumber($requireamount, 1, 0, 1) }}
                </td>
                <td>{{ $cashname }}</td>
                <td>Mã ví {{ $cashasset->accountno }} </td>
                <td class="text-center">
                  {{ $cashasset->accountdate == null ? '' : ConvertSQLDate($cashasset->accountdate) }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('product-manage.cashasset.partials.script')
@endsection
