@extends('layout.app')

@section('menu')
    @include('components.sidebar')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.titles.FightTitle')
    @include('components.emptyData')
    {{-- @include('components.latest_news.title') --}}
@endsection

@section('footer')
    @include('components.footer')
@endsection
