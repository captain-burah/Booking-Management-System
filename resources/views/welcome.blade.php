<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Booking System</title>

        <style>
            body{
                margin: 0;
                padding: 0;
            }
            .bg-index {
                margin: 0;
                padding: 0;
                min-height: 100vh;
                background: url('{{asset('img/bg0.jpg')}}') no-repeat center center fixed;
                background-size: cover;
                transform: translate3d(0px, 0px, 0px);
            }
        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app" class="bg-index">
            <div>
                <index></index>
            </div>
        </div>
    </body>
</html>
