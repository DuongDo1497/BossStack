@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="{{ asset('css/pages/style_admin.css') }}">

<style type="text/css">
    @media only screen and (min-width: 320px) and (max-width: 575px){
        .text-nowrap{
            white-space: nowrap !important;
        }
    }
</style>
@endsection

@section('content')

@if(session()->has('success'))
    @include('layouts.partials.messages.success')
@endif

THÔNG TIN LỢI NHUẬN

<a href="{{ route('profits-add') }}" class="btn btn-default">Tạo mới</a><br>
<a href="{{ route('profits-edit',['id'=> 0]) }}" class="btn btn-default">Chỉnh sửa</a><br>
<a href="{{ route('profits-history',['id'=> 0]) }}" class="btn btn-default">Lịch sử</a><br>
<a href="{{ route('profits-result',['id'=> 0]) }}" class="btn btn-default">Kết quả</a><br>


@endsection


