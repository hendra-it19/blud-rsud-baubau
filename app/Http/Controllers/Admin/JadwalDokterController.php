<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SikJadwalDokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{

    private $judulHalaman = 'Jadwal Dokter';

    public function index()
    {
        $judulHalaman = $this->judulHalaman;
        $data = SikJadwalDokter::with('dokter')->orderBy('hari_kerja')->get();
        $no = 1;
        return view('adminpage.jadwal-dokter.index', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SikJadwalDokter $sikJadwalDokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SikJadwalDokter $sikJadwalDokter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SikJadwalDokter $sikJadwalDokter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SikJadwalDokter $sikJadwalDokter)
    {
        //
    }
}
