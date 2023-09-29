<div class="{{ $colSpan }} flex flex-col justify-center">
    <div class="bg-white flex flex-col rounded-2xl py-14 px-12 shadow-black/5 shadow-xl">
        <div class="flex flex-col space-y-3">
            <h2 class="uppercase text-custom-grey font-semibold text-sm">{{ $subtitle }}</h2>
            <h1 class="text-black font-normal text-3xl">{{ $title }}</h1>
        </div>
        <form action="{{ route($action) }}" method="POST" class="{{ $formClass }}">
            @csrf
            {{ $slot }}
            <div class="flex flex-row pl-6 space-x-20 mt-9 justify-end">
                @if ($action == 'login')
                    <x-landing.textButton route="register">
                        Belum punya akun?
                    </x-landing.textButton>
                @else
                    <x-landing.textButton route="login">
                        Sudah punya akun?
                    </x-landing.textButton>
                @endif
                <x-landing.button>
                    Masuk
                </x-landing.button>
            </div>
        </form>
    </div>
</div>
