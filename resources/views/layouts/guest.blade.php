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
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <main class="font-manrope antialiased min-h-screen bg-white overflow-x-hidden">
        <x-landing.navbar />
        <div>
            {{ $slot }}
        </div>
    </main>

    <x-landing.footer />
</body>

</html>
