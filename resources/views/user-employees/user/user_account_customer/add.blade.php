@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/data.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/pages/products.css') }}"> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section user-customer__add">
    <div class="breadcrumb">
      <span>Quản lý Data</span> / <a href="{{ route('usercustomers-index') }}" class="prev">Danh sách User khách hàng</a>
      / <span class="current">Thêm mới</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form method="post" action="{{ route('usercustomers-store') }}" role="form" id="frm">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value=''>
      <div class="box-content">
        <div class="box box-primary">
          <div class="box-form">
            <div class="form-group">
              <label for="customer_id">Mã khách hàng<span>*</span>:</label>
              <select class="form-control select2" id="customer_id" name="customer_id" onchange="processChanged(this)"
                required>
                <option selected>Chọn mã khách hàng</option>
                @foreach ($customers as $item)
                  @if ($item->id == old('customer_id'))
                    <option value="{{ $item->id . '-' . $item->fullname . '-' . $item->email }}" selected>
                      {{ '[' . $item->customercode . '] ' . $item->fullname . ' - ' . $item->email }}</option>
                  @else
                    <option value="{{ $item->id . '-' . $item->fullname . '-' . $item->email }}">
                      {{ '[' . $item->customercode . '] ' . $item->fullname . ' - ' . $item->email }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="name">Tên người dùng<span>*</span>:</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"
                placeholder="Nhập tên" required>
            </div>
            <div class="form-group">
              <label for="email">Email đăng nhập<span>*</span>:</label>
              <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}"
                placeholder="Nhập email" required>
            </div>
            <div class="form-group">
              <label for="password">Mật khẩu<span>*</span>:</label>
              <input type="password" class="form-control" name="password" id="password" value=""
                placeholder="Nhập mật khẩu" required>
            </div>
            <div class="form-group">
              <label for="role">Quyền truy cập<span>*</span>:</label>
              <select class="form-control select2" id="role" name="role" required>
                <option selected>Chọn quyền truy cập</option>
                @foreach ($applicationroles as $item)
                  @if ($item->code == old('role'))
                    <option value="{{ $item->code }}" selected>{{ $item->code . '. ' . $item->name }}</option>
                  @else
                    <option value="{{ $item->code }}">{{ $item->code . '. ' . $item->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="blocked">Trạng thái tài khoản<span>*</span>:</label>
              <select class="form-control select2" id="blocked" name="blocked" required>
                <option selected>Chọn trạng thái tài khoản</option>
                @foreach ($accounttypes as $key => $value)
                  @if ($key == old('blocked'))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="begin_at">Thời hạn từ ngày<span>*</span>:</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="begin_at" id="begin_at" value="{{ old('begin_at') }}"
                    placeholder="Chọn ngày" required>
                  <span class="input-group-addon">
                    <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                  </span>
                </div>
              </div>

              <div class="form-group">
                <label for="finish_at">đến ngày<span>*</span>:</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="finish_at" id="finish_at"
                    value="{{ old('finish_at') }}" placeholder="Chọn ngày" required>
                  <span class="input-group-addon">
                    <img src="{{ asset('img/icon-calender.svg') }}" alt="">
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="box-search">
            <div class="control">
              <a href="{{ route('usercustomers-index') }}" class="btn btn-primary btn-cancel">Hủy bỏ</a>
              <button type="submit" class="btn btn-primary btn-save" onclick="processReports('frm', 'save')">Lưu</button>
              <button type="submit" class="btn btn-primary btn-save" onclick="processReports('frm', 'mail')">Lưu & Gửi
                mail</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  {{-- <div class="row">
    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm mới tài khoản đăng nhập</h3>
        </div>
        <form method="post" action="{{ route('usercustomers-store') }}" role="form" id="frm">
          {{ csrf_field() }}
          <input type='hidden' name='typereport' value=''>
          <div class="box-body">
            <div class="form-group">
              <label>MÃ KHÁCH HÀNG <small class="text-danger text"> (*)</small></label>
              <select class="form-control" name="customer_id" id="customer_id" onchange="processChanged(this)">
                <option value=""></option>
                @foreach ($customers as $item)
                  @if ($item->id == old('customer_id'))
                    <option value="{{ $item->id . '-' . $item->fullname . '-' . $item->email }}" selected>
                      {{ '[' . $item->customercode . '] ' . $item->fullname . ' - ' . $item->email }}</option>
                  @else
                    <option value="{{ $item->id . '-' . $item->fullname . '-' . $item->email }}">
                      {{ '[' . $item->customercode . '] ' . $item->fullname . ' - ' . $item->email }}</option>
                  @endif
                @endforeach
              </select>
            </div>

            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
              <label>Tên người dùng <small class="text-danger text"> (*)</small></label>
              <input type="text" class="form-control" name="name" id="name" tabindex="1"
                value="{{ old('name') }}">
              @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Email đăng nhập <small class="text-danger text"> (*)</small></label>
              <input type="text" class="form-control" name="email" id="email" tabindex="2"
                value="{{ old('email') }}">
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Mật khẩu <small class="text-danger text"> (*)</small></label>
              <input type="password" class="form-control" name="password" tabindex="3" value="">
            </div>
            <div class="form-group">
              <label>Quyền truy cập <small class="text-danger text"> (*)</small></label>
              <select class="form-control" name="role">
                <option value=""></option>
                @foreach ($applicationroles as $item)
                  @if ($item->code == old('role'))
                    <option value="{{ $item->code }}" selected>{{ $item->code . '. ' . $item->name }}</option>
                  @else
                    <option value="{{ $item->code }}">{{ $item->code . '. ' . $item->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Trạng thái tài khoản <small class="text-danger text"> (*)</small></label>
              <select class="form-control select" name="blocked">
                @foreach ($accounttypes as $key => $value)
                  @if ($key == old('blocked'))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
              @if ($errors->has('blocked'))
                <span class="text-danger">{{ $errors->first('blocked') }}</span>
              @endif
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                  <label>Thời hạn từ ngày <small class="text-danger text"> (*)</small></label>
                </div>
                <div class="col-md-3">
                  <input type='text' class="form-control" name="begin_at" id='begin_at'
                    value="{{ old('begin_at') }}" />
                  @if ($errors->has('begin_at'))
                    <span class="text-danger">{{ $errors->first('begin_at') }}</span>
                  @endif
                </div>
                <div class="col-md-2">
                  <label>đến ngày <small class="text-danger text"> (*)</small></label>
                </div>
                <div class="col-md-3">
                  <input type='text' class="form-control" name="finish_at" id='finish_at'
                    value="{{ old('finish_at') }}" />
                  @if ($errors->has('finish_at'))
                    <span class="text-danger">{{ $errors->first('finish_at') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <br><br>
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label>Gói dịch vụ đang kích hoạt</label>
                </div>
                <div class="col-md-12">
                  <select class="form-control select" name="service_product_id">
                    @foreach ($serviceproduct as $item)
                      @if ($item->id == old('service_product_id'))
                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                      @else
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endif
                    @endforeach
                  </select>
                  @if ($errors->has('service_product_id'))
                    <span class="text-danger">{{ $errors->first('service_product_id') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Trạng thái gói dịch vụ </label>
              <select class="form-control select" name="approved_product">
                @foreach ($accountproductstatus as $key => $value)
                  @if ($key == old('approved_product'))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
              @if ($errors->has('approved_product'))
                <span class="text-danger">{{ $errors->first('approved_product') }}</span>
              @endif
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                  <label>Thời hạn gói dịch vụ từ ngày</label>
                </div>
                <div class="col-md-3">
                  <input type='text' class="form-control" name="begin_at_product" id='begin_at_product'
                    value="{{ old('begin_at_product') }}" />
                  @if ($errors->has('begin_at_product'))
                    <span class="text-danger">{{ $errors->first('begin_at_product') }}</span>
                  @endif
                </div>
                <div class="col-md-2">
                  <label>đến ngày</label>
                </div>
                <div class="col-md-3">
                  <input type='text' class="form-control" name="finish_at_product" id='finish_at_product'
                    value="{{ old('finish_at_product') }}" />
                  @if ($errors->has('finish_at_product'))
                    <span class="text-danger">{{ $errors->first('finish_at_product') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <br><br>
            <div class="form-group">
              <font size='2' color='#000000'><b><u>Ghi chú:</u></font></b><br>
              <font size='2' color='#000000'>&nbsp;- Nhấn nút <font color='#ff0000'><b>Lưu</b></font> hệ thống sẽ
                lưu thông tin chỉnh sửa tài khoản vào hệ thống.</font><br>
              <font size='2' color='#000000'>&nbsp;- Nhấn nút <font color='#ff0000'><b>Lưu & Gửi mail</b></font>
                hệ thống sẽ lưu và gửi mail thông báo mật khẩu đăng nhập mới về địa chỉ email đăng nhập của khách hàng đã
                đăng ký.</font>
            </div>

          </div>
      </div>

      <button type="submit" style="width: 20%;" class="btn btn-primary btn-save" tabindex="9"
        onclick="processReports('frm', 'save')">Lưu</button>
      <button type="submit" style="width: 20%;" class="btn btn-primary btn-save" tabindex="10"
        onclick="processReports('frm', 'mail')">Lưu & Gửi mail</button>
      <a href="{{ route('usercustomers-index') }}" style="width: 20%;" class="btn btn-default btn-cancel"
        tabindex="11">Trở về</a>
      </form>
    </div>

  </div> --}}
@endsection

@section('scripts')
  @include('user-employees.user.user_account_customer.partials.script')
@endsection
