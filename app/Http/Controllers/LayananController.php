<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LayananController extends Controller
{
    public function informasiLayanan(): View
    {
        $judulHalaman = 'Informasi Layanan';
        return view('landingpage.layanan.informasi_layanan', compact('judulHalaman'));
    }

    public function jadwalDokter(): View
    {
        $judulHalaman = 'Jadwal Dokter';
        return view('landingpage.layanan.jadwal_dokter', compact('judulHalaman'));
    }
}
