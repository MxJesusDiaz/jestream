<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistema Fesja') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
    <body class="antialiased">
    <section class="bg-gray-900 text-white">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
            <div class="mx-auto max-w-3xl text-center">
                <x-application-logo class="block h-12 w-auto"/>

                <h1
                    class="bg-gradient-to-r from-blue-700 via-white to-yellow-300 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                    FESJA

                    <span class="sm:block"> Occidente</span>
                </h1>

                <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                    numquam ea!
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a
                        class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
                        href="#"
                    >
                        Registrarse
                    </a>

                    <a
                        class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
                        href="#"
                    >
                        Iniciar Sesion
                    </a>
                </div>
            </div>
        </div>
    </section>
    </body>
</html>

