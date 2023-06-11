<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title')</title>

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
    <main>
        @yield('main_section')
        @yield('icons_menu_content')
    </main>
    <footer>
        <div id="upper_footer">
            <div id="footer_inner_box" class="central">
                <ul id="footer_vertical_menu">
                    @yield('upper_footer_menu_content')
                </ul>
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo inclinato">
                <p>
                    All site content TM and &copy; 2020 DC Entertainement, unless otherwise 
                    <a href="#">noted here</a>. 
                    All rights reserved. 
                    <a href="#">Cookies Settings</a>
                </p>
            </div>
        </div>
        <div id="lower_footer" class="py-4">
            <ul id="lower_footer_list" class="central px-0">
                @yield('lower_footer_menu_content')
            </ul>
        </div>
    </footer>
</body>
</html>