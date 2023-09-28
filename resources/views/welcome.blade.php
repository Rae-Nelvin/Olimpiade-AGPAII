<x-guest-layout>
    {{-- Section 1 --}}
    <div class="flex flex-col h-screen w-full bg-landing-1 bg-cover bg-center">
        <x-landing.navbar />
        <div class="flex flex-col mx-auto mt-40 items-center text-black text-center h-full">
            <h2 class="text-xl font-normal">Olimpiade PAI Nasional AGPAII tahun 2023</h2>
            <h1 class="text-6xl font-normal mt-6 leading-tight">Are you ready to be <br>
                the Champion?
            </h1>
            <div class="flex flex-row items-center space-x-6 mt-10">
                <x-landing.textButton route="#">
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
    </div>
    {{-- Section 2 --}}
    <div class="bg-custom-orange flex justify-center items-center py-16">
        <div class="flex flex-col space-y-14 text-white font-light text-xl text-center w-2/6">
            <h2>“Meningkatkan Kompetisi dan Kompetensi Pelajar Pancasila
                yang Berlandaskan Nilai-Nilai Moderasi Beragama
                untuk Masa Depan Indonesia”</h2>
            <h2 class="text-base">DPP ASOSIASI GURU PENDIDIKAN AGAMA ISLAM NASIONAL (AGPAII)</h2>
        </div>
    </div>
    {{-- Section 3 --}}
    <div class="py-36 grid grid-cols-12 gap-3">
        <div class="col-span-5">
            <div class="flex flex-col text-black">
                <h1 class="font-normal text-3xl">Olimpiade PAI Nasional AGPAII</h1>
                <h2 class="text-base mt-5 text-custom-black">OLPAIN 2023 adalah singkatan dari Olimpiade PAI Nasional
                    AGPAII tahun 2023
                    yang
                    dilaksanakan secara berjenjang dari tingkat Provinsi hingga final tingkat Nasional</h2>
                <div class="w-fit mt-9">
                    <x-landing.button route="#">
                        <div class="flex flex-row space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M10 14h4v-2h-4v2Zm0-3h8V9h-8v2Zm0-3h8V6h-8v2ZM8 18q-.825 0-1.413-.588T6 16V4q0-.825.588-1.413T8 2h12q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H8Zm0-2h12V4H8v12Zm-4 6q-.825 0-1.413-.588T2 20V6h2v14h14v2H4ZM8 4v12V4Z" />
                            </svg>
                            <h3 class="text-base">Unduh Juknis</h3>
                        </div>
                    </x-landing.button>
                </div>
            </div>
        </div>
        <div class="col-span-2"></div>
        <div class="col-span-3 space-y-8">
            <x-landing.timelineTile date="1 - 30 Oktober" event="Pendaftaran Peserta" />
            <x-landing.timelineTile date="14 November" event="Penyisihan Provinsi" />
            <x-landing.timelineTile date="17 November" event="Pengumuman Provinsi" />
            <x-landing.timelineTile date="20 November" event="Technical Meeting Final" />
            <x-landing.timelineTile date="16 Desember" event="Final Luring di Kota Malang" />
            <x-landing.timelineTile date="17 Desember" event="Awarding & Closing Ceremony" />
        </div>
    </div>
    {{-- Section 4 --}}
    <div class="flex flex-row w-full py-36">
        <div class="bg-custom-white w-1/2 grid grid-cols-6 gap-3">
            <div class="text-custom-black font-normal col-span-4">
                <div class="flex flex-col space-y-4">
                    <h1 class="text-3xl">Pastikan kamu sudah <br>
                        memenuhi persyaratan berikut,</h1>
                    <h2 class="text-base">Persyaratan ini digunakan untuk memberikan pengalaman olimpiade <br> yang
                        seadil-adilnya.</h2>
                </div>
                <div class="flex flex-col space-y-6 mt-14">
                    <x-landing.syaratTile>
                        <h2 class="text-base">Peserta merupakan Pelajar Islam jenjang SD, SMP dan SMA/SMK aktif di
                            Indonesia </h2>
                        <h3 class="text-xs">Peserta dibuktikan melalui lampiran Kartu Tanda Pelajar
                            / Surat Keterangan Pelajar Aktif</h3>
                    </x-landing.syaratTile>
                    <x-landing.syaratTile>
                        <h2 class="text-base">Peserta merupakan individu/perorangan bukan kelompok</h2>
                    </x-landing.syaratTile>
                </div>
            </div>
        </div>
        <div class="bg-white w-1/2 grid grid-cols-6 gap-3">
            <div class="col-span-4">

            </div>
        </div>
    </div>
</x-guest-layout>
