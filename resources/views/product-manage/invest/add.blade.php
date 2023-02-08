@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/invests.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section invest-add">
    <div class="breadcrumb">
      <span>Quản lý khách hàng</span> / <a href="#" class="prev">Blog</a> / <span class="current">Thêm mới
        blog</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('invests-store') }}?index=true" method="post" id="frm"
      enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value=''>
      <div class="box-content">
        <div class="box box-primary">
          <div class="box-form">
            <div class="form-group">
              <label for="newsdate">Ngày đăng<span>*</span>:</label>
              <input type="text" class="form-control" name="newsdate" id="newsdate"
                value="{{ old('newsdate') == '' ? $newsdate : old('newsdate') }}">
              @if ($errors->has('newsdate'))
                <span class="text-danger">{{ $errors->first('newsdate') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="newstype">Loại<span>*</span>:</label>
              <select class="form-select select2" name="newstype" id="newstype">
                @foreach ($newstypes as $key => $value)
                  @if (old('newstype') != '' and $key == old('newstype'))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
              @if ($errors->has('newstype'))
                <span class="text-danger">{{ $errors->first('newstype') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="newstitle">Tiêu đề<span>*</span>:</label>
              <input type="text" class="form-control" name="newstitle" id="newstitle" value="{{ old('newstitle') }}"
                placeholder="Nhập tiêu đề..." required>
              @if ($errors->has('newstitle'))
                <span class="text-danger">{{ $errors->first('newstitle') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="fImages">Ảnh giới thiệu<span>*</span>:</label>
              <div class="form-div">
                <input type="hidden" name="newsimage" value="">
                <input type="file" class="form-control" name="fImages" id="fImages">
                <small>Lưu ý: Tải hình ảnh có kích thước 500 x 500 (px) và dung lượng hình dưới 2MB</small>
              </div>
            </div>
            <div class="form-group">
              <label for="importFile">Tải tệp đính kèm:</label>
              <div class="form-div">
                <input type="file" class="form-control" name="importFile" id="importFile">
                <small>Lưu ý: Tải file .pdf hoặc .docx</small>
              </div>
            </div>
            <div class="form-group">
              <label for="shortcontent">Mô tả<span>*</span>:</label>
              <textarea name="shortcontent" id="shortcontent" required>{{ old('shortcontent') }}</textarea>
              @if ($errors->has('shortcontent'))
                  <span class="text-danger">{{ $errors->first('shortcontent') }}</span>
              @endif          
            </div>
            <div class="form-group">
              <label for="content">Nội dung<span>*</span>:</label>
              <textarea name="content" id="content" required>{{ old('content') }}</textarea>
              @if ($errors->has('content'))
                <span class="text-danger">{{ $errors->first('content') }}</span>
              @endif        
            </div>
            <div class="form-group">
              <label for="author">Tác giả<span>*</span>:</label>
              <input type="text" class="form-control" name="author" id="author" value="{{ old('author') }}"
                placeholder="Nhập tên tác giả..." required>
              @if ($errors->has('author'))
                <span class="text-danger">{{ $errors->first('author') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="chk-hidden">Ẩn/Hiển thị<span>*</span>: <br><font size='2'>(Chọn: Ẩn, Không chọn: Hiển thị)</font></label>
              <input type="checkbox" name="hidden" value="1" id="chk-hidden"
                {{ old('hidden') == 1 ? 'checked' : '' }} required> 
              @if ($errors->has('hidden'))
                <span class="text-danger">{{ $errors->first('hidden') }}</span>
              @endif
            </div>
          </div>
          <button class="btn btn-primary btn-add" onclick="processReports('frm', 'store')">
            Thêm blog
          </button>
        </div>
      </div>
    </form>
  </div>

  {{-- <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thông tin trang truy cập</h3>
        </div>
        <form role="form" action="{{ route('invests-store') }}?index=true" method="post" id="frm"
          enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Ngày đăng <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-2 col-xs-8 item">
                  <input type='text' class="form-control" name="newsdate" id='newsdate'
                    value="{{ old('newsdate') == '' ? $newsdate : old('newsdate') }}" />
                  @if ($errors->has('newsdate'))
                    <span class="text-danger">{{ $errors->first('newsdate') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Loại <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-4 col-xs-8 item">
                  <select id="newstype" class="form-control" name="newstype">
                    <option value=""></option>
                    @foreach ($newstypes as $key => $value)
                      @if ($key == old('newstype'))
                        <option value="{{ $key }}" selected>{{ $value }}</option>
                      @else
                        <option value="{{ $key }}">{{ $value }}</option>
                      @endif
                    @endforeach
                  </select>
                  @if ($errors->has('newstype'))
                    <span class="text-danger">{{ $errors->first('newstype') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Tiêu đề <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-10 col-xs-8 item">
                  <input type="text" class="form-control" name="newstitle" value="{{ old('newstitle') }}">
                  @if ($errors->has('newstitle'))
                    <span class="text-danger">{{ $errors->first('newstitle') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-12 item">
                  <label>Ảnh giới thiệu :</label>
                </div>
                <div class="col-md-7 col-xs-12 item">
                  <input type="hidden" name="newsimage" value="">
                  <div class="box-body">
                    <!-- <div class="avatar-demo">
                                          <img src="" class="img-circle" width="100%" height="100%" type="file" name="be_image" value="">
                                      </div> -->
                    <input type="file" name="fImages" style="width: 100%">
                    <p class="text-danger" style="margin-top: 10px;">Lưu ý: Tải hình ảnh có kích thước 500 x 500 (px) và
                      dung lượng hình dưới 2MB</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-12 item">
                  <label>Tải tệp đính kèm:</label>
                </div>
                <div class="col-md-7 col-xs-12 item">
                  <input type="hidden" name="" value="">
                  <input type="file" name="importFile" multiple style="width: 100%">
                  <p class="text-danger" style="margin-top: 10px;">Lưu ý: Tải file .pdf hoặc .docx</p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Mô tả <small class="text-danger text"> (*)</small>: </label>
                </div>
                <div class="col-md-10 col-xs-8 item">
                  <textarea name="shortcontent" id="shortcontent">{{ old('shortcontent') }}</textarea>
                  <!-- @if ($errors->has('shortcontent'))
  <span class="text-danger">{{ $errors->first('shortcontent') }}</span>
  @endif                         -->
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Nội dung <small class="text-danger text"> (*)</small>: </label>
                </div>
                <div class="col-md-10 col-xs-8 item">
                  <textarea name="content" id="content">{{ old('content') }}</textarea>
                  <!-- @if ($errors->has('content'))
  <span class="text-danger">{{ $errors->first('content') }}</span>
  @endif                         -->
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Tác giả <small class="text-danger text"> (*)</small>: </label>
                </div>
                <div class="col-md-6 col-xs-8 item">
                  <input type="text" class="form-control" name="author" value="{{ old('author') }}">
                  @if ($errors->has('author'))
                    <span class="text-danger">{{ $errors->first('author') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Hiển thị/Ẩn:&nbsp;&nbsp;</label>
                </div>
                <div class="col-md-6 col-xs-8 item">
                  <input type="checkbox" tabindex="4" name="hidden" value="1" id="chk-hidden"
                    {{ old('hidden') == 1 ? 'checked="checked"' : '' }}>
                  @if ($errors->has('hidden'))
                    <span class="text-danger">{{ $errors->first('hidden') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <br>
            <button class="btn btn-success btn-bg-blue" style="width: 15%;"
              onclick="processReports('frm', 'store')">Lưu</button>
            <br><br>
          </div>
        </form>
      </div>

      <a href="{{ route('invests-manage') }}" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>
    </div>

  </div> --}}
@endsection

@section('scripts')
  @include('product-manage.invest.partials.script')
@endsection
