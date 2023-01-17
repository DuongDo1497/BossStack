@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/invests.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/pages/style_admin.css') }}"> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section invest-manage no-bg">
    <div class="breadcrumb">
      <span>Quản lý khách hàng</span> / <span class="current">Blog</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="wrap">
          <h6 class="box-title">Tìm kiếm</h6>
          @include('product-manage.invest.partials.search-form')
        </div>
      </div>

      <div class="box box-primary">
        <div class="wrap">
          <h6 class="box-title flex">
            Danh sách blog
            <a href="{{ route('invests-add') }}" class="btn btn-primary btn-add">
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
                <th>Tiêu đề</th>
                <th>Loại</th>
                <th>Ngày đăng</th>
                <th>Tác giả</th>
                <th>Hiển thị</th>
              </tr>
            </thead>

            <tbody>
              @if ($collections->count() === 0)
                <tr>
                  <td colspan="7"><b>Không có dữ liệu</b></td>
                </tr>
              @endif
              @php
                $i = 1;
              @endphp
              @foreach ($collections as $model)
                <tr>
                  <td class="text-center fixed fixed-1">
                    <input type="checkbox" name="" id="">
                  </td>
                  <td class="text-center">{{ $i++ }}</td>
                  <td>
                    <a href="{{ route('invests-edit', ['id' => $model->id]) }}">{{ $model->newstitle }}</a>
                  </td>
                  <td>{{ $newstypes[$model->newstype] }}</td>
                  <td class="text-center">{{ $model->newsdate == null ? '' : ConvertSQLDate($model->newsdate) }}</td>
                  <td class="text-center">{{ $model->author }}</td>
                  <td class="text-center">
                    <span class="display-status {{ $model->hidden == 1 ? 'active' : '' }}"></span>
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
              {{ $collections->render('product-manage.invest.partials.pagination') }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- @include('product-manage.invest.partials.search-form')

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách tin tức</h3>
          <div class="box-tools">
            <a href="{{ route('invests-add') }}" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Tạo
              mới</a>
          </div>
        </div>

        <div class="box-body no-padding" style="overflow: auto;">
          <table class="table table-hover">
            <thead>
              <tr>
                <th width="5%" style="text-align: center;">STT</th>
                <th width="20%" style="text-align: center;">Tiêu đề</th>
                <th width="18%" style="text-align: center;">Loại</th>
                <th width="15%" style="text-align: center;">Ngày đăng</th>
                <th width="10%" style="text-align: center;">Tác giả</th>
                <th width="10%" style="text-align: center;">Hiển thị/Ẩn</th>
                <th width="10%" style="text-align: center;">Thao tác</th>
              </tr>
            </thead>

            <tbody>
              @if ($collections->count() === 0)
                <tr>
                  <td colspan="8"><b>Không có dữ liệu</b></td>
                </tr>
              @endif
              @php
                $i = 1;
              @endphp
              @foreach ($collections as $model)
                <tr>
                  <td style="text-align: center;" class="text-nowrap">{{ $i++ }}</td>
                  <td style="text-align: left;" class="text-nowrap">{{ $model->newstitle }}</td>
                  <td style="text-align: left;" class="text-nowrap">{{ $newstypes[$model->newstype] }}</td>
                  <td style="text-align: center;" class="text-nowrap">
                    {{ $model->newsdate == null ? '' : ConvertSQLDate($model->newsdate) }}</td>
                  <td style="text-align: left;" class="text-nowrap">{{ $model->author }}</td>
                  <td style="text-align: center;" class="text-nowrap">
                    @if ($model->hidden == 1)
                      <img src="{{ asset('image/check.gif') }}">
                    @endif
                  </td>
                  <td style="text-align: center;" class="text-nowrap">
                    <a href="{{ route('invests-edit', ['id' => $model->id]) }}"><i class="fas fa-pencil-alt"
                        style="margin-right: 10px;"></i></a>
                    <a href="javascript:void(0)" data-id="{{ $model->id }}" class="btn-delete"><i class="fa fa-trash"
                        aria-hidden="true"></i></a>
                    <form style="margin: 0;" name="form-delete-{{ $model->id }}" method="post"
                      action="{{ route('invests-delete', ['id' => $model->id]) }}">
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
          {{ $collections->render('product-manage.invest.partials.pagination') }}
        </div>
      </div>
    </div>
  </div> --}}
@endsection

@section('scripts')
  @include('product-manage.invest.partials.script')
@endsection
