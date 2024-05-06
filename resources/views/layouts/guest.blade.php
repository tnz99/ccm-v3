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
    </head>
    <body style="background-image: url('/images/home.png')" class="w-full h-full flex flex-col bg-center items-center sm:bg-no-repeat sm:bg-cover sm:bg-left-top">
        <div class="h-full w-11/12 sm:w-4/5 flex flex-col items-center sm:items-start">
            <x-header />
            {{ $slot }}
        </div>
    </body>
</html>
