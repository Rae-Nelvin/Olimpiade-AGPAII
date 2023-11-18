<x-app-layout>
    <x-admin.header title="Dashboard Peserta" />
    <div class="flex flex-row space-x-7 mt-4">
        <div class="w-2/5">
            <x-admin.box header="Username & Password Ujian">
                @if ($participant->username_ujian)
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex flex-col">
                            <h2 class="font-normal text-3xl">Username:</h2>
                            <h3 class="font-light text-lg">X42305239</h3>
                        </div>
                        <div class="flex flex-col text-right">
                            <h2 class="font-normal text-3xl">Password:</h2>
                            <h3 class="font-light text-lg">X42305239</h3>
                        </div>
                    </div>
                @else
                    <h1 class="font-normal text-3xl text-black">Harap menunggu tanggal pelaksanaan ujian pada
                        <span class="font-bold">20 November 2023</span>
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
                        <x-landing.button route="https://t.me/+6WUcT3Y8Q7wwYmFl">Masuk Telegram</x-landing.button>
                    </div>
                </div>
            </x-admin.box>
        </div>
    </div>
    <div class="mt-10 w-2/3">
        @if (!$participant->user->province_id)
            <x-admin.box header="Pengingat">
                <div class="flex flex-col space-y-7">
                    <p class="font-normal text-3xl">Tolong segera perbaharui data diri anda</p>
                    <div class="w-fit">
                        <x-landing.button route="{{ route('perbaharui-data-diri', $participant->id) }}">Perbaharui Data
                            Diri</x-landing.button>
                    </div>
                </div>
            </x-admin.box>
        @endif
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
