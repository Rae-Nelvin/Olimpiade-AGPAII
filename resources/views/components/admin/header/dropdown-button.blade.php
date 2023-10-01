<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
    class="hidden md:inline-flex text-black font-normal text-base space-x-3 items-center" type="button">
    <p>Hi, {{ Auth::user()->name }}</p><svg class="w-2.5 h-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4" />
    </svg>
</button>

<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="block px-4 py-2 hover:bg-custom-orange hover:text-white w-full text-left">Sign
                    out</button>
            </form>
        </li>
    </ul>
</div>
