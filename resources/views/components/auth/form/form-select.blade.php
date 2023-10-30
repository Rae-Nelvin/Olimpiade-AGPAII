<div class="flex flex-col space-y-4">
    <label for="{{ $label }}">{{ $label }}</label>
    <select name="{{ $name }}"
        class="border-[1px] py-3 {{ $errors->has($name) ? 'bg-custom-light-red' : 'bg-transparent' }} border-custom-orange focus:ring-custom-orange focus:border-custom-orange focus:bg-custom-light-orange rounded-lg autofill:bg-custom-light-orange" required>
        <option disabled selected>Asal Provinsi</option>
        @foreach ($datas as $data)
            <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select>
</div>
