<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GambarTema;
use Illuminate\Http\Request;

class GambarTemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {;
        return view('adminpage.gambar-tema.index', [
            'judulHalaman' => 'Hero Section',
            'data' => GambarTema::latest('id')->get(),
            'no' => 1,
            'status' => GambarTema::latest('id')->first() == null ? false : true
        ]);
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
        $request->validate([
            'foto' => ['required', 'image']
        ]);
        $cek = GambarTema::latest('id')->first();
        if (!empty($cek)) {
            unlink($cek->foto);
            $cek->delete();
        }

        $foto = $request->file('foto');
        if (!empty($foto)) {
            $namaFoto = date('dmyHis') . '-hero-section.' . $foto->getClientOriginalExtension();
            $pathFoto = 'upload/tema/';
            $foto->move($pathFoto, $namaFoto);
        }
        GambarTema::create([
            'foto' => $pathFoto . $namaFoto,
        ]);
        return redirect()->route('gambar-hero.index')
            ->with('success', 'Gambar hero section berhasil diupload!');
    }

    /**
     * Display the specified resource.
     */
    public function show(GambarTema $gambarTema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GambarTema $gambarTema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GambarTema $gambarTema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GambarTema $gambarTema)
    {
        //
    }
}
