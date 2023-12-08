@extends('layout.app')

@section('menu')
    @include('components.sidebar')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.titles.videoTitle')
    @include('components.pages.videos.page')
@endsection

@section('footer')
    @include('components.footer')
@endsection
