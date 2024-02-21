@extends('layouts.adminpage.main')

@section('konten')
    <div class="p-4 sm:ml-64 lg:p-10">

        <div class="flex justify-between gap-5 mb-7 lg:mb-12">
            <div class="flex flex-col gap-4">
                <h5 class="text-2xl font-semibold capitalize">Update Data Struktural</h5>
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ url('/admin') }}"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 21">
                                    <path
                                        d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                    <path
                                        d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('strukturals.index') }}" class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-700 hover:text-primary-600 rtl:rotate-180"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-700 hover:text-primary-700 ms-1 md:ms-2">Struktural</span>
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">Ubah</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>


        <div class="relative">
            <form action="{{ route('strukturals.update', $struktural->id) }}"
                class="p-1 rounded shadow sm:rounded-lg md:p-4" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="mb-3 border-4 rounded-md w-36 h-36">
                    <img src="{{ asset($struktural->foto) }}" alt="" id="preview-selected-image"
                        class="object-cover w-full h-full bg-cover">
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-900">
                            Input Foto
                        </label>
                        <input type="file" name="foto" id="foto" accept="image/*" onchange="previewImage(event)"
                            class="w-full border rounded-md cursor-pointer @error('foto')
                                is-invalid
                            @enderror">
                        @error('foto')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Lengkap
                        </label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap"
                            class="input @error('nama_lengkap')
                                is-invalid
                            @enderror"
                            placeholder="nama lengkap" required value="{{ old('nama_lengkap', $struktural->nama) }}">
                        @error('nama_lengkap')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">
                            Jabatan
                        </label>
                        <input type="text" id="jabatan" name="jabatan"
                            class="input @error('jabatan')
                                is-invalid
                            @enderror"
                            placeholder="jabatan" required value="{{ old('jabatan', $struktural->jabatan) }}">
                        @error('jabatan')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="profil" class="block mb-2 text-sm font-medium text-gray-900">
                            Profil Singkat
                        </label>
                        <textarea type="text" id="profil" name="profil" rows="7"
                            class="input h-auto @error('profil')
                                is-invalid
                            @enderror"
                            placeholder="Profil Singkat">{{ old('profil', $struktural->profil) }}</textarea>
                        @error('profil')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('strukturals.index') }}"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 me-2 focus:outline-none">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 me-2 focus:outline-none">
                        Perbarui Data
                    </button>

                </div>
            </form>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        const previewImage = (event) => {
            /**
             * Get the selected files.
             */
            const imageFiles = event.target.files;
            /**
             * Count the number of files selected.
             */
            const imageFilesLength = imageFiles.length;
            /**
             * If at least one image is selected, then proceed to display the preview.
             */
            if (imageFilesLength > 0) {
                /**
                 * Get the image path.
                 */
                const imageSrc = URL.createObjectURL(imageFiles[0]);
                /**
                 * Select the image preview element.
                 */
                const imagePreviewElement = document.querySelector("#preview-selected-image");
                /**
                 * Assign the path to the image preview element.
                 */
                imagePreviewElement.src = imageSrc;
                /**
                 * Show the element by changing the display value to "block".
                 */
                imagePreviewElement.style.display = "block";
            }
        };
    </script>
@endpush
