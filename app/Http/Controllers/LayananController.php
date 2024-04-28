<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\JadwalDokterController;
use App\Models\Dokter;
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
        $data = SikPoliklinik::with('jadwal')->get();
        $namaPoli = SikPoliklinik::select('nm_poli')->get();
        return view('landingpage.layanan.jadwal_dokter', compact('judulHalaman', 'data', 'namaPoli'));
    }

    public function jadwalDokterPoli($poli)
    {
        $judulHalaman = 'Jadwal Dokter';
        // return SikJadwalDokter::all();
        $poli = SikPoliklinik::with('jadwal', 'jadwal.dokter')->where('kd_poli', $poli)->first();
        $data =  $poli->jadwal;
        return view('landingpage.layanan.jadwal_dokter_poli', compact('judulHalaman', 'data', 'poli'));
    }

    public function dokter(Request $request)
    {
        if (isset($request->nama_dokter)) {
            $data = Dokter::where('nama_dokter', 'LIKE', "%{$request->nama_dokter}%")->get();
        } else {
            $data = Dokter::latest('id')->get();
        }
        return view('landingpage.tentang_kami.dokter', [
            'judulHalaman' => 'Dokter',
            'data' => $data,
        ]);
    }
}
