@extends('Site.layouts.empty')
@section('body')
    @include('Site.includes.header')
        {{ $slot }}
    @include('Site.includes.footer')
@endsection