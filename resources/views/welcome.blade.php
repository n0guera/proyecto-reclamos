<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Municipalidad de Narnia' }}</title>
        {{-- Styles/Scripts --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-gray-200 border grid min-h-screen items-center justify-center">
        <livewire:bienvenida />
        @livewireScripts
    </body>
</html>
