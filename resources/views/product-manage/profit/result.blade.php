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

KẾT QUẢ


@endsection