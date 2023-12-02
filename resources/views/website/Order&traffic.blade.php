@extends('layout.app')

@section('menu')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.titles.TraficTitle')
    @include('components.emptyData')
    {{-- @include('components.latest_news.title') --}}
@endsection

@section('footer')
    @include('components.footer')   
@endsection