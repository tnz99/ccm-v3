<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" type="text/css" href="{{ asset('/css/circular-nav.css') }}">
        <script src="{{ asset('/js/circular-nav.js') }}"></script>


    </head>
    <body style="background-image: url('{{ $backgroundImageName }}')" class="w-full h-full flex flex-col bg-center items-center sm:bg-no-repeat sm:bg-cover sm:bg-left-top">
    <div class="h-full w-10/12 items-center flex flex-col sm:w-10/12 sm:items-start">
            <x-header />
            {{ $slot }}
            <!-- <x-circular-nav /> -->
        </div>
    </body>
</html>
