<x-app-layout>
    <x-admin.header title="Dashboard Peserta" />
    <div class="flex flex-row space-x-7 mt-4">
        <div class="w-2/5">
            <x-admin.box header="Token Ujian">
                @if ($today->isSameDay($targetDate))
                    <div class="flex flex-row justify-between">
                        <h2 id="copyValue" class="font-normal text-3xl">X42305239</h2>
                        <button id="copyButton"
                            class="flex flex-row text-custom-grey text-sm space-x-1 items-center active:text-custom-orange">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M9 4h6v2H9zm11 7h-7a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2z" />
                                <path fill="currentColor"
                                    d="M21 9V6a2 2 0 0 0-2-2h-2a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h4v-9a2 2 0 0 1 2-2h10zM9 6V4h6v2H9z" />
                            </svg>
                            <p>Copy</p>
                        </button>
                    </div>
                @else
                    <h1 class="font-normal text-3xl text-black">Harap menunggu tanggal pelaksanaan ujian pada
                        <span class="font-bold">2 November 2023</span>
                    </h1>
                @endif
            </x-admin.box>
        </div>
        <div class="w-3/5">
            <x-admin.box header="Informasi Umum">
                <div class="flex flex-col space-y-7">
                    <p class="font-normal text-base">Olimpiade AGPAII 2023 menggunakan Telegram sebagai platform
                        kominikasi
                        antara peserta dan panitia.</p>
                    <div class="w-fit">
                        <x-landing.button href="#">Masuk Telegram</x-landing.button>
                    </div>
                </div>
            </x-admin.box>
        </div>
    </div>
</x-app-layout>

<script>
    const copyButton = document.getElementById('copyButton');
    const copyValue = document.getElementById('copyValue');

    copyButton.addEventListener('click', () => {
        const textArea = document.createElement('textarea');
        textArea.value = copyValue.textContent;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        // You can provide user feedback here, like displaying a tooltip or a success message.
    });
</script>
