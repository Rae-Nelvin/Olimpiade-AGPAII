<div class="{{ $colSpan }} flex flex-col justify-center">
    <div class="bg-white flex flex-col rounded-2xl py-14 px-12 shadow-black/5 shadow-xl">
        <div class="flex {{ $colSpan == 'col-span-4' ? 'flex-col space-y-9' : 'flex-row' }} justify-between items-start">
            <div class="flex flex-col space-y-3">
                <h2 class="uppercase text-custom-grey font-semibold text-sm">{{ $subtitle }}</h2>
                <h1 class="text-black font-normal text-3xl">{{ $title }}</h1>
            </div>
            @if ($errors->any())
                <div
                    class="bg-custom-light-red rounded-md text-custom-red py-3 px-5 flex flex-row space-x-2 {{ $colSpan == 'col-span-4' ? 'w-full' : 'w-1/3' }} items-center">
                    <div class="w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 17q.425 0 .713-.288T13 16q0-.425-.288-.713T12 15q-.425 0-.713.288T11 16q0 .425.288.713T12 17Zm-1-4h2V7h-2v6Zm1 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z" />
                        </svg>
                    </div>
                    <p class="text-base font-normal">{{ $errors->first() }}</p>
                </div>
            @endif
        </div>
        <form action="{{ route($action) }}" method="POST" class="{{ $formClass }}" enctype="multipart/form-data">
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
