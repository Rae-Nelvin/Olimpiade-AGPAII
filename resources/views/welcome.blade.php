<x-guest-layout>
    {{-- Section 1 --}}
    <div class="relative">
        <div class="absolute z-0 left-[-65%] lg:left-0">
            <img src="{{ asset('images/vector-3.png') }}" alt="Vector 3" class="w-auto">
        </div>
        <x-landing.container>
            <div class="lg:h-[80vh] w-full z-10 flex flex-col lg:justify-between pt-24 lg:pt-40 pb-20">
                <div class="flex flex-col mx-auto items-center text-black text-center h-full">
                    <h2 class="text-base tracking-widest lg:tracking-normal lg:text-xl font-normal">Selamat Datang di
                    </h2>
                    <h1 class="text-4xl lg:text-6xl font-normal mt-6 leading-tight">Olimpiade PAI Nasional AGPAII
                        <br />ke-2 Tahun
                        2023
                    </h1>
                    <div class="flex flex-col lg:flex-row items-center space-y-6 lg:space-y-0 lg:space-x-6 mt-10">
                        <x-landing.textButton route="#informasi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M10 14h4v-2h-4v2Zm0-3h8V9h-8v2Zm0-3h8V6h-8v2ZM8 18q-.825 0-1.413-.588T6 16V4q0-.825.588-1.413T8 2h12q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H8Zm0-2h12V4H8v12Zm-4 6q-.825 0-1.413-.588T2 20V6h2v14h14v2H4ZM8 4v12V4Z" />
                            </svg>
                            <h3 class="text-base">Informasi Olimpiade</h3>
                        </x-landing.textButton>
                        <x-landing.button background="bg-custom-orange" border='border-transparent'
                            textColor='text-white' hover='hover:bg-custom-orange/80' route="register">
                            <h2 class="font-bold">Daftar Sekarang -></h2>
                        </x-landing.button>
                    </div>
                </div>
                <div class="flex flex-row justify-center mt-40">
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
        <div class="absolute hidden lg:block z-0 bottom-[-20%] right-[-35%]">
            <img src="{{ asset('images/vector-4.png') }}" alt="Vector 4" class="w-1/2">
        </div>
    </div>
    {{-- Section 2 --}}
    <div class="relative bg-custom-orange">
        <div class="absolute z-0">
            <img src="{{ asset('images/vector-6.png') }}" alt="Vector 6" class="lg:w-3/5">
        </div>
        <div class="flex flex-row justify-center items-center py-9 px-12 lg:px-0 lg:py-11 z-10">
            <div class="flex flex-col text-white font-light text-xl text-center w-full lg:w-1/3">
                <h3 class="uppercase font-semibold text-sm">Tema Kegiatan</h3>
                <h2 class="font-semibold text-base lg:text-2xl mt-7 mb-7 lg:mt-6 lg:mb-16">“Meningkatkan Kompetisi dan
                    Kompetensi Pelajar Pancasila
                    yang Berlandaskan Nilai-Nilai Moderasi Beragama
                    untuk Masa Depan Indonesia”</h2>
                <h2 class="text-sm lg:text-base uppercase">DPP ASOSIASI GURU PENDIDIKAN AGAMA ISLAM INDONESIA (AGPAII)
                </h2>
            </div>
        </div>
    </div>
    {{-- Section 3 --}}
    <div class="relative">
        <x-landing.container>
            <div class="bg-white pt-32 flex flex-col lg:py-36 lg:grid lg:grid-cols-12 lg:gap-3" id="informasi">
                <div class="lg:col-span-5">
                    <div class="flex flex-col text-black">
                        <img src="{{ asset('images/logo-3.png') }}" alt="Logo 3" class="w-60">
                        <h1 class="font-normal text-2xl lg:text-3xl mt-8 mb-5">Olimpiade PAI Nasional AGPAII <br />
                            ke-2 Tahun 2023</h1>
                        <h2 class="text-base text-custom-black">OLPAIN 2023 adalah singkatan dari Olimpiade PAI
                            Nasional AGPAII tahun 2023 yang
                            dilaksanakan secara berjenjang dari tingkat Provinsi hingga final tingkat Nasional</h2>
                        <div class="flex flex-col space-y-8 my-8">
                            <div class="flex flex-row space-x-4 items-start">
                                <x-landing.RoundedBackgroundIcon>
                                    @slot('icon')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M7.5 3.5a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3ZM4.5 5a3 3 0 1 1 6 0a3 3 0 0 1-6 0Zm-.732 4C2.79 9 2 9.791 2 10.768v.36c0 .207 0 1.408.7 2.575c.548.91 1.477 1.727 2.975 2.093a2.777 2.777 0 0 1 1.062-1.335c-1.603-.171-2.361-.883-2.75-1.53c-.484-.806-.487-1.664-.487-1.806v-.357c0-.148.12-.268.268-.268H8.03A3.974 3.974 0 0 1 8.535 9H3.768Zm11.697 0c.261.452.437.959.504 1.5h4.263c.148 0 .268.12.268.268v.357c0 .142-.003 1-.487 1.805c-.389.648-1.147 1.36-2.75 1.531c.48.32.856.786 1.062 1.335c1.498-.366 2.427-1.183 2.974-2.093c.701-1.167.701-2.367.701-2.576v-.36C22 9.792 21.209 9 20.232 9h-4.767ZM15 5a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Zm1.5-3a3 3 0 1 0 0 6a3 3 0 0 0 0-6ZM12 9.5a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3ZM9 11a3 3 0 1 1 6 0a3 3 0 0 1-6 0Zm-2.5 5.768C6.5 15.79 7.291 15 8.268 15h7.464c.977 0 1.768.791 1.768 1.768v.36c0 .207 0 1.408-.7 2.575C16.057 20.937 14.613 22 12 22s-4.058-1.063-4.8-2.297c-.7-1.167-.7-2.367-.7-2.576v-.36Zm1.768-.268a.268.268 0 0 0-.268.268v.357c0 .142.003 1 .487 1.805c.446.743 1.377 1.57 3.513 1.57s3.067-.827 3.513-1.57c.484-.805.487-1.663.487-1.805v-.357a.268.268 0 0 0-.268-.268H8.268Z" />
                                        </svg>
                                    @endslot
                                </x-landing.RoundedBackgroundIcon>
                                <div class="flex flex-col space-y-2 text-custom-black text-base">
                                    <h2 class="font-bold">Tahap Pertama - Penyisihan Provinsi</h2>
                                    <h3 class="font-normal">Materi pada tahap penyisihan yaitu materi PAI jenjang SD,
                                        SMP dan SMA/SMK
                                        (Kurikulum Merdeka Fase E dan F serta Materi Moderasi Beragama)</h3>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-4 items-start">
                                <x-landing.RoundedBackgroundIcon>
                                    @slot('icon')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M11.014 4.8c.172-.225.484-.55.986-.55s.814.325.986.55c.165.214.33.511.5.816l.121.218l.057.1l.099.023l.238.054c.327.074.653.147.903.246c.276.109.65.32.795.785c.142.455-.037.841-.193 1.09c-.145.23-.365.486-.59.749l-.16.188l-.082.097c.002.036.007.078.012.135l.024.25c.034.351.067.691.055.963c-.012.286-.08.718-.468 1.011c-.4.304-.84.238-1.12.157c-.258-.073-.563-.214-.87-.355l-.222-.103l-.085-.039l-.085.04l-.223.102c-.306.141-.611.282-.869.355c-.28.08-.72.147-1.12-.157c-.387-.293-.456-.725-.468-1.01c-.012-.273.02-.613.055-.965l.024-.25l.013-.134a10.28 10.28 0 0 0-.083-.097l-.16-.188c-.225-.263-.445-.52-.59-.75c-.156-.248-.335-.634-.193-1.09c.144-.463.519-.675.795-.784c.25-.099.576-.172.903-.246l.238-.054l.1-.023l.056-.1l.121-.218c.17-.305.335-.602.5-.816ZM12 6.034c-.058.101-.123.217-.199.354l-.098.176l-.023.04c-.078.144-.208.382-.425.547c-.221.168-.488.226-.643.26l-.044.009l-.19.043c-.176.04-.319.072-.44.103c.079.097.182.219.316.376l.13.152l.03.034c.108.125.282.325.363.585c.08.256.052.52.035.686l-.005.047l-.02.203a25.21 25.21 0 0 0-.042.46c.105-.046.223-.1.364-.165l.179-.082l.04-.02c.144-.067.393-.185.672-.185s.528.118.672.186l.04.019l.179.082c.14.065.26.12.364.165a25.21 25.21 0 0 0-.042-.46l-.02-.203l-.005-.047c-.017-.167-.045-.43.035-.686c.08-.26.255-.46.363-.585l.03-.034l.13-.152c.134-.157.237-.279.316-.376c-.121-.03-.264-.063-.44-.103l-.19-.043l-.044-.01c-.155-.033-.422-.091-.643-.26c-.217-.164-.347-.402-.425-.545l-.023-.041l-.098-.176c-.076-.137-.14-.253-.199-.354Zm-1.26 4.478l-.001-.004v.004Zm2.52 0l.001-.004v.004Z" />
                                                <path
                                                    d="M7.498 1.607A27.123 27.123 0 0 1 12 1.25c1.828 0 3.339.161 4.502.357l.135.023c1.01.169 1.85.31 2.506 1.118c.421.519.557 1.08.588 1.705l.492.164c.463.154.87.29 1.191.44c.348.162.667.37.911.709c.244.338.341.707.385 1.088c.04.353.04.78.04 1.27v.144c0 .402 0 .757-.03 1.054c-.032.321-.103.634-.28.936c-.179.303-.418.517-.683.701c-.245.17-.555.343-.907.538l-2.64 1.467c-.54 1.061-1.28 2.007-2.3 2.69c-.875.587-1.922.959-3.16 1.065v2.031h1.43a1.75 1.75 0 0 1 1.716 1.407l.219 1.093H18a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1 0-1.5h1.885l.219-1.093A1.75 1.75 0 0 1 9.82 18.75h1.43v-2.031c-1.238-.106-2.285-.478-3.16-1.064c-1.019-.684-1.76-1.63-2.3-2.691l-2.64-1.467a11.148 11.148 0 0 1-.907-.538a2.217 2.217 0 0 1-.682-.7a2.212 2.212 0 0 1-.281-.937c-.03-.297-.03-.652-.03-1.054v-.145c0-.488 0-.916.04-1.269c.044-.381.14-.75.385-1.088c.244-.339.563-.547.91-.71c.323-.15.729-.285 1.192-.439l.492-.164c.031-.626.167-1.186.588-1.705c.657-.809 1.496-.95 2.507-1.118l.134-.023ZM9.415 21.25h5.17l-.16-.799a.25.25 0 0 0-.245-.201H9.82a.25.25 0 0 0-.245.201l-.16.799ZM4.302 6.023l-.014.005c-.51.17-.834.28-1.07.389c-.217.1-.287.171-.326.226c-.04.054-.084.143-.111.381c-.03.258-.031.6-.031 1.138v.073c0 .445 0 .724.022.938c.02.196.052.275.082.325c.029.05.082.116.244.229c.176.122.42.258.81.475l1.065.592c-.428-1.57-.6-3.25-.67-4.77Zm14.725 4.77c.428-1.57.6-3.25.671-4.77l.014.005c.51.17.834.28 1.07.389c.217.1.287.171.326.226c.04.054.084.143.111.381c.03.258.031.6.031 1.138v.073c0 .445 0 .724-.022.938c-.02.196-.052.275-.082.325c-.029.05-.082.116-.244.229c-.177.122-.42.258-.81.475l-1.065.591ZM12 2.75c-1.74 0-3.167.153-4.252.336c-1.207.204-1.46.28-1.726.608c-.262.322-.287.628-.234 1.983c.09 2.258.388 4.696 1.31 6.55c.456.914 1.052 1.662 1.828 2.182c.77.517 1.765.841 3.074.841c1.31 0 2.304-.324 3.075-.841c.776-.52 1.371-1.268 1.826-2.183c.923-1.853 1.221-4.29 1.31-6.55c.055-1.354.03-1.66-.232-1.982c-.266-.328-.52-.404-1.727-.608A25.627 25.627 0 0 0 12 2.75Z" />
                                            </g>
                                        </svg>
                                    @endslot
                                </x-landing.RoundedBackgroundIcon>
                                <div class="flex flex-col space-y-2 text-custom-black text-base">
                                    <h2 class="font-bold">Tahap Kedua - Final</h2>
                                    <h3 class="font-normal">3 Peserta terbaik mewakili DPW (1 peserta @jenjang) akan
                                        diundang dan mengikuti babak Final yang dilaksanakan secara offline di Kota
                                        Malang pada tanggal 16-17 Desember 2023</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-fit">
                            <a href="{{ route('file.download', ['filename' => 'juknis-olpain-2023.pdf']) }}"
                                class="block py-3 px-7 bg-white border-custom-orange border-[1px] rounded-lg text-custom-orange hover:bg-custom-orange hover:text-white transition-colors duration-300 ease-in-out">
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
                <div class="lg:col-span-2"></div>
                <div class="flex flex-col mt-20 lg:col-span-3 space-y-8">
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
        <div class="absolute bottom-[-25%] lg:bottom-[-30%] z-0 right-0">
            <img src="{{ asset('images/vector-5.png') }}" alt="Vector 5" class="w-max">
        </div>
    </div>
    {{-- Section 4 --}}
    <div class="flex flex-col lg:flex-row w-full pt-20 lg:py-32 lg:h-[110vh] relative" id="cara-pendaftaran">
        <div
            class="bg-custom-white w-full flex flex-col pt-12 pb-20 px-10 lg:w-1/2 lg:grid lg:grid-cols-6 lg:gap-3 lg:py-32 lg:px-28 relative">
            <div class="absolute hidden lg:block z-0 bottom-0">
                <img src="{{ asset('images/vector-3.png') }}" alt="Vector 3" class="w-auto opacity-50">
            </div>
            <div class="text-custom-black font-normal lg:col-span-5 z-10">
                <div class="flex flex-col space-y-4">
                    <h1 class="text-2xl lg:text-3xl">Pastikan kamu sudah <br>
                        memenuhi persyaratan berikut,</h1>
                    <h2 class="text-base">Persyaratan ini digunakan untuk memberikan pengalaman olimpiade yang
                        seadil-adilnya.</h2>
                </div>
                <div class="flex flex-col space-y-6 mt-12 lg:mt-14">
                    <x-landing.syaratTile>
                        <x-landing.RoundedBackgroundIcon>
                            @slot('icon')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 48 48">
                                    <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                                        <path d="M2 17.4L23.022 9l21.022 8.4l-21.022 8.4L2 17.4Z" />
                                        <path stroke-linecap="round"
                                            d="M44.044 17.51v9.223m-32.488-4.908v12.442S16.366 39 23.022 39c6.657 0 11.467-4.733 11.467-4.733V21.825" />
                                    </g>
                                </svg>
                            @endslot
                        </x-landing.RoundedBackgroundIcon>
                        <div class="flex flex-col space-y-2 text-sm lg:text-base font-normal">
                            <h2 class="text-black">Peserta merupakan Pelajar Islam jenjang SD,
                                SMP dan SMA/SMK aktif di
                                Indonesia </h2>
                            <h3 class="text-custom-orange">Dibuktikan melalui lampiran Kartu
                                Tanda Pelajar
                                / Surat Keterangan Pelajar Aktif</h3>
                        </div>
                    </x-landing.syaratTile>
                    <x-landing.syaratTile itemsAlignment="items-center">
                        <x-landing.RoundedBackgroundIcon>
                            @slot('icon')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <circle cx="12" cy="6" r="4" />
                                        <path
                                            d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                                    </g>
                                </svg>
                            @endslot
                        </x-landing.RoundedBackgroundIcon>
                        <h2 class="text-sm lg:text-base">Peserta merupakan individu/perorangan bukan kelompok</h2>
                    </x-landing.syaratTile>
                </div>
            </div>
        </div>
        <div class="bg-white w-full py-16 px-10 lg:w-1/2 lg:grid lg:grid-cols-6 lg:gap-3 lg:py-32 lg:px-28">
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
                            75.000,-</span>
                        <span class="text-custom-orange">ke Rekening 156-00-1445760-2 (Mandiri) <br />
                            an/ ASOSIASI GURU PENDIDIKAN AGAMA ISLAM INDONESIA</span>
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
    <div
        class="bg-gradient-to-r from-custom-orange to-custom-light-orange-2 py-14 px-9 flex flex-col space-y-8 lg:space-y-0 lg:py-20 lg:px-60 lg:flex-row lg:justify-between text-white items-center">
        <div class="flex flex-col space-y-5 lg:w-1/2">
            <h1 class="text-2xl lg:text-4xl">Daftarkan dirimu sekarang juga!</h1>
            <h2 class="text-base">OLPAIN 2023 adalah singkatan dari Olimpiade PAI Nasional AGPAII tahun 2023 yang
                dilaksanakan secara berjenjang dari tingkat Provinsi hingga final tingkat Nasional</h2>
        </div>
        <div class="flex flex-row w-full items-start justify-start lg:w-1/2  lg:justify-end">
            <x-landing.button background='bg-transparent' border='border-white border-[1px]' textColor='text-white'
                hover='hover:bg-white hover:text-custom-orange' route="register">
                Daftar Sekarang ->
            </x-landing.button>
        </div>
    </div>
</x-guest-layout>
