@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/contact.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <div class="banner-default__link">
            <img class="icon img-fluid" src="{{ asset('img/web/link-icon.svg') }}" alt="" />
            <span class="text">Sản phẩm</span>
          </div>
          <h1 class="banner-default__title text-center">GIẢI PHÁP BÓC TÁCH DÒNG TIỀN</h1>
        </div>
      </div>
    </div>
  </div>
@endsection
