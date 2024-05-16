<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\JadwalDokterController;
use App\Models\Dokter;
use App\Models\SikBookingPeriksa;
use App\Models\SikDokter;
use App\Models\SikJadwalDokter;
use App\Models\SikPoliklinik;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $cari = null;
        if (isset($request->nama_dokter)) {
            $cari = $request->nama_dokter;
            $data = Dokter::where('nama_dokter', 'LIKE', "%{$request->nama_dokter}%")->get();
        } else {
            $data = Dokter::latest('id')->get();
        }
        return view('landingpage.tentang_kami.dokter', [
            'judulHalaman' => 'Dokter',
            'data' => $data,
            'cari' => $cari,
        ]);
    }

    public function booking()
    {
        return view('landingpage.tentang_kami.booking', [
            'judulHalaman' => 'Dokter',
            'poliklinik' => SikPoliklinik::all(),
        ]);
    }

    public function Detailbooking($no_booking)
    {
        return view('landingpage.tentang_kami.detail-booking', [
            'judulHalaman' => 'Dokter',
            'data' => SikBookingPeriksa::where('no_booking', $no_booking)->first(),
        ]);
    }

    public function PdfBooking($no_booking)
    {
        $data = SikBookingPeriksa::where('no_booking', $no_booking)->first();
        $pdf = Pdf::loadView('landingpage.tentang_kami.booking-pdf', compact('data'));
        // return view('landingpage.tentang_kami.booking-pdf', compact('data'));
        return $pdf->stream('booking-' . $no_booking . '.pdf');
    }

    public function Postbooking(Request $request)
    {
        $request->validate([
            'tanggal' => ['required', 'after:' . now() . ''],
            'nama_lengkap' => ['required'],
            'alamat' => ['required'],
            'nomor_hp' => ['required'],
            'email' => ['required', 'email'],
            'poliklinik' => ['required'],
            'tambahan_pesan' => ['nullable'],
            'captcha' => ['required', 'captcha'],
        ]);

        // $id = IdGenerator::generate([
        //     'table' => SikBookingPeriksa::class,
        //     'field' => 'no_booking',
        //     'length' => 14,
        //     'prefix' => 'BP' . date('Ymd'),
        // ]);

        $cek = SikBookingPeriksa::whereDate('tanggal', Carbon::parse($request->tanggal))->count();
        $nol = '000';
        if ($cek > 9) {
            $nol = '00';
        } else if ($cek > 99) {
            $nol  = '0';
        } else if ($cek > 999) {
            $nol = '';
        }
        $id = 'BP' . carbon::parse($request->tanggal)->format('Ymd') . $nol . $cek + 1;
        SikBookingPeriksa::create([
            'no_booking' => $id,
            'tanggal_booking' => now(),
            'nama' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_telp' => $request->nomor_hp,
            'email' => $request->email,
            'kd_poli' => $request->poliklinik,
            'tambahan_pesan' => $request->tambahan_pesan,
            'status' => 'Belum Dibalas',
            'tanggal' => $request->tanggal,
        ]);

        notify()->success('Berhasil melakukan booking', 'berhasil');
        return redirect('/booking/' . $id);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
