<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostinganBerita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingpageController extends Controller
{
    public function utama(): View
    {
        $judulHalaman = 'Beranda';
        $data = [
            'jumlah_pegawai' => 300,
            'jumlah_dokter' => 20,
            'lama_beroperasi' => 40,
            'akumulasi_pasien' => '100K',
            'jumlah_berita' => 40,
        ];
        return view('landingpage.beranda', compact('judulHalaman', 'data'));
    }

    public function berita(Request $request): View
    {
        $dataPerPage = 5;
        if (isset($request->kategori)) {
            $kategori = $request->kategori;
            $berita = PostinganBerita::with('category', 'user')->whereHas('category', function ($query) use ($kategori) {
                $query->where('nama_kategori', $kategori);
            })->latest('id')->simplePaginate($dataPerPage);
        } else {
            $berita = PostinganBerita::with('category', 'user')->latest('id')->simplePaginate($dataPerPage);
        }
        $judulHalaman = 'Berita';
        return view('landingpage.berita', compact('judulHalaman', 'berita'));
    }

    public function beritaDetail(Request $request, $slug): View
    {
        $judulHalaman = 'Berita';
        $berita = PostinganBerita::with('category', 'user')->where('slug', $slug)->first();
        views($berita)->cooldown(now()->addHours(24))->record();
        $jumlahViews = views($berita)->count();
        $ip = $request->getClientIp();
        return view('landingpage.berita-detail', compact('judulHalaman', 'berita', 'jumlahViews', 'ip'));
    }

    public function kontak(): View
    {
        $judulHalaman = 'Kontak';
        return view('landingpage.kontak', compact('judulHalaman'));
    }
}
