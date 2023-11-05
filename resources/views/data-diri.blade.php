<x-app-layout>
    <x-admin.header title="Data Diri" />
    <div class="flex flex-col justify-between p-6 bg-white rounded-lg shadow-sm shadow-custom-grey mt-4">
        <div class="flex flex-row space-x-10">
            <div class="w-1/2 flex flex-col space-y-5">
                <x-admin.dataDiriTile type="text" label="NISN (Nomor Induk Siswa Nasional)"
                    value="{{ $result->nisn }}" />
                <x-admin.dataDiriTile type="text" label="Nama Lengkap" value="{{ $result->user->name }}" />
                <x-admin.dataDiriTile type="text" label="Asal Provinsi"
                    value="{{ $result->user->province->name ?? '-' }}" />
                <x-admin.dataDiriTile type="text" label="E-mail" value="{{ $result->user->email }}" />
            </div>
            <div class="w-1/2 flex flex-col space-y-5">
                <x-admin.dataDiriTile type="text" label="Asal Sekolah" value="{{ $result->asal_sekolah }}" />
                <x-admin.dataDiriTile type="text" label="Nomor Handphone"
                    value="{{ $result->user->phone_number }}" />
                <x-admin.dataDiriTile type="text" label="Bukti Pembayaran"
                    value="{{ $result->foto_bukti_pembayaran }}" />
                <x-admin.dataDiriTile type="text" label="Kartu Pelajar" value="{{ $result->foto_kartu_pelajar }}" />
            </div>
        </div>
    </div>
    <div class="flex flex-row justify-end mt-10">
        <x-landing.button background="bg-custom-orange" border='border-transparent' textColor='text-white'
            hover='hover:bg-custom-orange/80' route="{{ route('perbaharui-data-diri', $result->id) }}">
            <h2 class="font-bold">Perbaharui Data Diri</h2>
        </x-landing.button>
    </div>
</x-app-layout>
