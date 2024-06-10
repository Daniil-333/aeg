<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Ремонт и техническое обслуживание Aeg в Москве. Мы проводим ремонт разной сложности: от замены гнезд зарядки до ремонта плат. Профессиональные консультации. Прием заявок онлайн.">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>@section('title')@show</title>

    <script src="https://kit.fontawesome.com/a6e63df60f.js" crossorigin="anonymous"></script>

    @vite(['resources/scss/app.scss'])
</head>
<body>

    <div class="wrapper">
        @include('common.header')

        @yield('content')

        @include('common.footer')

    </div>

    @vite(['resources/js/app.js'])
</body>
</html>
