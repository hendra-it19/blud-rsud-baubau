<!-- Main modal -->
<div id="modal-create" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Gambar Hero Section
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="modal-create">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form action="{{ route('gambar-hero.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="mb-3 border-4 rounded-md w-80 h-36 bg-cover object-cover">
                        <img src="https://placehold.co/1080x1080?text=Hero+Section" alt=""
                            id="preview-selected-image" class="object-cover w-full h-full bg-cover">
                    </div>

                    <div>
                        <div class="input-group">
                            <label for="foto" class="block mb-2 text-sm font-medium text-gray-900">
                                Input Foto
                            </label>
                            <input type="file" name="foto" id="foto" accept="image/*"
                                onchange="previewImage(event)"
                                class="w-full border rounded-md cursor-pointer py-0 @error('foto')
                                    is-invalid
                                @enderror"
                                required>
                            @error('foto')
                                <small class="text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-10">
                        <hr class="mb-4">
                        <button data-modal-hide="modal-create" type="button"
                            class="px-5 py-2 mb-2 text-sm font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 me-2 focus:outline-none">
                            Batal
                        </button>
                        <button type="submit"
                            class="px-5 py-2 mb-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 me-2 focus:outline-none">
                            Simpan Gambar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
