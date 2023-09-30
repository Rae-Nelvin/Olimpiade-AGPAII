<a href="{{ $route }}"
    class="flex flex-row space-x-3 items-center text-sm py-2 pl-3 pr-4 text-custom-grey font-normal bg-custom-orange rounded md:bg-transparent md:py-3 md:px-5 @if ($active) md:text-custom-orange @endif">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="currentColor" fill-rule="evenodd"
            d="M2.52 7.823C2 8.77 2 9.915 2 12.203v1.522c0 3.9 0 5.851 1.172 7.063C4.343 22 6.229 22 10 22h4c3.771 0 5.657 0 6.828-1.212C22 19.576 22 17.626 22 13.725v-1.521c0-2.289 0-3.433-.52-4.381c-.518-.949-1.467-1.537-3.364-2.715l-2-1.241C14.111 2.622 13.108 2 12 2c-1.108 0-2.11.622-4.116 1.867l-2 1.241C3.987 6.286 3.038 6.874 2.519 7.823ZM11.25 18a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0v3Z"
            clip-rule="evenodd" />
    </svg>
    <p>{{ $name }}</p>
</a>
