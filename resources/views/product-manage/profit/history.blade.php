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
              <th>Tổng chi phí</th>
              <th>Tổng doanh thu</th>
              <th>Thuế TNDN (20%)</th>
              <th>Lợi nhuận</th>
              <th>Thời gian</th>
            </tr>
          </thead>
          <tbody>
            @php
              $i = 1;
            @endphp
            @foreach ($collections as $item)
              <tr>
                <td class="text-center">{{ $i++ }}</td>
                <td style="text-align: right;"><span
                    class="text-error">{{ formatNumber($item->chiphitaichinh + $item->chiphibanhang + $item->chiphiquanlydoanhnghiep + $item->chiphikhac, 1, 0, 1) }}</span>
                  &#8363;</td>
                <td style="text-align: right;"><span
                    class="text-success">{{ formatNumber($item->doanhthu, 1, 0, 1) }}</span> &#8363;</td>
                <td style="text-align: right;">{{ formatNumber($item->thuethunhapdoanhnghiep, 1, 0, 1) }}</td>
                <td style="text-align: right;"><span
                    class="text-success">{{ formatNumber($item->loinhuan, 1, 0, 1) }}</span> &#8363;</td>
                <td class="text-center">
                  {{ $item->transdate == null ? '' : ConvertSQLDate($item->transdate) }}
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
