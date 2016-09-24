<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta href="" title="">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" href="{!! asset('css/frontend.css') !!}">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="wrapper">
        @include('layout.header')
            <div id="main">
                <div class="container">
                    <div class="row">
                        <div class="alert alert-info">
                            <marquee attribute_name="attribute_value"....more attributes>
                                <b>Notes:</b>  Trên đường thành công, không có vết chân của kẻ lười biếng !!

                            </marquee>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            @yield('content')
                        </div>
                        <div class="col-md-3">
                            @include('layout.sidebar')
                        </div>
                    </div>{{-- End.row --}}
                </div>{{-- End.container --}}
            </div>{{-- End#main --}}

        @include('layout.footer')
    </div>{{-- End#wrapper --}}
    </body>
</html>