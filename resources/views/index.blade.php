<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        @vite(['resources/assets/sass/app/entry.scss', 'resources/assets/js/app/entry.js'])
    </head>
    <body>

    @include("layouts.header")
    
    @include("layouts.footer")

    </body>
</html>

