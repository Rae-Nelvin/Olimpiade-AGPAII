<x-app-layout>
    <x-admin.header title="Data Diri" />
    <div class="flex flex-col justify-center mt-10">
        <div class="bg-white flex flex-col py-16 px-8 lg:rounded-2xl lg:py-10 lg:px-2 lg:shadow-black/5 lg:shadow-xl">
            <div class="flex flex-col lg:flex-row justify-between items-start">
                @if ($errors->any())
                    <div
                        class="bg-custom-light-red rounded-md text-custom-red py-3 px-5 flex flex-row space-x-2 w-full mt-6 lg:my-0 lg:w-full items-center">
                        <div class="w-fit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 17q.425 0 .713-.288T13 16q0-.425-.288-.713T12 15q-.425 0-.713.288T11 16q0 .425.288.713T12 17Zm-1-4h2V7h-2v6Zm1 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z" />
                            </svg>
                        </div>
                        <p class="text-base font-normal">{{ $errors->first() }}</p>
                    </div>
                @endif
            </div>
            <form action="{{ route('update-data-diri') }}" method="POST" class="space-y-3"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="participant_id" value="{{ $participant->id }}">
                <div class="flex flex-row">
                    <div class="flex flex-col space-y-5 w-full ml-10">
                        <x-auth.form.formInput label="NISN (Nomor Induk Siswa Nasional)" type="string" name="nisn"
                            :value="$participant->nisn" />
                        <x-auth.form.formInput label="Nama Lengkap" type="text" name="name" :value="$participant->user->name" />
                        <x-auth.form.formSelect label="Asal Provinsi" name="province_id" :datas="$provinces"
                            :value="$participant->user->province_id" />
                    </div>
                    <div class="flex flex-col space-y-5 w-full mx-10">
                        <x-auth.form.formInput label="Asal Sekolah" type="text" name="asal_sekolah" :value="$participant->asal_sekolah" />
                        <x-auth.form.formInput label="Nomor Handphone" type="text" name="phone_number"
                            :value="$participant->user->phone_number" />
                        {{-- <x-auth.form.formInput label="E-mail" type="email" name="email" :value="$participant->user->email" /> --}}
                    </div>
                </div>
                <div class="flex flex-row justify-end mr-10 ">
                    <x-landing.button background="bg-custom-orange" border='border border-custom-orange' textColor='text-custom-orange'
                        hover='hover:bg-custom-orange/80 hover:text-white'>
                        <h2 class="font-bold">Perbaharui</h2>
                    </x-landing.button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
