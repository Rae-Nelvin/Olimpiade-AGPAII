<div
    class="col-span-2 flex flex-col bg-white flex-grow border border-right border-custom-grey shadow-lg shadow-custom-grey z-20">
    <div class="flex flex-row justify-center py-6">
        <img src="{{ asset('images/logo-3.png') }}" alt="Logo" class="w-2/3">
    </div>
    <ul class="flex flex-col">
        @if (Auth::user()->role == 'admin')
            <x-admin.navLink name="Dashboard" route="/dashboard-admin" :active="request()->routeIs('dashboard-admin')">
                @slot('icon')
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M2.52 7.823C2 8.77 2 9.915 2 12.203v1.522c0 3.9 0 5.851 1.172 7.063C4.343 22 6.229 22 10 22h4c3.771 0 5.657 0 6.828-1.212C22 19.576 22 17.626 22 13.725v-1.521c0-2.289 0-3.433-.52-4.381c-.518-.949-1.467-1.537-3.364-2.715l-2-1.241C14.111 2.622 13.108 2 12 2c-1.108 0-2.11.622-4.116 1.867l-2 1.241C3.987 6.286 3.038 6.874 2.519 7.823ZM11.25 18a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0v3Z"
                            clip-rule="evenodd" />
                    </svg>
                @endslot
            </x-admin.navLink>
            <x-admin.navLink name="Data Peserta" route="/data-peserta" :active="request()->routeIs('data-peserta')">
                @slot('icon')
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M8 12a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm9 0a3 3 0 1 0 0-6a3 3 0 0 0 0 6ZM4.25 14A2.25 2.25 0 0 0 2 16.25v.25S2 21 8 21s6-4.5 6-4.5v-.25A2.25 2.25 0 0 0 11.75 14h-7.5ZM17 19.5c-1.171 0-2.068-.181-2.755-.458a5.503 5.503 0 0 0 .736-2.207A3.987 3.987 0 0 0 15 16.55v-.3a3.24 3.24 0 0 0-.902-2.248A2.32 2.32 0 0 1 14.2 14h5.6a2.2 2.2 0 0 1 2.2 2.2s0 3.3-5 3.3Z" />
                    </svg>
                @endslot
            </x-admin.navLink>
        @else
            <x-admin.navLink name="Dashboard" route="/dashboard" :active="request()->routeIs('dashboard')">
                @slot('icon')
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M2.52 7.823C2 8.77 2 9.915 2 12.203v1.522c0 3.9 0 5.851 1.172 7.063C4.343 22 6.229 22 10 22h4c3.771 0 5.657 0 6.828-1.212C22 19.576 22 17.626 22 13.725v-1.521c0-2.289 0-3.433-.52-4.381c-.518-.949-1.467-1.537-3.364-2.715l-2-1.241C14.111 2.622 13.108 2 12 2c-1.108 0-2.11.622-4.116 1.867l-2 1.241C3.987 6.286 3.038 6.874 2.519 7.823ZM11.25 18a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0v3Z"
                            clip-rule="evenodd" />
                    </svg>
                @endslot
            </x-admin.navLink>
            <x-admin.navLink name="Data Diri" route="/data-diri" :active="request()->routeIs('data-diri')">
                @slot('icon')
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M8 12a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm9 0a3 3 0 1 0 0-6a3 3 0 0 0 0 6ZM4.25 14A2.25 2.25 0 0 0 2 16.25v.25S2 21 8 21s6-4.5 6-4.5v-.25A2.25 2.25 0 0 0 11.75 14h-7.5ZM17 19.5c-1.171 0-2.068-.181-2.755-.458a5.503 5.503 0 0 0 .736-2.207A3.987 3.987 0 0 0 15 16.55v-.3a3.24 3.24 0 0 0-.902-2.248A2.32 2.32 0 0 1 14.2 14h5.6a2.2 2.2 0 0 1 2.2 2.2s0 3.3-5 3.3Z" />
                    </svg>
                @endslot
            </x-admin.navLink>
        @endif
    </ul>
</div>
