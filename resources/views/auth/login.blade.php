<x-auth-layout>
    <div class="col-span-1"></div>
    <x-auth.form.box colSpan="col-span-4" title="Yakin, kamu pasti bisa!" subtitle="Masuk Dashboard" action="login"
        formClass="mt-9 space-y-5">
        <x-auth.form.formInput label="E-mail" type="text" name="email" />
        <x-auth.form.formInput label="Password" type="password" name="password" />
    </x-auth.form.box>
</x-auth-layout>
