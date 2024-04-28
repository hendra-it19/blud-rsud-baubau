@extends('layouts.adminpage.main')

@section('konten')
    <div class="p-4 sm:ml-64">


        <section class="mt-10">
            <div class="flex flex-wrap w-full gap-6">
                <div
                    class="flex flex-col items-center justify-center gap-4 p-4 px-10 bg-white rounded shadow-md border-t-2 border-primary-700">
                    <h4 class="font-semibold">Kategori Berita</h4>
                    <p>{{ $jumlahKategoriBerita }}</p>
                </div>
                <div
                    class="flex flex-col items-center justify-center gap-4 p-4 px-10 bg-white rounded shadow-md border-t-2 border-primary-700">
                    <h4 class="font-semibold">Postingan Berita</h4>
                    <p>{{ $jumlahBerita }}</p>
                </div>
                <div
                    class="flex flex-col items-center justify-center gap-4 p-4 px-10 bg-white rounded shadow-md border-t-2 border-primary-700">
                    <h4 class="font-semibold">Data Dokter</h4>
                    <p>{{ $jumlahDokter }}</p>
                </div>
                <div
                    class="flex flex-col items-center justify-center gap-4 p-4 px-10 bg-white rounded shadow-md border-t-2 border-primary-700">
                    <h4 class="font-semibold">Arsip Dokumen</h4>
                    <p>{{ $jumlahEberkas }}</p>
                </div>
            </div>
        </section>

        <section>
            <canvas id="myChart" height="100px"></canvas>
        </section>

    </div>
@endsection
@push('scripts')
    <script src="{{ asset('asset/chart/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/chart/chart.js') }}"></script>
    <script></script>
@endpush
