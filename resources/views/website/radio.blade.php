@extends('layout.app')

@section('menu')
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
    @include('components.titles.radioTitle')
    @include('components.pages.radios.page')
@endsection

@section('footer')
    @include('components.footer')   
@endsection