@extends('layouts.master')

@section('head')
  {{-- <link rel="stylesheet" href="{{ asset('css/pages/products.css') }}"> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section report-manage">
    <div class="breadcrumb">
      <span>Quản lý khách hàng</span> / <a href="#" class="prev">Sản phẩm</a> / <span
        class="current">{{ $title->sub_heading }}</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <table class="table table-bordered table-list">
          <thead>
            <tr>
              <th>
                <input type="checkbox" name="" id="">
              </th>
              <th>STT</th>
              <th>Tên khách hàng</th>
              <th>Email</th>
              <th>Điện thoại</th>
              <th>Ngày đăng ký</th>
              <th>Công ty</th>
              <th>Quy mô</th>
              <th>Chức vụ</th>
              <th>Khóa học</th>
              <th>Giải pháp</th>
            </tr>
          </thead>

          <tbody>
            @if ($collections->count() === 0)
              <tr>
                <td colspan="11"><b>Không có dữ liệu!!!</b></td>
              </tr>
            @endif
            @php
              $i = 1;
            @endphp
            @foreach ($collections as $customer)
              <tr>
                <td class="text-center fixed fixed-1">
                  <input type="checkbox" name="" id="">
                </td>
                <td class="text-center">{{ $i++ }}</td>
                <td class="text-center">{{ $customer->fullname }}</td>
                <td class="text-center">{{ $customer->email }}</td>
                <td class="text-center">{{ $customer->phone }}</td>
                <td class="text-center">
                  {{ $customer->registerdate == null ? '' : ConvertSQLDate($customer->registerdate) }}
                </td>
                <td class="text-center">{{ $customer->content }}</td>
                <td class="text-center">{{ $companytypes[$customer->companytype] }}</td>
                <td class="text-center">{{ $customer->title }}</td>
                <td class="text-center">{{ $coursetype[$customer->course] }}</td>
                <td class="text-center">{{ $coursetypedetail[$customer->solution] }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <div class="box-control">
          <div class="control">
            <p class="count">4</p>
            <p class="text">User khách hàng đang được chọn</p>
            <a href="#" class="btn btn-gray btn-delete">
              <img src="{{ asset('img/icon-delete.svg') }}" alt="">
            </a>
          </div>
          <div class="paging">
            {{ $collections->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">DANH SÁCH ĐĂNG KÝ KHÓA HỌC</h3>
          <div class="box-tools">
            <div class="btn-group btn-group-sm">
              <a class="btn btn-default"
                href="{{ route('report-export', ['course' => $course, 'solution' => $solution]) }}"><i
                  class="fa fa-download"></i> Xuất excel</a>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
                <th style="text-align: center;" class="text-nowrap" width="15%">TÊN KHÁCH HÀNG</th>
                <th style="text-align: center;" class="text-nowrap">EMAIL</th>
                <th style="text-align: center;" class="text-nowrap">ĐIỆN THOẠI</th>
                <th style="text-align: center;" class="text-nowrap">NGÀY ĐĂNG KÝ</th>
                <th style="text-align: center;" class="text-nowrap">CÔNG TY</th>
                <th style="text-align: center;" class="text-nowrap">QUY MÔ</th>
                <th style="text-align: center;" class="text-nowrap">CHỨC VỤ</th>
                <th style="text-align: center;" class="text-nowrap">KHÓA HỌC</th>
                <th style="text-align: center;" class="text-nowrap">GIẢI PHÁP</th>
                <th style="text-align: center;" width="10%">CHỨC NĂNG</th>
              </tr>
            </thead>
            <tbody>
              @if ($collections->count() === 0)
                <tr>
                  <td colspan="7"><b>Không có dữ liệu!!!</b></td>
                </tr>
              @endif
              @php
                $i = 1;
              @endphp
              @foreach ($collections as $customer)
                <tr class="table-customer">
                  <td style="text-align: center;" class="text-nowrap">{{ $i++ }}</td>
                  <td style="text-align: left;" class="text-nowrap">{{ $customer->fullname }}</td>
                  <td style="text-align: left;" class="text-nowrap">{{ $customer->email }}</td>
                  <td style="text-align: left;" class="text-nowrap">{{ $customer->phone }}</td>
                  <td style="text-align: center;" class="text-nowrap">
                    {{ $customer->registerdate == null ? '' : ConvertSQLDate($customer->registerdate) }}</td>
                  <td style="text-align: left;" class="text-nowrap">{{ $customer->content }}</td>
                  <td style="text-align: left;" class="text-nowrap">{{ $companytypes[$customer->companytype] }}</td>
                  <td style="text-align: left;" class="text-nowrap">{{ $customer->title }}</td>
                  <td style="text-align: left;" class="text-nowrap">
                    {{ $coursetype[$customer->course] }}
                  </td>
                  <td style="text-align: left;" class="text-nowrap">
                    {{ $coursetypedetail[$customer->solution] }}
                  </td>
                  <td style="text-align: center;" class="text-nowrap">
                    <a href="javascript:void(0)" data-id="{{ $customer->id }}" class="btn-delete" title='Xóa'><i
                        class="fa fa-trash" aria-hidden="true"></i></a>
                    <form name="form-delete-{{ $customer->id }}" method="post"
                      action="{{ route('report-delete', ['id' => $customer->id]) }}">
                      {{ csrf_field() }}
                      {{ method_field('delete') }}
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix text-right">
          {{ $collections->links() }}
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>

  <a href="{{ route('dashboard') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a> --}}
@endsection

@section('scripts')
  @include('product-manage.report.partials.script')
@endsection
