<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title_page')</title>
        
        @vite(['resources/assets/sass/app/entry.scss', 'resources/assets/js/app/entry.js'])
    </head>
    <body>
    
        <div class="wrapper">
            
            @include("layouts.header")
            
            <div class="content">
                @yield('content')
            </div>
            
            @include("layouts.footer")
            
        </div>
    
    </body>
</html>