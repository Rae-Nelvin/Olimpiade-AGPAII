<x-app-layout>
    <x-admin.header title="Data Peserta" />
    <div class="mt-6 w-full flex flex-row items-center">
        <x-landing.button route="{{ route('download-data-peserta') }}">Unduh CSV</x-landing.button>
        <form action="{{ route('search-participant') }}" method="POST" class="w-4/5 ml-10 flex flex-row items-center space-x-5">
            @csrf
            <input type="text" name="search" placeholder="Masukkan NISN" class="w-full rounded-lg py-3 px-7" />
            <x-landing.button>Cari</x-landing.button>
        </form>
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
                    <td scope="col">Asal Provinsi</td>
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
                        <td>{{ \Carbon\Carbon::parse($data->user->created_at)->format('d/m/y H:i') }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ $data->asal_sekolah }}</td>
                        <td>{{ $data->user->province->name ?? '-' }}</td>
                        <td>{{ $data->user->email }}</td>
                        <td><x-admin.image-modal :imageUrl="$data->foto_kartu_pelajar" /></td>
                        <td><x-admin.image-modal :imageUrl="$data->foto_bukti_pembayaran" /></td>
                        <td class="flex flex-row space-x-2 w-fit py-6">
                            <x-admin.delete-modal :id="$data->user->id" />
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
