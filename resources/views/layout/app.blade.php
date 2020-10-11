<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('titolo')</title>
        {{-- Metto il link generale al css MA mi lascio
        la possibilità di richiamare pagine di stile differenti
        per qualche pagina con lo yield --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('css')
    </head>
    <body>

        @include('partials.header')

        <main>
            @yield('main')
        </main>

        @include('partials.footer')

    </body>
</html>
