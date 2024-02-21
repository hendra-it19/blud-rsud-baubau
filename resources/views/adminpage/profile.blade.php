@extends('layouts.adminpage.main')

@section('konten')
    <div class="p-4 sm:ml-64 lg:p-10">

        <div class="flex justify-between gap-5 mb-7 lg:mb-12">
            <div class="flex flex-col gap-4">
                <h5 class="text-2xl font-semibold capitalize">Perbarui Akun</h5>
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
                                    class="text-sm font-medium text-gray-700 hover:text-primary-700 ms-1 md:ms-2">Profile</span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>


        <div class="my-2">
            @session('success')
                <div id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg shadow bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="text-sm font-medium ms-3">
                        {{ Session::get('success') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endsession
        </div>


        <div class="relative">
            <form action="{{ url('/admin/profile') }}" class="p-1 rounded shadow sm:rounded-lg md:p-4" method="POST">
                @csrf
                @method('put')

                <div class="mb-3 text-sm text-gray-500">
                    Catatan : Kosongkan input password jika tidak ingin mengganti
                </div>
                <div class="form-group">

                    <div class="input-group">
                        <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Lengkap
                        </label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap"
                            class="input @error('nama_lengkap')
                                is-invalid
                            @enderror"
                            placeholder="nama lengkap" required value="{{ old('nama_lengkap', auth()->user()->nama) }}">
                        @error('nama_lengkap')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">
                            Username
                        </label>
                        <input type="text" id="username" name="username"
                            class="input @error('username')
                                is-invalid
                            @enderror"
                            placeholder="username" required value="{{ old('username', auth()->user()->username) }}">
                        @error('username')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                            password
                        </label>
                        <input type="password" id="password" name="password"
                            class="input @error('password')
                                is-invalid
                            @enderror"
                            placeholder="password" value="{{ old('password') }}">
                        @error('password')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="konfirmasi_password" class="block mb-2 text-sm font-medium text-gray-900">
                            Konfirmasi Password
                        </label>
                        <input type="password" id="konfirmasi_password" name="konfirmasi_password"
                            class="input @error('konfirmasi_password')
                                is-invalid
                            @enderror"
                            placeholder="konfirmasi password" value="{{ old('konfirmasi_password') }}">
                        @error('konfirmasi_password')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ url('/admin') }}"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 me-2 focus:outline-none">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 me-2 focus:outline-none">
                        Perbarui Akun
                    </button>

                </div>
            </form>
        </div>

    </div>
@endsection
