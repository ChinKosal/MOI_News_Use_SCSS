@extends('layout.app')

@section('menu')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.titles.magazinTitle')
    @include('components.pages.magazin_page.page')
    {{-- @include('components.latest_news.title') --}}
@endsection

@section('footer')
    @include('components.footer')   
@endsection