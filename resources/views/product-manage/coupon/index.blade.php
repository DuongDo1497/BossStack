@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/coupon.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif
  @if (session()->has('errors'))
    @include('layouts.partials.messages.errors')
  @endif

  <div class="section coupon-index no-bg">
    <div class="breadcrumb">
      <span>Quản lý khách hàng</span> / <span class="current">Coupon</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="wrap">
          <h6 class="box-title">Tìm kiếm</h6>
          @include('product-manage.coupon.partials.search-form')
        </div>
      </div>

      <div class="box box-primary">
        <div class="wrap">
          <h6 class="box-title flex">
            Danh sách mã giảm giá
            <a href="{{ route('coupons-add') }}" class="btn btn-primary btn-add">
              <img class="icon" src="{{ asset('img/icon-add-w.svg') }}" alt="">
              Tạo mới
            </a>
          </h6>

          <table class="table table-bordered table-list">
            <thead>
              <tr>
                <th>
                  <input type="checkbox" name="" id="">
                </th>
                <th>STT</th>
                <th>Loại</th>
                <th>Mã giảm giá</th>
                <th>% giảm giá</th>
                <th>Số lượng</th>
                <th>Ghi chú</th>
                <th>Trạng thái</th>
                <th>Gửi mail</th>
              </tr>
            </thead>

            <tbody>
              @if ($collections->count() === 0)
                <tr>
                  <td colspan="9"><b>Không có dữ liệu</b></td>
                </tr>
              @endif
              @php
                $i = 1;
              @endphp
              @foreach ($collections as $coupon)
                <tr>
                  <td class="text-center fixed fixed-1">
                    <input type="checkbox" name="" id="">
                  </td>
                  <td class="text-center">{{ $coupon->id }}</td>
                  <td class="text-center">{{ $coupontypes[$coupon->typecoupon] }}</td>
                  <td class="text-center">
                    <a href="{{ route('coupons-edit', ['id' => $coupon->id]) }}">{{ $coupon->key }}</a>
                  </td>
                  <td class="text-center">{{ $coupon->percent }}</td>
                  <td>
                    <ul>
                      <li>Tổng: {{ $coupon->quantity }}</li>
                      <li>Đã sử dụng: {{ $coupon->quantity - $coupon->quantitied }}</li>
                      <li>Chưa sử dụng: {{ $coupon->quantitied }}</li>
                    </ul>
                  </td>
                  <td class="text-center">{{ $coupon->description }}</td>
                  <td class="text-center">
                    @if ($coupon->status == 1)
                      <span class="status status-success">{{ $couponstatus[$coupon->status] }}</span>
                    @elseif($coupon->status == 2)
                      <span class="status status-error">{{ $couponstatus[$coupon->status] }}</span>
                    @else
                      <span class="status status-normal">{{ $couponstatus[$coupon->status] }}</span>
                    @endif
                  </td>
                  <td class="text-center">
                    @if ($coupon->quantitied > 0)
                      <a href="{{ route('coupons-mail', ['id' => $coupon->id]) }}" title='Gửi mail mã coupon'>
                        <img class="icon" src="{{ asset('img/icon-send-mail.svg') }}" alt="">
                      </a>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          <div class="box-control">
            <div class="control">
              <p class="count">4</p>
              <p class="text">Ví tài chính đang được chọn</p>
              <a href="#" class="btn btn-gray btn-delete">
                <img src="{{ asset('img/icon-delete.svg') }}" alt="">
              </a>
              <a href="#" class="btn btn-gray btn-edit">
                <img src="{{ asset('img/icon-edit.svg') }}" alt="">
              </a>
            </div>
            <div class="paging">
              {{ $collections->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">{{ 'Danh sách mã giảm giá' }}</h3>
          <div class="box-tools">
            <div class="btn-group btn-group-sm">
              <a href="{{ route('coupons-add') }}" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i>
                {{ 'Tạo mới' }}</a>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th style="text-align: center;" class="text-nowrap" width="2.5%">{{ 'STT' }}</th>
                <th style="text-align: center;" class="text-nowrap" width="10%">{{ 'Loại' }}</th>
                <th style="text-align: center;" class="text-nowrap" width="10%">{{ 'Mã giảm giá' }}</th>
                <th style="text-align: center;" class="text-nowrap" width="10%">{{ '% giảm giá' }}</th>
                <th style="text-align: center;" class="text-nowrap" width="17%">{{ 'Số lượng' }}</th>
                <th style="text-align: center;" class="text-nowrap" width="15%">{{ 'Ghi chú' }}</th>
                <th style="text-align: center;" class="text-nowrap" width="13%">{{ 'Trạng thái' }}</th>
                <th style="text-align: center;" class="text-nowrap" width="10%">{{ 'Gửi mail' }}</th>
                <th style="text-align: center;" class="text-nowrap">{{ 'Chức năng' }}</th>
              </tr>
            </thead>
            <tbody>
              @if ($collections->count() === 0)
                <tr>
                  <td colspan="9"><b>{{ 'Không có dữ liệu' }}!!!</b></td>
                </tr>
              @endif
              @foreach ($collections as $coupon)
                <tr class="table-customer">
                  <td style="text-align: center;" class="text-nowrap">{{ $coupon->id }}</td>
                  <td class="text-nowrap">{{ $coupontypes[$coupon->typecoupon] }}</td>
                  <td class="text-nowrap">{{ $coupon->key }}</td>
                  <td style="text-align: center;" class="text-nowrap">{{ $coupon->percent }}</td>
                  <td style="text-align: left;" class="text-nowrap">- Tổng: {{ $coupon->quantity }} <br> - Đã sử dụng:
                    {{ $coupon->quantity - $coupon->quantitied }} <br> - Chưa sử dụng: {{ $coupon->quantitied }}</td>
                  <td class="text-nowrap">{{ $coupon->description }}</td>
                  <td style="text-align: center;" class="text-nowrap">
                    @if ($coupon->status == 1)
                      <b class="btn-success">{{ $couponstatus[$coupon->status] }}</b>
                    @elseif($coupon->status == 2)
                      <b class="btn-danger">{{ $couponstatus[$coupon->status] }}</b>
                    @else
                      <b class="btn-info">{{ $couponstatus[$coupon->status] }}</b>
                    @endif
                  </td>
                  <td style="text-align: center;" class="text-nowrap">
                    @if ($coupon->quantitied > 0)
                      <a href="{{ route('coupons-mail', ['id' => $coupon->id]) }}" title='Gửi mail mã coupon'><i
                          class="fa fa-envelope" style="margin-right: 10px;"></i></a>
                    @endif
                  </td>
                  <td style="text-align: center;" class="text-nowrap">
                    <div class="btn-group">
                      <a href="{{ route('coupons-edit', ['id' => $coupon->id]) }}" title='Sửa'><i
                          class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a>
                      <a href="javascript:void(0)" data-id="{{ $coupon->id }}" title='Xóa' class="btn-delete"><i
                          class="fa fa-trash" aria-hidden="true"></i></a>
                      <form name="form-delete-{{ $coupon->id }}" method="post"
                        action="{{ route('coupons-delete', ['id' => $coupon->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                      </form>
                    </div>
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
  </div> --}}
@endsection

{{-- @section('scripts')
  <script>
    $(function() {
      $('.btn-delete').click(function() {
        var id = $(this).data('id');
        swal({
            title: "{{ trans('home.Bạn có chắc không?') }}",
            text: "{{ trans('home.Nội dung xóa sẽ được đưa vào thùng rác') }}",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((value) => {
            console.log(value);
            if (value) {
              document.forms['form-delete-' + id].submit();
            }
          });
      });

      @if (!empty($filter['searchFields']))
        $('#searchFields').val('{{ $filter['searchFields'] }}').trigger('change');
      @endif
    });
  </script>
@endsection --}}
