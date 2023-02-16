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
        <div class="table-wrap">
          <div class="table-content">
            <table class="table table-bordered table-list">
              <thead>
                <tr>
                  <th class="fixed fixed-1">STT</th>
                  <th class="fixed fixed-2">Dòng tiền</th>
                  <th class="fixed fixed-3">Phân loại</th>
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
                    <td class="text-center fixed fixed-2">{{ $i++ }}</td>
                    <td class="fixed fixed-3">
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
                    <td style="text-align: center;" class="text-nowrap">{{ $i++ }}</td>
                    <td style="text-align: left;" class="text-nowrap">{{ $cashasset->accountname }}
                      &nbsp;&nbsp;&nbsp;
                      <br>Số tiền: {{ formatNumber($requireamount, 1, 0, 1) }}
                    </td>
                    <td style="text-align: left;" class="text-nowrap">{{ $cashname }}</td>
                    <td style="text-align: left;" class="text-nowrap">Mã ví {{ $cashasset->accountno }} </td>
                    <td style="text-align: center;" class="text-nowrap">
                      {{ $cashasset->accountdate == null ? '' : ConvertSQLDate($cashasset->accountdate) }}
                    </td>
                  </tr>
                @endforeach
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
