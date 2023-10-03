<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OLIMPIADE AGPAII</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="font-manrope antialiased h-screen relative flex flex-row">
    <div class="w-2/3 bg-custom-orange h-full">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/vector-2.png') }}" alt="Vector 2" class="w-1/2">
        </div>
    </div>
    <div class="w-1/3 bg-white h-full"></div>
    <div class="absolute inset-0 z-10 m-[120px] grid grid-cols-12 gap-5">
        <x-auth.leftSide />
        {{ $slot }}
    </div>
</body>

</html>
