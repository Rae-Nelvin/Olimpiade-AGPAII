<x-auth-layout>
    <div class="col-span-2"></div>
    <x-auth.form.box colSpan="col-span-4" title="Masuk Dashboard" subtitle="Yakin, kamu pasti bisa!" action="login" formClass="mt-9 space-y-5">
        <x-auth.form.formInput label="Username" type="text" name="username" />
        <x-auth.form.formInput label="Password" type="password" name="password" />
    </x-auth.form.box>
</x-auth-layout>
