<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $judulHalaman = 'Dokter';

    public function index()
    {
        $judulHalaman = $this->judulHalaman;
        $data = Dokter::orderBy('id', 'ASC')->get();
        $no = 1;
        return view('adminpage.dokter.index', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman  = $this->judulHalaman;
        return view('adminpage.dokter.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_dokter' => ['required'],
            'poliklinik' => ['required'],
            'nomor_hp' => ['required'],
            'nomor_sip' => ['required'],
            'foto' => ['required', 'image', 'max:5024'],
        ]);
        $fotoTemp = $request->file('foto');
        if (!empty($fotoTemp)) {
            $namaFoto = date('dmyHis-') . 'dokter.' . $fotoTemp->getClientOriginalExtension();
            $pathFoto = 'upload/dokter/';
            $fotoTemp->move($pathFoto, $namaFoto);
        }
        Dokter::create([
            'nama_dokter' => $request->nama_dokter,
            'poliklinik' => $request->poliklinik,
            'no_hp' => $request->nomor_hp,
            'no_sip' => $request->nomor_sip,
            'foto' => $pathFoto . $namaFoto,
        ]);

        return redirect()
            ->route('dokter.index')
            ->with('success', 'Data dokter berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        $judulHalaman = $this->judulHalaman;
        return view('adminpage.dokter.update', compact('judulHalaman', 'dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        $request->validate([
            'nama_dokter' => ['required'],
            'poliklinik' => ['required'],
            'nomor_hp' => ['required'],
            'nomor_sip' => ['required'],
            'foto' => ['nullable', 'image', 'max:5024'],
        ]);
        $fotoTemp = $request->file('foto');
        $foto = null;
        if (!empty($fotoTemp)) {
            $namaFoto = date('dmyHis-') . 'dokter.' . $fotoTemp->getClientOriginalExtension();
            $pathFoto = 'upload/dokter/';
            $fotoTemp->move($pathFoto, $namaFoto);
            unlink($dokter->foto);
            $foto = $pathFoto . $namaFoto;
        } else {
            $foto = $dokter->foto;
        }
        $dokter->update([
            'nama_dokter' => $request->nama_dokter,
            'poliklinik' => $request->poliklinik,
            'no_hp' => $request->nomor_hp,
            'no_sip' => $request->nomor_sip,
            'foto' => $foto,
        ]);
        return redirect()
            ->route('dokter.index')
            ->with('success', 'Data dokter berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        unlink($dokter->foto);
        $dokter->delete();
        return redirect()
            ->route('dokter.index')
            ->with('success', 'Data dokter berhasil dihapus!');
    }
}
