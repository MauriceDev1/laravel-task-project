<!doctype html>
<html lang="en">
    <head>
    @include('includes.head')
    </head>
    <body>
        <div>
        <header class="row">
            @include('includes.header')
        </header>
        <div class="w-full">
                @yield('content')
        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
        </div>
    </body>
</html>