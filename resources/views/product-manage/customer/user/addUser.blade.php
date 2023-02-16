@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/user.css') }}">
@endsection

@section('content')
  <div class="section customer-user__add">
    <div class="breadcrumb">
      <span>Quản lý user</span> / <span class="current">Tạo user mới</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    @if (session()->has('success'))
      @include('layouts.partials.messages.success')
    @endif

    @if (isset($infor))
      @include('layouts.partials.messages.infor')
    @endif

    <form role="form" action="{{ route('customers-storeUser') }}?continue=true" method="post" id="frm">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value='{{ $typereport }}'>
      <input type='hidden' name='rolemembertype' value='1'>
      <input type='hidden' name='type_user' value='1'>
      <input type='hidden' name='customer_id_parent' value='{{ $customer_id }}'>

      <div class="box-content">
        <div class="box box-primary">
          <div class="box-form">
            <div class="form-group">
              <label for="fullname">Họ và tên<span>*</span>:</label>
              <input type="text" class="form-control" name="fullname" id="fullname" value="{{ old('fullname') == '' ? $fullname : old('fullname') }}"
                placeholder="Nhập..." required>
              @if ($errors->has('fullname'))
                <span class="text-danger">{{ $errors->first('fullname') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="phone">Số điện thoại<span>*</span>:</label>
              <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') == '' ? $phone : old('phone') }}"
                placeholder="Nhập..." required>
              @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="email">Email<span>*</span>:</label>
              <input type="email" class="form-control" name="email" id="email" value="{{ old('email') == '' ? $email : old('email') }}"
                placeholder="Nhập..." required>
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="birthday">Ngày bắt đầu<span>*</span>:</label>
              <input type="text" class="form-control" name="birthday" id="birthday" value="{{ old('birthday') == '' ? $birthday : old('birthday') }}"
                placeholder="Nhập..." required>
              @if ($errors->has('birthday'))
                <span class="text-danger">{{ $errors->first('birthday') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="">Phân loại<span>*</span>:</label>
              <select class="form-select select2" id="usercustomertype" name="usercustomertype" required onChange="processSubmitOpenWindow('frm', 'view', '_top', '{{ route('customers-addUser') }}', '1')">
                <option value="">Chọn phân loại</option>
                @foreach ($usercustomertypes as $key => $value)
                  @if ((old('usercustomertype') != '' and $key == old('usercustomertype')) or ($usercustomertype != '' and $key == $usercustomertype))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="relationship">
              <div class="form-group">
                <label for="">Quan hệ<span>*</span>:</label>
                <select class="form-select select2" id="relationshiptype" name="relationshiptype" required>
                  <option value="">Chọn</option>
                  @foreach ($relationshiptypes as $key => $value)
                    @if (old('usercustomertype') == "0" or $usercustomertype == "0")
                        @if ($key < 10)
                            @if ((old('relationshiptype') != '' and $key == old('relationshiptype')) or ($relationshiptype != '' and $key == $relationshiptype))
                              <option value="{{ $key }}" selected>{{ $value }}</option>
                            @else
                              <option value="{{ $key }}">{{ $value }}</option>
                            @endif
                        @endif
                    @elseif (old('usercustomertype') == "1" or $usercustomertype == "1")
                        @if ($key >= 10)
                            @if ((old('relationshiptype') != '' and $key == old('relationshiptype')) or ($relationshiptype != '' and $key == $relationshiptype))
                              <option value="{{ $key }}" selected>{{ $value }}</option>
                            @else
                              <option value="{{ $key }}">{{ $value }}</option>
                            @endif
                        @endif
                    @endif
                  @endforeach
                </select>
              </div>

              <!--div class="form-group">
                    <label for="">Phân quyền<span>*</span>:</label>
                      <select class="form-select select2" id="rolemembertype" name="rolemembertype" required>
                        <option value="">Chọn phân quyền</option>
                        @foreach ($rolemembertypes as $key => $value)
  @if (old('rolemembertype') != '' and $key == old('rolemembertype'))
  <option value="{{ $key }}" selected>{{ $value }}</option>
@else
  <option value="{{ $key }}">{{ $value }}</option>
  @endif
  @endforeach
                      </select>
                  </div-->

              {{-- <div class="form-group">
              <label for=""></label>
              <div class="form-text">
                <input type="checkbox" tabindex="4" name="dependent" value="1" {{ old( 'dependent')==1 ? 'checked="checked"' : '' }}>
                Người phụ thuộc
              </div>
            </div> --}}
            </div>
          </div>
          <button class="btn btn-primary btn-save" onclick="processSubmitOpenWindow('frm', 'add', '_top', '{{ route('customers-storeUser') }}?continue=true', '1')">
            Tạo user
          </button>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('scripts')
  @include('product-manage.customer.user.partials.script')
@endsection
