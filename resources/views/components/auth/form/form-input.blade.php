@if ($type === 'file')
    <div class="flex flex-col space-y-4">
        <label for="{{ $label }}" class="font-normal text-base text-custom-black">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}"
            class="border-[1px] {{ $errors->has($name) ? 'bg-custom-light-red' : 'bg-transparent' }} border-custom-orange focus:ring-custom-orange focus:border-custom-orange focus:bg-custom-light-orange rounded-lg autofill:bg-custom-light-orange"
            placeholder="{{ $label }}" required />
    </div>
@else
    <div class="flex flex-col space-y-4">
        <label for="{{ $label }}" class="font-normal text-base text-custom-black">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}"
            class="py-3 px-5 border-[1px] {{ $errors->has($name) ? 'bg-custom-light-red' : 'bg-transparent' }} border-custom-orange focus:ring-custom-orange focus:border-custom-orange focus:bg-custom-light-orange rounded-lg autofill:bg-custom-light-orange"
            placeholder="{{ $label }}" required />
    </div>
@endif
