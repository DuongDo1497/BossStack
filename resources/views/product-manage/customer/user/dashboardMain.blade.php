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

  <div class="section customer-user__dashboard customer-main">
    <div class="breadcrumb">
      <span>Quản lý user</span> / <span class="current">Tổng quan user</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

  <form role="form" action="{{ route('customers-dashboardMain') }}?continue=true" method="post" name="frm" id="frm">
    {{ csrf_field() }}
    <input type='hidden' name='typereport' value=''>

    <div class="box-content">
      <div class="box box-primary">
        <div class="noti-index">
          <div class="noti-index__wrap">
            <div class="noti-index__item">
              <p class="title">Gói đăng ký:</p>
              <p class="number">{{ $service_product_name }} ( {{ $service_product_numuser }} User Thành viên )</p>
            </div>
            <div class="noti-index__item">
              <p class="title">Số User Thành viên:</p>
              <p class="number">{{ $collections->count() }}</p>
            </div>
            <div class="noti-index__item">
              <p class="title">Số người phụ thuộc:</p>
              <p class="number"><span id="checklabeldependent">0</span></p>
            </div>
          </div>
        </div>
       @if ($collections->count() < $service_product_numuser)
        <a href="{{ route('customers-addUser') }}" class="btn btn-primary btn-add text">
          <img src="{{ asset('img/icon-add-w.svg') }}" alt="">
          Tạo user mới
        </a>
       @else
          <div class="alert alert-success">Bạn đã tạo đủ số lượng {{ $collections->count() }} User Thành viên trong gói.</div><br>                         
       @endif
        <div class="table-wrap">
          <div class="table-content">
            <table class="table table-bordered table-list">
              <thead>
                <tr>
                  <th class="fixed fixed-1">
                    <input name="allbox" type="checkbox" id="allbox" onclick="CheckAll(this)">
                  </th>
                  <th class="fixed fixed-2">STT</th>
                  <th class="fixed fixed-3">Họ tên</th>
                  <th>Phân loại</th>
                  <th>Mối quan hệ/Chức vụ</th>
                  <th>Ngày sinh</th>
                  <th>Người phụ thuộc</th>
                  <th>Ngày lập</th>
                </tr>
              </thead>
              <tbody>
              @if ($collections->count() === 0)
                  <tr>
                    <td colspan="7"><b>Không có dữ liệu!!!</b></td>
                  </tr>
              @endif
              @php
                $i = 1; $countdependent = 0;
              @endphp
              @foreach ($collections as $item)
              @php
                if ($item->dependent == "1"){
                    $countdependent += 1;
                }
              @endphp

                <tr>
                  <td class="text-center fixed fixed-1">
                     <input type='checkbox' name='ids[]' id='ids[]' value="{{ $item->id }}"  onclick="CheckId(this)">
                  </td>
                  <td class="text-center fixed fixed-2">{{ $i++ }}</td>
                  <td class="fixed fixed-3">
                    <a href="{{ route('customers-inforUser', ['id' => $item->customer_id]) }}">{{ $item->fullname }}</a>
                  </td>
                  <td class="text-center">{{ $item->usercustomertype == '' ? '' : $usercustomertypes[$item->usercustomertype] }}</td>
                  <td class="text-center">{{ $item->relationshiptype == '' ? '' : $relationshiptypes[$item->relationshiptype] }}</td>
                  <td class="text-center">{{ $item->birthday == null ? '' : ConvertSQLDate($item->birthday) }}</td>
                  <td class="text-center">
                    @if ($item->dependent != null or $item->dependent == '1')
                        <img src="{{ asset('img/icon-success.svg') }}" alt="">
                    @endif
                  </td>
                  <td class="text-center">{{ $item->created_at == null ? '' : ConvertSQLDate($item->created_at, 1) }}</td>
                </tr>
              @endforeach                
              </tbody>
            </table>
          </div>
        </div>
        <div class="box-control">
            <div class="control">
              <p class="count"><span id="checklabel">0</span></p>
              <p class="text">tài khoản đang được chọn</p>
              <a href="javascript:processDeleteReports('frm', 'delete')" class="btn btn-gray btn-delete">
                <img src="{{ asset('img/icon-delete.svg') }}" alt="">
              </a>
            </div>
          <div class="paging">
            {{ $collections->links() }} 
          </div>
        </div>
      </div>
    </div>
  </form>    
  </div>
@endsection

@section('scripts')
<script language="javascript">
var checklabeldependent = document.getElementById("checklabeldependent");
checklabeldependent.innerHTML = '{{ $countdependent }}';  
</script>
  @include('product-manage.customer.user.partials.script')
@endsection
