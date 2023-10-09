<x-app-layout>
    <x-admin.header title="Dashboard Admin" />
    <div class="flex flex-row space-x-7 mt-4">
        <div class="w-2/5">
            <x-admin.box header="Total Pendaftar">
                <h1 class="font-normal text-3xl">{{ $totalPendaftar }} orang</h1>
            </x-admin.box>
        </div>
        <div class="w-3/5">
            <x-admin.box header="Informasi Umum">
                <div class="flex flex-col space-y-7">
                    <p class="font-normal text-base">Olimpiade AGPAII 2023 menggunakan Telegram sebagai platform
                        kominikasi
                        antara peserta dan panitia.</p>
                    <div class="w-fit">
                        <x-landing.button route="https://t.me/+6WUcT3Y8Q7wwYmFl">Masuk Telegram</x-landing.button>
                    </div>
                </div>
            </x-admin.box>
        </div>
    </div>

</x-app-layout>
