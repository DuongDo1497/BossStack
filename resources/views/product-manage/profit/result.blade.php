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
        <table class="table table-bordered table-list">
          <thead>
            <tr>
              <th colspan="2" class="text-center">Chỉ tiêu</th>
              <th class="text-center">Số tiền</th>
              <th class="text-center">Tỉ lệ</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th colspan="2">Tổng doanh thu</th>
              <td class="text-right">{{ formatNumber($doanhthu, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right"></td>
            </tr>
            <tr>
              <th colspan="2">Tổng chi phí</th>
              <td class="text-right">{{ formatNumber($tongcongchiphi, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right">{{ formatNumber($tiletongcongchiphi, 1, 2, 1) }} <span>%</span></td>
            </tr>
            <tr>
              <th rowspan="6">Chi tiết chi phí</th>
            </tr>
            <tr>
              <th>Giá vốn hàng bán</th>
              <td class="text-right">{{ formatNumber($giavonhangban, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right">{{ formatNumber($tilegiavonhangban, 1, 2, 1) }} <span>%</span></td>
            </tr>
            <tr>
              <th>Chi phí tài chính</th>
              <td class="text-right">{{ formatNumber($chiphitaichinh, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right">{{ formatNumber($tilechiphitaichinh, 1, 2, 1) }} <span>%</span></td>
            </tr>
            <tr>
              <th>Chi phí bán hàng</th>
              <td class="text-right">{{ formatNumber($chiphibanhang, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right">{{ formatNumber($tilechiphibanhang, 1, 2, 1) }} <span>%</span></td>
            </tr>
            <tr>
              <th>Chi phí quản lý doanh nghiệp</th>
              <td class="text-right">{{ formatNumber($chiphiquanlydoanhnghiep, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right">{{ formatNumber($tilechiphiquanlydoanhnghiep, 1, 2, 1) }} <span>%</span></td>
            </tr>
            <tr>
              <th>Chi phí khác</th>
              <td class="text-right">{{ formatNumber($chiphikhac, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right">{{ formatNumber($tilechiphikhac, 1, 2, 1) }} <span>%</span></td>
            </tr>
            <tr>
              <th colspan="2">Lợi nhuận trước thuế</th>
              <td class="text-right">{{ formatNumber($loinhuantruocthue, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right">{{ formatNumber($tileloinhuantruocthue, 1, 2, 1) }} <span>%</span></td>
            </tr>
            <tr>
              <th colspan="2">Thuế thu nhập doanh nghiệp (20%)</th>
              <td class="text-right">{{ formatNumber($thuethunhapdoanhnghiep, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right">{{ formatNumber($tilethuethunhapdoanhnghiep, 1, 2, 1) }} <span>%</span></td>
            </tr>
          </tbody>

          <tfoot>
            <tr>
              <th colspan="2">Lợi nhuận sau thuế</th>
              <td class="text-right">{{ formatNumber($loinhuansauthue, 1, 0, 1) }} <span>&#8363;</span></td>
              <td class="text-right">{{ formatNumber($tileloinhuansauthue, 1, 2, 1) }} <span>%</span></td>
            </tr>
          </tfoot>
        </table>
        <br>
        @if ($error == 1)
          <div class="alert {{ $alert }}">
            {{ $infor }} <br>
            <strong>{{ $infor_ }}</strong>
          </div>
        @endif

        <div class="box-search">
          <div class="control">
            <a href="{{ route('profits-edit', ['id' => $profitbusiness_id]) }}" class="btn btn-primary btn-edit">Chỉnh
              sửa</a>
            <a href="{{ route('profits-history') }}" class="btn btn-primary btn-save">Lưu kết quả</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
