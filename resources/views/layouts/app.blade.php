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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</head>

<body class="font-manrope antialiased flex flex-col justify-between">
    <main class="bg-custom-dark-white grid grid-cols-12 min-h-screen">
        <x-admin.sidebar />
        <div class="col-span-10 py-7 px-5 flex flex-col w-full justify-between">
            <div class="z-30">
                {{ $slot }}
            </div>
            <h5 class="font-normal text-sm text-center mt-10">© Copyright 2023 | Olimpiade AGPAII </h5>
            <div class="absolute z-0 bottom-0 left-[10%]">
                <img src="{{ asset('images/vector-3.png') }}" alt="Vector 3" class="w-max">
            </div>
        </div>
    </main>

</body>

</html>
