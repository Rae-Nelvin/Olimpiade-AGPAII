<a href="{{ $route }}"
    class="flex flex-row space-x-3 items-center text-sm py-2 pl-3 pr-4 text-custom-grey font-normal bg-custom-orange rounded md:bg-transparent md:py-3 md:px-5 @if ($active) md:text-custom-orange @endif hover:text-custom-orange hover:bg-custom-light-orange transition-colors duration-500 ease-in-out">
    {{ $icon }}
    <p>{{ $name }}</p>
</a>
