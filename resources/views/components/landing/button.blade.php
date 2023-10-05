@if ($route)
    <a href="{{ $route }}"
        class="block py-3 px-7 {{ $background }} text-base {{ $border }} {{ $rounded }} {{ $textColor }} {{ $hover }} transition-colors duration-300 ease-in-out">
        {{ $slot }}
    </a>
@else
    <button
        class="py-3 px-7 {{ $background }} {{ $border }} {{ $rounded }} {{ $textColor }} {{ $hover }} transition-colors duration-300 ease-in-out" type="submit">
        {{ $slot }}
    </button>
@endif
