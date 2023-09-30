<div
    class="col-span-2 flex flex-col bg-white flex-grow border border-right border-custom-grey shadow-lg shadow-custom-grey">
    <div class="flex flex-row justify-center py-6">
        <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="w-max">
    </div>
    <ul class="flex flex-col">
        <x-admin.navLink name="Dashboard" route="/dashboard" :active="request()->routeIs('dashboard')" />
        <x-admin.navLink name="Data Diri" route="#" :active="request()->routeIs('data-diri')" />
    </ul>
</div>
