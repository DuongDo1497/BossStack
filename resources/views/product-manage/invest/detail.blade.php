@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/pages/page/invests.css') }}">

  {{--
<link rel="stylesheet" href="{{ asset('css/pages/products.css') }}">

<style type="text/css">
  @media only screen and (max-width: 768px) {
    .news-related {
      margin-top: 20px;
    }
  }
</style> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif
  @if (isset($infor))
    @include('layouts.partials.messages.infor')
  @endif

  <div class="section invest-detail">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <a class="prev" href="{{ route('invests-index') }}">Blog</a> / <span
        class="current">{{ $model->newstitle }}</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">
        <div class="single-post">
          <div class="single-post__wrap">
            <h4 class="single-post__title">{{ $model->newstitle }}</h4>
            <p class="single-post__info">
              <span class="single-post__author">{{ $model->author }}</span>, <span
                class="single-post__date">{{ ConvertSQLDate($model->newsdate) }}</span>
            </p>
            <div class="single-post__image">
              <img src="{{ asset($pathimage . $model->newsimage) }}" alt="">
            </div>
            <div class="single-post__content">{!! $model->content !!}</div>
            <p class="single-post__slogan">
              BossStack - The easiest way to control business accurately and effciently
            </p>
          </div>
          <div class="single-post__tag">
            <span class="item">#Dòng tiền</span>
            <span class="item">#Doanh nghiệp</span>
            <span class="item">#Quản lý tài chính</span>
          </div>
        </div>
        <div class="news-related">
          <p class="news-related__title">Bài viết liên quan</p>
          <div class="news">
            @php
              $i = 0;
            @endphp
            @foreach ($collections_0 as $model)
              @php
                $i++;
                if ($i >= 3) {
                    break;
                }
              @endphp
              <div class="news-item">
                <a href="{{ route('invests-detail', ['id' => $model->id]) }}">
                  <div class="news-image">
                    <img src="{{ asset($pathimage . $model->newsimage) }}" alt="">
                  </div>
                  <div class="news-content">
                    <p class="news-title">{{ $model->newstitle }}</p>
                    <div class="news-des">{!! $model->shortcontent !!}</div>
                    <div class="news-info">
                      <span class="news-author">{{ $model->author }}</span>
                      <span class="news-date">{{ ConvertSQLDate($model->newsdate) }}</span>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="single-post">
  <div class="single-post-detail">
    <div class="content-single-post">
      <header>
        <h4 class="name">{{ $model->newstitle }}</h4>
        <div class="date">{{ ConvertSQLDate($model->newsdate) }}</div>
      </header>
      <div class="short-content">{!! $model->shortcontent !!}</div>
      @if ($model->newsimage != '')
      <div class="image">
        <img src="{{ asset($pathimage . $model->newsimage) }}" width="100%">
      </div>
      @endif
      <div class="content-post">{!! $model->content !!}</div>
      <div class="author">{{ $model->author }}</div>
    </div>

    <div class="news-posted">
      <h3 class="title-category"><span>TIN TỨC ĐÃ ĐĂNG</span></h3>
      <ul>
        @php
        $i = 0;
        @endphp
        @foreach ($collections_0 as $model)
        @php
        $i++;
        if ($i >= 20) {
        break;
        }
        @endphp
        <li><a href="{{ route('invests-detail', ['id' => $model->id]) }}">{{ $model->newstitle }}</a>
          - <span class="date">{{ ConvertSQLDate($model->newsdate) }}</span></li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="news-related">
    <h3 class="title-category"><span>SỰ KIỆN</span></h3>
    <div class="news-wrap">
      @php
      $i = 0;
      @endphp
      @foreach ($collections_2 as $model)
      @php
      $i++;
      if ($i >= 20) {
      break;
      }
      @endphp
      <div class="items">
        @if ($model->newsimage != '')
        <div class="image">
          <img src="{{ asset($pathimage . $model->newsimage) }}" width="100%">
        </div>
        <div class="info">
          <h4 class="name">{{ $model->newstitle }}</h4>
          <div class="editor">
            <span class="author">{{ $model->author }}</span>-<span class="date">{{ ConvertSQLDate($model->newsdate)
              }}</span>
          </div>
          <a href="{{ route('invests-detail', ['id' => $model->id]) }}">Xem chi tiết
            &#62;&#62;</a>
        </div>
        @else
        <div class="image">
          <img src="https://bossstack.vn/public/funds_manage/public/newfiles/files/No_Image_Available.jpg" width="100%">
        </div>
        <div class="info">
          <h4 class="name">{{ $model->newstitle }}</h4>
          <div class="editor">
            <span class="author">{{ $model->author }}</span>-<span class="date">{{ ConvertSQLDate($model->newsdate)
              }}</span>
          </div>
          <a href="{{ route('invests-detail', ['id' => $model->id]) }}">Xem chi tiết
            &#62;&#62;</a>
        </div>
        @endif
      </div>
      @endforeach
    </div>
  </div>
</div> --}}
@endsection
