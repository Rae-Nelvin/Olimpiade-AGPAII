<x-guest-layout>
    {{-- Section 1 --}}
    <div class="relative">
        <div class="absolute z-0">
            <img src="{{ asset('images/vector-3.png') }}" alt="Vector 3" class="w-auto">
        </div>
        <x-landing.container>
            <div class="h-[80vh] w-full z-10 flex flex-col justify-between pt-40 pb-20">
                <div class="flex flex-col mx-auto items-center text-black text-center h-full">
                    <h2 class="text-xl font-normal">Selamat Datang di</h2>
                    <h1 class="text-6xl font-normal mt-6 leading-tight">Olimpiade PAI Nasional AGPAII <br />ke-2 Tahun
                        2023
                    </h1>
                    <div class="flex flex-row items-center space-x-6 mt-10">
                        <x-landing.textButton route="#informasi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M10 14h4v-2h-4v2Zm0-3h8V9h-8v2Zm0-3h8V6h-8v2ZM8 18q-.825 0-1.413-.588T6 16V4q0-.825.588-1.413T8 2h12q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H8Zm0-2h12V4H8v12Zm-4 6q-.825 0-1.413-.588T2 20V6h2v14h14v2H4ZM8 4v12V4Z" />
                            </svg>
                            <h3 class="text-base">Informasi Olimpiade</h3>
                        </x-landing.textButton>
                        <x-landing.button route="register">
                            Daftar Sekarang ->
                        </x-landing.button>
                    </div>
                </div>
                <div class="flex flex-row justify-center">
                    <div class="flex flex-col space-y-6">
                        <h3 class="font-normal text-base text-center">Kegiatan ini didukung oleh,</h3>
                        <div class="flex flex-row space-x-4">
                            <img src="{{ asset('images/logo-2.png') }}" alt="Logo 2" class="w-14" />
                            <img src="{{ asset('images/logo-4.png') }}" alt="Logo 4" class="w-14" />
                            <img src="{{ asset('images/logo-5.png') }}" alt="Logo 5" class="w-14" />
                            <img src="{{ asset('images/logo-6.png') }}" alt="Logo 6" class="w-14" />
                        </div>
                    </div>
                </div>
            </div>
        </x-landing.container>
        <div class="absolute z-0 bottom-[-20%] right-[-20%]">
            <img src="{{ asset('images/vector-4.png') }}" alt="Vector 4" class="w-1/2">
        </div>
    </div>
    {{-- Section 2 --}}
    <div class="relative bg-custom-orange">
        <div class="absolute z-0">
            <img src="{{ asset('images/vector-6.png') }}" alt="Vector 6" class="w-3/5">
        </div>
        <div class="flex flex-row justify-center items-center py-11 z-10">
            <div class="flex flex-col text-white font-light text-xl text-center w-1/3">
                <h3 class="uppercase font-semibold text-sm">Tema Kegiatan</h3>
                <h2 class="font-semibold text-2xl mt-6 mb-16">“Meningkatkan Kompetisi dan Kompetensi Pelajar Pancasila
                    yang Berlandaskan Nilai-Nilai Moderasi Beragama
                    untuk Masa Depan Indonesia”</h2>
                <h2 class="text-base uppercase">DPP ASOSIASI GURU PENDIDIKAN AGAMA ISLAM INDONESIA (AGPAII)</h2>
            </div>
        </div>
    </div>
    {{-- Section 3 --}}
    <div class="relative">
        <x-landing.container>
            <div class="py-36 grid grid-cols-12 gap-3" id="informasi">
                <div class="col-span-5">
                    <div class="flex flex-col text-black">
                        <img src="{{ asset('images/logo-3.png') }}" alt="Logo 3" class="w-60">
                        <h1 class="font-normal text-3xl mt-8 mb-5">Olimpiade PAI Nasional AGPAII</h1>
                        <h2 class="text-base text-custom-black">OLPAIN 2023 adalah singkatan dari Olimpiade PAI
                            Nasional AGPAII tahun 2023 yang
                            dilaksanakan secara berjenjang dari tingkat Provinsi hingga final tingkat Nasional</h2>
                        <div class="w-fit mt-9">
                            <a href="{{ route('file.download', ['filename' => 'juknis.pdf']) }}"
                                class="block py-3 px-7 bg-white border-custom-orange border-[1px] rounded-md text-custom-orange hover:bg-custom-orange hover:text-white transition-colors duration-300 ease-in-out">
                                <div class="flex flex-row space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M10 14h4v-2h-4v2Zm0-3h8V9h-8v2Zm0-3h8V6h-8v2ZM8 18q-.825 0-1.413-.588T6 16V4q0-.825.588-1.413T8 2h12q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H8Zm0-2h12V4H8v12Zm-4 6q-.825 0-1.413-.588T2 20V6h2v14h14v2H4ZM8 4v12V4Z" />
                                    </svg>
                                    <h3 class="text-base">Unduh Juknis</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-2"></div>
                <div class="col-span-3 space-y-8">
                    <h1 class="font-normal text-2xl">Timeline Olimpiade</h1>
                    <x-landing.timelineTile number=1 date="1 Oktober - 8 November" event="Pendaftaran Peserta"
                        :isActive='true' />
                    <x-landing.timelineTile number=2 date="14 November" event="Penyisihan Provinsi" />
                    <x-landing.timelineTile number=3 date="17 November" event="Pengumuman Provinsi" />
                    <x-landing.timelineTile number=4 date="20 November" event="Technical Meeting Final" />
                    <x-landing.timelineTile number=5 date="16 Desember" event="Final (Kota Malang)" />
                    <x-landing.timelineTile number=6 date="17 Desember" event="Awarding & Closing Ceremony" />
                </div>
            </div>
        </x-landing.container>
        <div class="absolute bottom-[-30%] z-0 right-0">
            <img src="{{ asset('images/vector-5.png') }}" alt="Vector 5" class="w-max">
        </div>
    </div>
    {{-- Section 4 --}}
    <div class="flex flex-row w-full py-32 h-[110vh] relative" id="cara-pendaftaran">
        <div class="bg-custom-white w-1/2 grid grid-cols-6 gap-3 py-32 px-28 relative">
            <div class="absolute z-0 bottom-0">
                <img src="{{ asset('images/vector-3.png') }}" alt="Vector 3" class="w-auto opacity-50">
            </div>
            <div class="text-custom-black font-normal col-span-5 z-10">
                <div class="flex flex-col space-y-4">
                    <h1 class="text-3xl">Pastikan kamu sudah <br>
                        memenuhi persyaratan berikut,</h1>
                    <h2 class="text-base">Persyaratan ini digunakan untuk memberikan pengalaman olimpiade yang
                        seadil-adilnya.</h2>
                </div>
                <div class="flex flex-col space-y-6 mt-14">
                    <x-landing.syaratTile>
                        <div class="bg-custom-light-orange text-custom-orange p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 48 48">
                                <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                                    <path d="M2 17.4L23.022 9l21.022 8.4l-21.022 8.4L2 17.4Z" />
                                    <path stroke-linecap="round"
                                        d="M44.044 17.51v9.223m-32.488-4.908v12.442S16.366 39 23.022 39c6.657 0 11.467-4.733 11.467-4.733V21.825" />
                                </g>
                            </svg>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <h2 class="text-base font-normal text-black">Peserta merupakan Pelajar Islam jenjang SD,
                                SMP dan SMA/SMK aktif di
                                Indonesia </h2>
                            <h3 class="text-base font-normal text-custom-orange">Dibuktikan melalui lampiran Kartu
                                Tanda Pelajar
                                / Surat Keterangan Pelajar Aktif</h3>
                        </div>
                    </x-landing.syaratTile>
                    <x-landing.syaratTile itemsAlignment="items-center">
                        <div class="bg-custom-light-orange text-custom-orange p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <circle cx="12" cy="6" r="4" />
                                    <path
                                        d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="text-base">Peserta merupakan individu/perorangan bukan kelompok</h2>
                    </x-landing.syaratTile>
                </div>
            </div>
        </div>
        <div class="bg-white w-1/2 grid grid-cols-6 gap-3 py-32 px-28">
            <div class="col-span-5 flex flex-col">
                <div class="w-fit">
                    <div class="py-3 px-7 text-white bg-custom-orange rounded-full hover:bg-custom-orange">
                        <h2>Cara Pendaftaran</h2>
                    </div>
                </div>
                <div class="flex flex-col mt-7 space-y-4">
                    <x-landing.caraPendaftaranTile number=1>
                        Kunjungi laman website resmi Olimpiade AGPAII 2023 (<a href="/"
                            class="text-blue-500">www.olimpiadeagpaii.com</a>)
                    </x-landing.caraPendaftaranTile>
                    <x-landing.caraPendaftaranTile number=2>
                        Klik “Daftar Sekarang” untuk melakukan pendaftaran peserta lomba
                    </x-landing.caraPendaftaranTile>
                    <x-landing.caraPendaftaranTile number=3>
                        Lengkapi formulir dengan informasi pribadi (NISN, nama lengkap, dan sebagainya)
                    </x-landing.caraPendaftaranTile>
                    <x-landing.caraPendaftaranTile number=4>
                        Semua peserta olimpiade wajib membayar biaya pendaftaran sebesar <br /> <span
                            class="font-bold">Rp
                            75.000,-</span> <br />
                        <span class="text-custom-orange">ke Rekening 156-00-1445760-2 (Mandiri) <br />
                            an/ ASOSIASI GURU PENDIDIKAN AGAMA ISLAM</span>
                    </x-landing.caraPendaftaranTile>
                    <x-landing.caraPendaftaranTile number=5>
                        Peserta dapat mengakses “Masuk Dashboard” dengan menggunakan email dan password yang telah telah
                        dibuat
                    </x-landing.caraPendaftaranTile>
                    <x-landing.caraPendaftaranTile number=6>
                        Selamat, anda telah berhasil melakukan pendaftaran di Olimpiade AGPAII 2023!
                    </x-landing.caraPendaftaranTile>
                </div>
            </div>
        </div>
    </div>
    {{-- Section 5 --}}
    <div class="bg-gradient-to-r from-custom-orange to-custom-light-orange-2 py-20 px-60 flex flex-row justify-between text-white items-center">
        <div class="flex flex-col space-y-5 w-1/2">
            <h1 class="text-4xl">Daftarkan dirimu sekarang juga!</h1>
            <h2 class="text-base">OLPAIN 2023 adalah singkatan dari Olimpiade PAI Nasional AGPAII tahun 2023 yang
                dilaksanakan secara berjenjang dari tingkat Provinsi hingga final tingkat Nasional</h2>
        </div>
        <div class="w-1/2 flex flex-row justify-end">
            <a href="{{ route('register') }}"
                class="border-[1px] border-white rounded-lg py-3 px-7 text-white text-base font-normal">Daftar
                Sekarang
                -></a>
        </div>
    </div>
</x-guest-layout>
