<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <header>
        <div class="container-fluid py-4">
            <h1>The Portfolio</h1>
        </div>
    </header>

    <main class="">
        @yield('content')
    </main>

</body>

</html>
