<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\SikJadwal;
use App\Models\Struktural;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TentangKamiController extends Controller
{
    public function profil(): View
    {
        $judulHalaman = 'Profil';
        return view('landingpage.tentang_kami.profil', compact('judulHalaman'));
    }

    public function visiMisi(): View
    {
        $judulHalaman = 'Visi dan Misi';
        return view('landingpage.tentang_kami.visi_misi', compact('judulHalaman'));
    }

    public function struktural(): View
    {
        $judulHalaman = 'Struktural';
        $direktur = Struktural::orderBy('id', 'ASC')->first();
        $struktural = Struktural::orderBy('id', 'ASC')->get();
        return view('landingpage.tentang_kami.struktural', compact('judulHalaman', 'direktur', 'struktural'));
    }
}
