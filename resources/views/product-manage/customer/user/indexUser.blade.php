@extends('layouts.master')

@section('head')
  {{-- <link rel="stylesheet" href="{{ asset('css/pages/page/cashplan.css') }}"> --}}
@endsection

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  @if (isset($infor))
    @include('layouts.partials.messages.infor')
  @endif

  <div class="section cashplan">
    <div class="breadcrumb">
      <span>Quản lý tài khoản</span> / <span class="current">Thiết lập ví tài chính</span>
    </div>
    <p class="title-page">{{ $title->heading }}</p>

    <div class="box-content">
      <div class="box box-primary">

      </div>
    </div>

  </div>
@endsection

@section('scripts')
  @include('product-manage.cashplan.partials.script')
@endsection
