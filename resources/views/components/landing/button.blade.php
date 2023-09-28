@if ($route)
    <a href="{{ $route }}"
        class="block py-3 px-7 bg-white border-custom-orange border-[1px] {{ $rounded }} text-custom-orange hover:bg-custom-orange hover:text-white transition-colors duration-300 ease-in-out">
        {{ $slot }}
    </a>
@else
    <button
        class="py-3 px-7 bg-white border-custom-orange border-[1px] {{ $rounded }} text-custom-orange hover:bg-custom-orange hover:text-white transition-colors duration-300 ease-in-out">
        {{ $slot }}
    </button>
@endif
