<html>
    <head>

        <title>{{config('app.name', 'test')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container jumbotron">
            <style>
                .jumbotron {
                    width: 100%;
                }
            </style>
            @yield('content')
        </div>
    </body>
</html>
