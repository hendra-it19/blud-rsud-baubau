<?php

namespace App\Http\Controllers;

use App\Models\SikDokter;
use App\Models\SikJadwalDokter;
use App\Models\SikPoliklinik;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LayananController extends Controller
{
    public function informasiLayanan(): View
    {
        $judulHalaman = 'Informasi Layanan';
        return view('landingpage.layanan.informasi_layanan', compact('judulHalaman'));
    }

    public function jadwalDokter()
    {
        $judulHalaman = 'Jadwal Dokter';
        $poli = SikPoliklinik::with('jadwal')->get();
        return $poli;
        return view('landingpage.layanan.jadwal_dokter', compact('judulHalaman'));
    }
}
