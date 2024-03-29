<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pay Bolivia</title> 

        {{--  Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{--  App.css --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    </head>
    <body>
        @yield('content')

        {{--  ******** Here we include all Js files ******** --}}
        {{--  App.js --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
