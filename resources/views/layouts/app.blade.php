<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>

@include('partials.header')
<body class="d-flex flex-column min-vh-100">
    <div id="app">
        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>
@include('partials.footer')
</html>
