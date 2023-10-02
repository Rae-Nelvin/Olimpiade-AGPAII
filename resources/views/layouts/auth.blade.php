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
        <div class="col-span-5 flex flex-col text-white justify-between">
            <a href="/" class="font-normal text-base"><- Beranda</a>
                    <div class="flex flex-col space-y-6">
                        <h2 class="font-normal text-xl">2023</h2>
                        <h1 class="font-semibold text-6xl">Olimpiade PAI <br>Nasional AGPAII</h1>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="font-normal text-base mb-4">Organized by</h2>
                        <div class="flex flex-col space-y-6">
                            <div class="flex flex-row space-x-4 items-center">
                                <img src="{{ asset('images/logo-7.png') }}" alt="Logo 7"
                                    class="w-auto bg-white rounded-full py-1 px-2.5">
                                <div class="flex flex-col text-sm space-y-1">
                                    <h1 class="uppercase font-semibold">Smarta Indonesia</h1>
                                    <h2 class="font-normal">Member of Puspresnas Kemdikbud RI</h2>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-4 items-center">
                                <img src="{{ asset('images/logo-2.png') }}" alt="Logo 2"
                                    class="w-14 bg-white py-3 px-2 rounded-full">
                                <div class="flex flex-col text-sm space-y-1">
                                    <h1 class="uppercase font-semibold">DPP AGPAII</h1>
                                    <h2 class="font-normal">Asosiasi Guru Pendidikan Agama <br /> Islam Indonesia</h2>
                                </div>
                            </div>
                        </div>
                        <h2 class="font-normal text-base mb-4 mt-11">Butuh Bantuan?</h2>
                        <div class="flex flex-col font-bold text-base space-y-2">
                            <h2>+62857 0714 5129 <span class="font-normal">Khoirul Fahmi</span></h2>
                            <h2>+62896 3031 1098 <span class="font-normal">Budi Sulistyo</span></h2>
                        </div>
                    </div>
        </div>

        {{ $slot }}
    </div>
</body>

</html>
