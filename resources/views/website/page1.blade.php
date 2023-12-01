@extends('layout.app')

@section('menu')
{{-- @include('components.popup_modal') --}}
    @include('components.header')
    @include('components.menu')
@endsection

@section('content')
@include('components.section_1')
@include('components.titles.title1')
@include('components.cards_news.card_page1')
@include('components.btn_more')
@include('components.titles.title2')
@include('components.cards_news.card2_page1')
@include('components.btn_more')
@include('components.titles.title3')
@include('components.cards_news.card3_page1')
@include('components.btn_more')
@include('components.titles.title4')
@include('components.cards_news.card4_page1')
@include('components.btn_more')
@include('components.titles.title5')
@include('components.cards_news.card5_page1')
@include('components.btn_more')

@endsection


@section('footer')
    @include('components.footer')   
@endsection