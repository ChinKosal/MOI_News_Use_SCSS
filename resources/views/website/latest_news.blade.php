@extends('layout.app')

@section('menu')
    @include('components.popup_modal')
    @include('components.sidebar')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.pages.latest_news.page')
    {{-- @include('components.latest_news.title') --}}
@endsection

@section('footer')
    @include('components.footer')
@endsection
