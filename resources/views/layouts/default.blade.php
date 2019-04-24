<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container">
            @include('includes.navigation')
            @yield('content')
        </div>
        <script src="js/app.js" charset="utf-8"></script>
    </body>
</html>

