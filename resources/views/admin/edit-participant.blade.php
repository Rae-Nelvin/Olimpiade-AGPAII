<x-app-layout>
    <x-admin.header title="Edit Data Peserta" />
    <form action="{{ route('update-participant') }}" method="POST" class="flex flex-col space-y-10">
        @csrf
        <input type="hidden" name="participant_detail_id" value="{{ $participantDetail->id }}" />
        <div class="space-y-4 flex flex-col">
            <label for="name">Nama Peserta</label>
            <input type="text" name="name" value="{{ $participantDetail->user->name }}" />
            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="space-y-4 flex flex-col">
            <label for="nisn">NISN Peserta</label>
            <input type="text" name="nisn" value="{{ $participantDetail->nisn }}" />
            @error('nisn')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="space-y-4 flex flex-col">
            <label for="email">Email Peserta</label>
            <input type="email" name="email" value="{{ $participantDetail->user->email }}" />
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="space-y-4 flex flex-col">
            <label for="password">Password Baru Peserta</label>
            <input type="password" name="password"  />
            @error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <x-landing.button>Ubah Data Peserta</x-landing.button>
    </form>
</x-app-layout>
