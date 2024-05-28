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
    <body style="background-image: url('/images/home.png')" class="w-full h-full flex flex-col bg-center items-center xl:bg-no-repeat xl:bg-cover xl:bg-left-top overflow-hidden">
        <div class="h-screen w-11/12 xl:w-4/5 flex flex-col items-center xl:items-start">
            <x-header :darkMode='false' />

            <div class="flex w-full grow flex-col xl:flex-row xl:items-center">
                <div class="flex flex-col grow items-center justify-start gap-8 xl:mt-44 xl:justify-start xl:items-start xl:w-10/12 xl:h-full ">
                    {{ $slot }}
                </div>

                <x-circular-nav cnavBackground="linear-gradient(270deg, #151A21 42.11%, rgba(23, 28, 36, 0.06) 101.31%)" :darkMode="false"/>
            </div>
    
        </div>
    </body>
</html>
