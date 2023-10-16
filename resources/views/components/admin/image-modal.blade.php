<div x-data="{ showImageModal: false }">
    <!-- Button to open the delete modal -->
    <button @click="showImageModal = true"
        class="text-blue-500 underline font-normal text-xs">{{ \Illuminate\Support\Str::limit($imageUrl, 20, $end = '...') }}</button>
    <div x-show="showImageModal"
        class="fixed inset-0 w-full h-full z-50 bg-black bg-opacity-50 duration-300 overflow-y-auto">
        <div class="relative lg:w-fit mx-2 sm:mx-auto my-20 opacity-100" @click.away="showImageModal = false">
            <div class="relative bg-white shadow-lg rounded-md z-20">
                <div class="p-6 text-center flex flex-col justify-between">
                    <div class="flex flex-row items-start">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                            @click="showImageModal = false">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <img src="{{ asset('storage/' . $imageUrl) }}" alt="Image" class="max-w-5xl max-h-screen" />
                    <button @click="showImageModal = false" type="button"
                        class="text-white bg-blue-500 hover:bg-blue-700 transition-colors duration-300 mt-10 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>
