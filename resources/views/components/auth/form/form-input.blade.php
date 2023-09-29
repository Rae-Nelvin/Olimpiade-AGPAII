@if ($type === 'file')
    <div class="flex flex-col space-y-4">
        <label for="{{ $label }}" class="font-normal text-base text-custom-black">{{ $label }}</label>
        <div
            class="py-3 px-5 border-[1px] border-custom-orange focus:ring-custom-orange focus:border-custom-orange focus:bg-custom-light-orange rounded-lg autofill:bg-custom-light-orange {{ $errors->has($name) ? 'bg-custom-light-red' : 'bg-transparent' }}">
            <label for="{{ $name }}-input" class="flex flex-row space-x-3 w-full items-center text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M10 16h4c.55 0 1-.45 1-1v-5h1.59c.89 0 1.34-1.08.71-1.71L12.71 3.7a.996.996 0 0 0-1.41 0L6.71 8.29c-.63.63-.19 1.71.7 1.71H9v5c0 .55.45 1 1 1zm-4 2h12c.55 0 1 .45 1 1s-.45 1-1 1H6c-.55 0-1-.45-1-1s.45-1 1-1z" />
                </svg>
                <span>
                    {{ $label }}
                </span>
            </label>
            <input type="file" id="{{ $name }}-input" name="{{ $name }}" class="w-full hidden"
                required />
            {{-- @error($name)
                <span class="text-custom-red text-md">{{ $message }}</span>
            @enderror --}}
        </div>
    </div>
@else
    <div class="flex flex-col space-y-4">
        <label for="{{ $label }}" class="font-normal text-base text-custom-black">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}"
            class="py-3 px-5 border-[1px] {{ $errors->has($name) ? 'bg-custom-light-red' : 'bg-transparent' }} border-custom-orange focus:ring-custom-orange focus:border-custom-orange focus:bg-custom-light-orange rounded-lg autofill:bg-custom-light-orange"
            placeholder="{{ $label }}" required />
    </div>
@endif
