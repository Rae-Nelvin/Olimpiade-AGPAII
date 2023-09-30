<div
    class="col-span-2 flex flex-col bg-white flex-grow border border-right border-custom-grey shadow-lg shadow-custom-grey z-20">
    <div class="flex flex-row justify-center py-6">
        <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="w-max">
    </div>
    <ul class="flex flex-col">
        @if (Auth::user()->role == 'admin')
            <x-admin.navLink name="Dashboard" route="/dashboard-admin" :active="request()->routeIs('dashboard-admin')" />
            <x-admin.navLink name="Data Peserta" route="/data-peserta" :active="request()->routeIs('data-peserta')" />
        @else
            <x-admin.navLink name="Dashboard" route="/dashboard" :active="request()->routeIs('dashboard')" />
            <x-admin.navLink name="Data Diri" route="/data-diri" :active="request()->routeIs('data-diri')" />
        @endif
    </ul>
</div>
