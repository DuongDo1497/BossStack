@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/invests.css') }}">
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="section invest-edit">
    <div class="breadcrumb">
      <span>Quản lý khách hàng</span> / <a href="#" class="prev">Blog</a> / <span class="current">Chi tiết
        blog</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <form role="form" action="{{ route('invests-update', ['id' => $model->id]) }}?continue=true" method="post"
      id="frm" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('put') }}

      <div class="box-content">
        <div class="box box-primary">
          <div class="box-form">
            <div class="form-group">
              <label for="newsdate">Ngày đăng<span>*</span>:</label>
              <input type="text" class="form-control" name="newsdate" id="newsdate"
                value="{{ ConvertSQLDate($model->newsdate) }}" readonly>
            </div>
            <div class="form-group">
              <label for="newstype">Loại<span>*</span>:</label>
              <select class="form-select select2" name="newstype" id="newstype">
                @foreach ($newstypes as $key => $value)
                  @if ($key == $model->newstype)
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="newstitle">Tiêu đề<span>*</span>:</label>
              <input type="text" class="form-control" name="newstitle" id="newstitle" value="{{ $model->newstitle }}"
                required>
            </div>
            <div class="form-group">
              <label for="fImages">Ảnh giới thiệu<span>*</span>:</label>
              <div class="form-div">
                <div class="avatar-demo">
                  <img src="{{ asset(empty($model->newsimage) ? NO_IMAGE_URL : $model->newsimage) }}" class="img-circle"
                    width="100%" height="100%" type="file" name="be_image" value="{{ $model->newsimage }}">
                </div>
                <input type="hidden" name="newsimage" value="{{ $model->newsimage }}">
                <input type="file" class="form-control" name="fImages" id="fImages" required>
                <small>Lưu ý: Tải hình ảnh có kích thước 500 x 500 (px) và dung lượng hình dưới 2MB</small>
              </div>
            </div>
            <div class="form-group">
              <label for="importFile">Tải tệp đính kèm:</label>
              <div class="form-div">
                <ol class="list-file" style="padding: inherit;">
                  <li class="item-file">
                    <span class="name-file" style="padding-right: 10px; font-weight: bold;">Abc.docx</span>
                    <a href="#" class="control"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </li>
                  <li class="item-file">
                    <span class="name-file" style="padding-right: 10px; font-weight: bold;">Abc.docx</span>
                    <a href="#" class="control"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </li>
                </ol>
                <input type="hidden" name="" value="">
                <input type="file" class="form-control" name="importFile" id="importFile" multiple>
                <small>Lưu ý: Tải file .pdf hoặc .docx</small>
              </div>
            </div>
            <div class="form-group">
              <label for="shortcontent">Mô tả<span>*</span>:</label>
              <textarea name="shortcontent" id="shortcontent" required>{{ $model->shortcontent }}</textarea>
            </div>
            <div class="form-group">
              <label for="content">Nội dung<span>*</span>:</label>
              <textarea name="content" id="content" required>{{ $model->content }}</textarea>
            </div>
            <div class="form-group">
              <label for="author">Tác giả<span>*</span>:</label>
              <input type="text" class="form-control" name="author" id="author" value="{{ $model->author }}"
                required>
            </div>
            <div class="form-group">
              <label for="chk-hidden">Hiển thị<span>*</span>:</label>
              <input type="checkbox" name="hidden" value="1" id="chk-hidden"
                {{ old('hidden') == 1 ? 'checked' : '' }} required>
            </div>
          </div>
          <button class="btn btn-primary btn-save" onclick="processReports('frm', 'update')">
            Lưu
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
        <form role="form" action="{{ route('invests-update', ['id' => $model->id]) }}?continue=true" method="post"
          id="frm" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('put') }}
          <div class="box-body">
            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Ngày đăng <small class="text-danger text"> (*)</small>:</label>
                </div>
                <div class="col-md-2 col-xs-8 item">
                  <input type='text' class="form-control" name="newsdate" id='newsdate'
                    value="{{ ConvertSQLDate($model->newsdate) }}" />
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
                      @if ($key == $model->newstype)
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
                  <input type="text" class="form-control" name="newstitle" value="{{ $model->newstitle }}">
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
                  <input type="hidden" name="newsimage" value="{{ $model->newsimage }}">
                  <div class="box-body">
                    <div class="avatar-demo">
                      <img src="{{ asset(empty($model->newsimage) ? NO_IMAGE_URL : $model->newsimage) }}"
                        class="img-circle" width="100%" height="100%" type="file" name="be_image"
                        value="{{ $model->newsimage }}">
                    </div>
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
                  <ol class="list-file" style="padding: inherit;">
                    <li class="item-file">
                      <span class="name-file" style="padding-right: 10px; font-weight: bold;">Abc.docx</span>
                      <a href="#" class="control"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </li>
                    <li class="item-file">
                      <span class="name-file" style="padding-right: 10px; font-weight: bold;">Abc.docx</span>
                      <a href="#" class="control"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </li>
                  </ol>
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
                  <textarea name="shortcontent" id="shortcontent">{{ $model->shortcontent }}</textarea>
                  @if ($errors->has('shortcontent'))
                    <span class="text-danger">{{ $errors->first('shortcontent') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Nội dung <small class="text-danger text"> (*)</small>: </label>
                </div>
                <div class="col-md-10 col-xs-8 item">
                  <textarea name="content" id="content">{{ $model->content }}</textarea>
                  @if ($errors->has('content'))
                    <span class="text-danger">{{ $errors->first('content') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2 col-xs-4 item">
                  <label>Tác giả <small class="text-danger text"> (*)</small>: </label>
                </div>
                <div class="col-md-6 col-xs-8 item">
                  <input type="text" class="form-control" name="author" value="{{ $model->author }}">
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
                    {{ $model->hidden == 1 ? 'checked="checked"' : '' }}>
                  @if ($errors->has('hidden'))
                    <span class="text-danger">{{ $errors->first('hidden') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <br>
            <button class="btn btn-success btn-bg-blue" style="width: 15%;"
              onclick="processReports('frm', 'update')">Lưu</button>
            <br><br>
          </div>

        </form>
      </div>
    </div>
  </div> --}}
@endsection

@section('scripts')
  @include('product-manage.invest.partials.script')
@endsection
