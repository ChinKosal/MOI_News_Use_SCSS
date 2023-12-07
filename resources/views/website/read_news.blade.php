@extends('layout.app')

@section('menu')
    @include('components.sidebar')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.read_news')
@endsection

@section('footer')
    @include('components.footer')
@endsection
