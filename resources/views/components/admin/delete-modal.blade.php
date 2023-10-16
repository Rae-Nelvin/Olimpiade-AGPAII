<div x-data="{ showDeleteModal: false, recordId: {{ $user->id }} }">
    <!-- Button to open the delete modal -->
    <button @click="showDeleteModal = true"
        class="bg-custom-red text-white py-1 px-2 font-normal text-xs rounded-md">Delete</button>
    <div x-show="showDeleteModal"
        class="fixed inset-0 w-full h-full z-50 bg-black bg-opacity-50 duration-300 overflow-y-auto">
        <div class="relative lg:w-fit mx-2 sm:mx-auto my-80 opacity-100" @click.away="showDeleteModal = false">
            <div class="relative bg-white shadow-lg rounded-md z-20">
                <div class="p-6 text-center">
                    <div class="flex flex-row items-start">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" @click="showDeleteModal = false">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus {{ $user->name }}?</h3>
                    <div class="flex flex-row space-x-4 justify-center items-center mt-10">
                        <form action="{{ route('delete-participant', $user->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <input type="hidden" value="{{ $user->id }}" />
                            <button @click="showDeleteModal = false" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Ya, Hapus
                            </button>
                        </form>
                        <button @click="showDeleteModal = false" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak, Batalkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
