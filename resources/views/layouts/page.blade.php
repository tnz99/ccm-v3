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

    <body style="background-image: url('{{ $backgroundImageName }}')" class="w-full h-full flex flex-col bg-center items-center sm:bg-no-repeat sm:bg-cover sm:bg-left-top">
        <div class="w-10/12 justify-start flex flex-col sm:w-10/12 sm:items-start h-screen">
            <x-header :darkMode="$darkMode"/>
            
            <div class="flex w-full grow flex-col sm:flex-row sm:items-center">
                <div class="flex flex-col grow-0 sm:grow items-center justify-start gap-8 sm:mt-0 sm:justify-start sm:items-start sm:w-10/12 sm:h-full">
                    {{ $slot }}
                </div>

                <x-circular-nav />
            </div>
        </div>
    </body>
</html>
