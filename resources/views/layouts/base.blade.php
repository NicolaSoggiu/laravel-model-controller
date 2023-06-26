<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dc Comic</title>
        <link rel="icon" href="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" type="image/x-icon">
        <link
        href="https://fonts.googleapis.com/css2?family=Bangers&display=swap"
        rel="stylesheet"
        />
        @vite('resources/js/app.js')
    </head>

<body>
    @include("partials.header")
    
    @include("partials.main")

    @include("partials.footer")
</body>
</html>