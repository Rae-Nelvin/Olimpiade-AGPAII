<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>OLIMPIADE AGPAII</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
</head>

<body>
    <main class="font-manrope antialiased min-h-screen bg-white relative">
        <x-landing.navbar />
        <div class="absolute z-0">
            <img src="{{ asset('images/vector-3.png') }}" alt="Vector 3" class="w-auto">
        </div>
        <div class="absolute z-0">
            <img src="{{ asset('images/vector-4.png') }}" alt="Vector 4" class="w-auto absolute bottom-0 right-0">
        </div>
        <div class="z-50">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
