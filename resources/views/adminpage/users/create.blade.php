@extends('layouts.adminpage.main')

@section('konten')
    <div class="p-4 sm:ml-64 lg:p-10">

        <div class="flex justify-between gap-5 mb-7 lg:mb-12">
            <div class="flex flex-col gap-4">
                <h5 class="text-2xl font-semibold capitalize">Tambah Akun</h5>
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
                            <a href="{{ route('users.index') }}" class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-700 hover:text-primary-600 rtl:rotate-180"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-700 hover:text-primary-700 ms-1 md:ms-2">Akun</span>
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">Tambah</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>


        <div class="relative">
            <form action="{{ route('users.store') }}" class="p-1 rounded shadow sm:rounded-lg md:p-4" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <div class="input-group">
                        <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Lengkap
                        </label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap"
                            class="input @error('nama_lengkap')
                                is-invalid
                            @enderror"
                            placeholder="nama lengkap" required value="{{ old('nama_lengkap') }}">
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
                            placeholder="username" required value="{{ old('username') }}">
                        @error('username')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Hak Akses</label>
                        <div class="grid w-full grid-cols-2 gap-2">
                            <div
                                class="flex items-center border border-gray-200 rounded cursor-pointer ps-4 dark:border-gray-700">
                                <input checked id="admin" type="radio" value="0" name="role"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 cursor-pointer focus:ring-blue-500 focus:ring-2">
                                <label for="admin"
                                    class="w-full py-2 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                    Admin</label>
                            </div>
                            <div
                                class="flex items-center border border-gray-200 rounded cursor-pointer ps-4 dark:border-gray-700">
                                <input id="superadmin" type="radio" value="1" name="role"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 cursor-pointer focus:ring-blue-500 focus:ring-2">
                                <label for="superadmin"
                                    class="w-full py-2 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                    Superadmin</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                            Password
                        </label>
                        <input type="password" id="password" name="password"
                            class="input @error('password')
                                is-invalid
                            @enderror"
                            placeholder="password" required value="{{ old('password') }}">
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
                            placeholder="konfirmasi password" required value="{{ old('konfirmasi_password') }}">
                        @error('konfirmasi_password')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('users.index') }}"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 me-2 focus:outline-none">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 me-2 focus:outline-none">
                        Tambah Akun
                    </button>

                </div>
            </form>
        </div>

    </div>
@endsection
