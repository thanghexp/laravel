<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar
        @show

        <div class="containter">
            @yield('content')
        </div>
    </body>
</html>