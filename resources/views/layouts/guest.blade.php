<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- favicon.io -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

      <!-- evitar vite -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}

      <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

         @livewireStyles

      <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


        <script
                src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="bg-blue-400 text-yellow-100 m-0 px-4 py-4 font-light text-2xl leading-none">Servizo de Orientación Laboral</div>
            {{ $slot }}
            @include('components.footer')
        </div>

        @livewireScripts

    </body>
</html>
