<x-app-layout>
    <x-admin.header title="Data Diri" />
    <div class="flex flex-col justify-between p-6 bg-white rounded-lg shadow-sm shadow-custom-grey mt-4">
        <div class="flex flex-row space-x-10">
            <div class="w-1/2 flex flex-col space-y-5">
                <x-admin.dataDiriTile type="text" label="NISN (Nomor Induk Siswa Nasional)"
                    value="{{ $result->nisn }}" />
                <x-admin.dataDiriTile type="text" label="Nama Lengkap" value="{{ $result->user->name }}" />
                <x-admin.dataDiriTile type="text" label="E-mail" value="{{ $result->user->email }}" />
                <x-admin.dataDiriTile type="text" label="Kartu Pelajar" value="{{ $result->foto_kartu_pelajar }}" />
            </div>
            <div class="w-1/2 flex flex-col space-y-5">
                <x-admin.dataDiriTile type="text" label="Asal Sekolah" value="{{ $result->asal_sekolah }}" />
                <x-admin.dataDiriTile type="password" label="Kata Sandi" value="{{ $result->user->password }}" />
                <x-admin.dataDiriTile type="text" label="Bukti Pembayaran"
                    value="{{ $result->foto_bukti_pembayaran }}" />
            </div>
        </div>
    </div>
</x-app-layout>
