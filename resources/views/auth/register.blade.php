<x-auth-layout>
    <x-auth.form.box colSpan="col-span-7" title="Registrasi Peserta" subtitle="Pendaftaran" action="register"
        formClass="mt-9">
        <div class="flex flex-row space-x-10">
            <div class="flex flex-col space-y-5 w-full">
                <x-auth.form.formInput label="NISN (Nomor Induk Siswa Nasional)" type="number" name="nisn" />
                <x-auth.form.formInput label="Nama Lengkap" type="text" name="name" />
                <x-auth.form.formInput label="E-mail" type="email" name="email" />
                <x-auth.form.formInput label="Kartu Pelajar" type="file" name="foto_kartu_pelajar" />
            </div>
            <div class="flex flex-col space-y-5 w-full">
                <x-auth.form.formInput label="Asal Sekolah" type="text" name="asal_sekolah" />
                <x-auth.form.formInput label="Nomor Handphone" type="text" name="phone_number" />
                <x-auth.form.formInput label="Kata Sandi" type="password" name="password" />
                <x-auth.form.formInput label="Bukti Pembayaran" type="file" name="foto_bukti_pembayaran" />
                <p class="text-custom-orange font-normal text-xs">Pendaftaran sebesar <span
                        class="font-semibold">Rp50.000</span> ke Rekening <span class="font-semibold">156-00-1445760-2
                        (Mandiri) an/ ASOSIASI GURU PENDIDIKAN AGAMA ISLAM</span></p>
            </div>
        </div>
    </x-auth.form.box>
</x-auth-layout>
