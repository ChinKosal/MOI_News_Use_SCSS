@extends('layout.app')

@section('menu')
    @include('components.sidebar')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.pages.page3.page')
    {{-- @include('components.latest_news.title') --}}
@endsection

@section('footer')
    @include('components.footer')
@endsection
