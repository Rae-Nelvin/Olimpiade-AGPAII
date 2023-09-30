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

    <footer class="mx-[120px] mt-32 flex flex-col pb-20">
        <div class="flex flex-row text-base text-black space-x-32">
            <div class="flex flex-col space-y-6 w-1/5">
                <img src="{{ asset('images/logo-2.png') }}" alt="Logo 2" class="w-max" />
                <p class="font-normal text-sm">OLPAIN 2023 adalah singkatan dari Olimpiade PAI Nasional AGPAII tahun
                    2023 yang dilaksanakan secara berjenjang dari tingkat Provinsi hingga final tingkat Nasional</p>
            </div>
            <ul class="space-y-2">
                <li>
                    <a href="/" class="font-semibold">Beranda</a>
                </li>
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li>
                    <a href="#informasi">Pusat Informasi</a>
                </li>
                <li><a href="#cara-pendaftaran">Cara Pendaftaran</a></li>
            </ul>
            <ul class="space-y-2">
                <li>
                    <a href="#" class="font-semibold">Contact Center</a>
                </li>
                <li><a href="/">Beranda</a></li>
                <li><a href="#informasi">Pusat Informasi</a></li>
                <li><a href="#cara-pendaftaran">Cara Pendaftaran</a></li>
            </ul>
        </div>
        <div class="flex flex-row justify-end mt-20">
            <h5 class="text-custom-grey text-xs">© Copyright 2023 | Olimpiade AGPAII </h5>
        </div>
    </footer>
</body>

</html>
