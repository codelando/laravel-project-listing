<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CDU Project Listing') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link type="image/x-icon" href="{{ asset('images/favicon.png') }}" rel="icon" />
    <link type="image/x-icon" href="{{ asset('images/favicon.png') }}" rel="shortcut icon" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <header>
            @include('layouts.header')
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            @include('layouts.footer')
        </footer>
    </div>
</body>
</html>
