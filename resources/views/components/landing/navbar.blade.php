<nav class="bg-white pt-16 pb-5 mx-6 lg:pt-0 lg:mx-[120px]">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/logo-3.png') }}" alt="Logo 3" class="w-44" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center w-10 h-10 justify-center text-sm text-custom-grey rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-base flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                <li>
                    <x-landing.nav-link name="Beranda" route="/" :active="request()->routeIs('/')" />
                </li>
                <li>
                    <x-landing.nav-link name="Informasi" route="#informasi" :active="request()->routeIs('informasi')" />
                </li>
                <li>
                    <x-landing.nav-link name="Cara Pendaftaran" route="#cara-pendaftaran" :active="request()->routeIs('cara-pendaftaran')" />
                </li>
                <li>
                    <x-landing.textButton route="register">
                        <div class="block py-3">
                            Daftar Sekarang
                        </div>
                    </x-landing.textButton>
                </li>
                <li>
                    <x-landing.button background="bg-custom-orange" border='border-transparent' textColor='text-white' hover='hover:bg-custom-orange/80' route="login">
                        <h2 class="font-bold">Masuk Dashboard</h2>
                    </x-landing.button>
                </li>
            </ul>
        </div>
    </div>
</nav>
