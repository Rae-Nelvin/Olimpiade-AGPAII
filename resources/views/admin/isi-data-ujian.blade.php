<x-app-layout>
    <x-admin.header title="Isi Data Ujian Peserta" />
    <form action="{{ route('store-data-ujian') }}" method="POST" class="flex flex-col space-y-10">
        @csrf
        <input type="hidden" name="participant_detail_id" value="{{ $participantDetail->id }}" />
        <div class="space-y-4 flex flex-col">
            <label for="name">Username Ujian Peserta</label>
            <input type="text" name="username_ujian" placeholder="Username Ujian Peserta" />
            @error('username_ujian')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <x-landing.button>Ubah Data Peserta</x-landing.button>
    </form>
</x-app-layout>
