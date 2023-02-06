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

  <div class="section customer-user__dashboard">
    <div class="breadcrumb">
      <span>Quản lý user</span> / <span class="current">Tổng quan user</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="noti-index">
          <div class="noti-index__wrap">
            <div class="noti-index__item">
              <p class="title">Số User Thành viên:</p>
              <p class="number">15</p>
            </div>
            <div class="noti-index__item">
              <p class="title">Số người phụ thuộc:</p>
              <p class="number">10</p>
            </div>
          </div>
        </div>
        <a href="{{ route('customers-addUser') }}" class="btn btn-primary btn-add text">
          <img src="{{ asset('img/icon-add-w.svg') }}" alt="">
          Tạo user mới
        </a>
        <div class="table-wrap">
          <div class="table-content">
            <table class="table table-bordered table-list">
              <thead>
                <tr>
                  <th class="fixed fixed-1">
                    <input type="checkbox" name="" id="">
                  </th>
                  <th class="fixed fixed-2">STT</th>
                  <th class="fixed fixed-3">Họ tên</th>
                  <th>Nội dung</th>
                  <th>Mối quan hệ</th>
                  <th>Ngày sinh</th>
                  <th>Người phụ thuộc</th>
                  <th>Ngày lập</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center fixed fixed-1">
                    <input type="checkbox" name="" id="">
                  </td>
                  <td class="text-center fixed fixed-2">1</td>
                  <td class="fixed fixed-3">
                    <a href="{{ route('customers-inforUser', ['id' => 0]) }}">Nguyễn Văn A</a>
                  </td>
                  <td class="text-center">Thu - chi</td>
                  <td class="text-center">Dì</td>
                  <td class="text-center">24/11/1991</td>
                  <td class="text-center">
                    <img src="{{ asset('img/icon-success.svg') }}" alt="">
                  </td>
                  <td class="text-center">24/11/2022</td>
                </tr>
                <tr>
                  <td class="text-center fixed fixed-1">
                    <input type="checkbox" name="" id="">
                  </td>
                  <td class="text-center fixed fixed-2">2</td>
                  <td class="fixed fixed-3">
                    <a href="{{ route('customers-inforUser', ['id' => 0]) }}">Nguyễn Văn A</a>
                  </td>
                  <td class="text-center">Thu - chi</td>
                  <td class="text-center">Dì</td>
                  <td class="text-center">24/11/1991</td>
                  <td class="text-center">
                    <img src="{{ asset('img/icon-success.svg') }}" alt="">
                  </td>
                  <td class="text-center">24/11/2022</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="box-control">
          <div class="control">
            <p class="count">4</p>
            <p class="text">Ví tài chính đang được chọn</p>
            <a href="#" class="btn btn-gray btn-delete">
              <img src="{{ asset('img/icon-delete.svg') }}" alt="">
            </a>
          </div>
          <div class="paging">
            {{-- {{ $collections->links() }} --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('product-manage.cashplan.partials.script')
@endsection
