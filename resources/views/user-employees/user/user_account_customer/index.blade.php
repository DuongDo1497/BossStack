@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/data.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pages/products.css') }}"> --}}
@endsection
@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif
  @if (session()->has('errors'))
    @include('layouts.partials.messages.errors')
  @endif

  <div class="section user-customer no-bg">
    <div class="breadcrumb">
      <span>Quản lý Data</span> / <span class="current">Danh sách User khách hàng</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="wrap">
          <h6 class="box-title">Tìm kiếm</h6>
          @include('user-employees.user.user_account_customer.partials.search-form')
        </div>
      </div>

      <div class="box box-primary">
        <div class="wrap">
          <h6 class="box-title">
            Danh sách
            <div class="box-search">
              <form action="#" method="GET">
                <div class="filter-timeline">
                  <div class="form-group">
                    <label for="">Lọc theo:</label>
                    <select class="form-control select2" name="" id="">
                      <option selected>Chọn</option>
                      <option value="">10 dòng / trang</option>
                      <option value="">25 dòng / trang</option>
                      <option value="">50 dòng / trang</option>
                      <option value="">100 dòng / trang</option>
                    </select>
                  </div>
                </div>

                <div class="control">
                  <a href="#" class="btn btn-primary btn-add">
                    <img src="{{ asset('img/icon-add-w.svg') }}" alt="">
                    Tạo mới
                  </a>
                </div>
              </form>
            </div>
          </h6>

          <table class="table table-bordered table-list">
            <thead>
              <tr>
                <th>
                  <input name="" type="checkbox" id="" onclick="">
                </th>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Quyền truy cập</th>
                <th>Ngày khởi tạo</th>
                <th>Ngày chỉnh sửa</th>
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
              @foreach ($collections as $user)
                <tr>
                  <td class="text-center fixed fixed-1">
                    <input type='checkbox' name='' id='' value="" onclick="">
                  </td>
                  <td class="text-center">{{ $i }}</td>
                  <td><a href="{{ route('usercustomers-edit', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
                  <td class="text-center">{{ $user->email }}</td>
                  <td class="text-center">{{ $user->role }}</td>
                  <td class="text-center">{{ $user->created_at == null ? '' : ConvertSQLDate($user->created_at, 1) }}</td>
                  <td class="text-center">{{ $user->updated_at == null ? '' : ConvertSQLDate($user->updated_at, 1) }}</td>
                </tr>
                @php
                  $i++;
                @endphp
              @endforeach
            </tbody>
          </table>

          <div class="box-control">
            <div class="control">
              <p class="count"><span id="checklabel">0</span></p>
              <p class="text">User khách hàng đang được chọn</p>
              <a href="#" class="btn btn-gray btn-delete">
                <img src="{{ asset('img/icon-delete.svg') }}" alt="">
              </a>
            </div>
            <div class="paging">
              {{ $collections->appends(['searchField' => $searchField, 'searchValue' => $searchValue])->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- @include('user-employees.user.user_account_customer.partials.search-form') --}}
    {{-- <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            Danh sách
            <small>(Hiển thị {{ $filter['limit'] }} dòng / trang) </small>
          </h3>
          <div class="box-tools">
            <div class="btn-group btn-group-sm">
              <a class="btn btn-default clearfix" href="{{ route('usercustomers-add') }}"><i class="fa fa-plus"
                  aria-hidden="true"></i> Tạo mới</a>
            </div>
            <div class="btn-group btn-group-sm">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-window-maximize" aria-hidden="true"></i> Hiển thị
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="{{ route('usercustomers-index', filter_data($filter, 'limit', 10)) }}">10 dòng / trang</a>
                  </li>
                  <li><a href="{{ route('usercustomers-index', filter_data($filter, 'limit', 25)) }}">25 dòng / trang</a>
                  </li>
                  <li><a href="{{ route('usercustomers-index', filter_data($filter, 'limit', 50)) }}">50 dòng / trang</a>
                  </li>
                  <li><a href="{{ route('usercustomers-index', filter_data($filter, 'limit', 100)) }}">100 dòng /
                      trang</a></li>
                </ul>
              </div>
            </div>
            <div class="btn-group btn-group-sm">
              <a class="btn btn-default" href="{{ route('usercustomers-export') }}"><i class="fa fa-download"></i> Xuất
                excel</a>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th width="1%">
                  <label>
                    <input type="checkbox" class="minimal checkbox-all">
                  </label>
                </th>
                <th>#</th>
                <th class="text-nowrap">Tên</th>
                <th class="text-nowrap">Email</th>
                <th class="text-nowrap">Quyền truy cập</th>
                <th class="text-nowrap">Ngày khởi tạo</th>
                <th class="text-nowrap">Ngày chỉnh sửa</th>
                <th class="text-nowrap">
                  <span class="lbl-action">Chức năng</span>
                  <button class="btn btn-danger btn-xs btn-block hide btn-delete-selected">Xóa <span
                      class="lbl-selected-rows-count">0</span> đã chọn</button>
                </th>
              </tr>
            </thead>
            <tbody>
              @if ($collections->count() === 0)
                <tr>
                  <td colspan="8"><b>Không có dữ liệu!!!</b></td>
                </tr>
              @endif
              @php
                $i = 1;
              @endphp
              @foreach ($collections as $user)
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="minimal checkbox-item">
                    </label>
                  </td>
                  <td>{{ $i }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role }}</td>
                  <td>{{ $user->created_at == null ? '' : ConvertSQLDate($user->created_at, 1) }}</td>
                  <td>{{ $user->updated_at == null ? '' : ConvertSQLDate($user->updated_at, 1) }}</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Thao tác <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="{{ route('usercustomers-edit', ['id' => $user->id]) }}"><i
                              class="fas fa-pencil-alt"></i> Chỉnh sửa</a></li>
                        <li>
                          <a href="javascript:void(0)" data-id="{{ $user->id }}" class="btn-delete"><i
                              class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                          <form name="form-delete-{{ $user->id }}" method="post"
                            action="{{ route('usercustomers-delete', ['id' => $user->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                          </form>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                @php
                  $i++;
                @endphp
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix text-right">
          {{ $collections->appends(['searchField' => $searchField, 'searchValue' => $searchValue])->links() }}
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div> --}}
  @endsection

  @section('scripts')
    {{-- <script>
    $(function() {
      $('.btn-delete').click(function() {
        var id = $(this).data('id');
        if (confirm('Bạn có muốn xóa không?')) {
          document.forms['form-delete-' + id].submit();
        }
      });

      @if (!empty($filter['searchFields']))
        $('#searchFields').val('{{ $filter['searchFields'] }}').trigger('change');
      @endif
    });
  </script> --}}
  @endsection
