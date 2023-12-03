@extends('layout.app')

@section('menu')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.titles.TraficTitle')
    @include('components.pages.videos.page')
@endsection

@section('footer')
    @include('components.footer')   
@endsection