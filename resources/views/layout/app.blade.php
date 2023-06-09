<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div id="upper_header">
            <ul class="central d-flex justify-content-end column-gap-4">
                @yield('upper_header_content')
            </ul>
        </div>
        <nav class="central d-flex justify-content-between px-2">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo piccolo">
            <ul id="nav_menu" class="d-flex justify-content-between px-5">
                @yield('nav_menu_content')
            </ul>
        </nav>
        @include('partials.jumbotron')
    </header>

</body>

</html>