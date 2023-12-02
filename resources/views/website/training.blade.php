@extends('layout.app')

@section('menu')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.pages.page5.page')
    @include('components.emptyData')
    {{-- @include('components.latest_news.title') --}}
@endsection

@section('footer')
    @include('components.footer')   
@endsection