<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dockers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet">

        <style>
            #menu-toggle:checked + #menu{
                display: block;
            }
        </style>
        
    </head>
    <body>
        <div>
            @include('includes.navbar')
            <div>
                @yield('content')
 
            </div>
            @include('includes.footer')
 
   
        </div>
        <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>
