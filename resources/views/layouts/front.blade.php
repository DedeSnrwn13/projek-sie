<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.head')
</head>

<body>
    @include('partials.nav')

    @yield('content')

    @include('partials.footer')

    @include('partials.loader')

    @include('layouts.scripts')
</body>
</html>
