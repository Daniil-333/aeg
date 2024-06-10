@extends('layouts.layout')

@section('title')
@parent Ремонт Aeg в Москве | сеть сервис центров Aeg Aegmsk.Ruexpert
@endsection

@section('content')
    <main class="main">
        @include('main.promo')
        @include('main.tags')
        @include('main.repair')
        @include('main.how')
        @include('main.assortment')
        @include('main.faq')
        @include('main.join')
    </main>
@endsection
