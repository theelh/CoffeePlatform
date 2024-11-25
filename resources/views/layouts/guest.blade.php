<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="../images/CoffeBeain.png" type="image/x-icon">

        <title>{{ config('Ecafflein', 'Ecafflein') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <img id="background" class="absolute backdrop-brightness-50 sm:h-full sm:bg-cover h-[100vh] w-full bg-cover top-0 max-w-full" src="../images/imgBack1.jpg" alt="backgroundImg"/>
        <div class="min-h-screen flex flex-col sm:justify-center bg-gray-800 items-center pt-6 sm:pt-0 ">
            <div class="absolute">
                <div>
                    <a href="/">
                        <img class="w-20 h-20" src="../images/CoffeBeainWithShadow.png" alt="Logo"/>
                    </a>
                </div>
    
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 rounded-lg bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
