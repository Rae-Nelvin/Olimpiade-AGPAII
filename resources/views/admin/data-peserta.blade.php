<x-app-layout>
    <x-admin.header title="Data Peserta" />
    <div class="mt-6">
        <x-landing.button>Unduh CSV</x-landing.button>
    </div>
    {{-- <x-landing.button href="{{ route('admin.data-peserta.export') }}">Unduh CSV</x-landing.button> --}}
    <div class="relative overflow-x-auto z-20">
        <table class="w-full bg-white mt-6 rounded-lg shadow-sm shadow-custom-grey text-black text-sm font-normal">
            <thead class="font-semibold">
                <tr>
                    <td scope="col" class="p-6">No</td>
                    <td scope="col">Tanggal</td>
                    <td scope="col">NISN</td>
                    <td scope="col">Nama Lengkap</td>
                    <td scope="col">Asal Sekolah</td>
                    <td scope="col">E-mail</td>
                    <td scope="col">Kartu Pelajar</td>
                    <td scope="col">Bukti Bayar</td>
                    <td scope="col">Aksi</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $data)
                    <tr>
                        <td class="p-6">{{ $loop->iteration }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/y H:i') }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ $data->asal_sekolah }}</td>
                        <td>{{ $data->user->email }}</td>
                        <td>IMG_0325</td>
                        <td>IMG_2352</td>
                        <td class="flex flex-row space-x-2 w-fit py-6">
                            <x-admin.delete-modal :id="$data->id" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex flex-row justify-end mt-7">
            {{ $results->links('pagination::tailwind') }}
        </div>
    </div>
</x-app-layout>
