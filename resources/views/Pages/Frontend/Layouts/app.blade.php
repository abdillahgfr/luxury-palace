<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="public" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#234b91" />
    <meta name="msapplication-navbutton-color" content="#234b91" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#234b91" />
    <meta name="author" content="Luxury Palace Tourism" />
    <meta name="application-name" content="Luxury Palace Tourism" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('assets/icon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('assets/icon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('assets/icon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/icon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('assets/icon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('assets/icon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('assets/icon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('assets/icon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/icon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('assets/icon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('assets/icon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('assets/icon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('assets/icon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    {{-- Style --}}
    @stack('prpend-style')
    @include('Pages.Frontend.Template.style')
    @stack('addon-style')

</head>

<body>
    {{-- Navbar --}}
    @include('Pages.Frontend.Template.navbar')


    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('Pages.Frontend.Template.footer')

    {{-- Script --}}
    @stack('prpend-script')
    @include('Pages.Frontend.Template.script')
    @stack('addon-script')
</body>

</html>