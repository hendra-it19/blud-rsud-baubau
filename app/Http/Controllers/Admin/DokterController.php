<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SikDokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{

    private $judulHalaman = 'Dokter';

    public function index()
    {
        $judulHalaman = $this->judulHalaman;
        $data = SikDokter::orderBy('kd_dokter', 'ASC')->get();
        $no = 1;
        return view('adminpage.dokter.index', compact('judulHalaman', 'data', 'no'));
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
    public function show(SikDokter $sikDokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SikDokter $sikDokter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SikDokter $sikDokter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SikDokter $sikDokter)
    {
        //
    }
}
