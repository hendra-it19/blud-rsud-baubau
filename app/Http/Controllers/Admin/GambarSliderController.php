<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GambarSlider;
use Illuminate\Http\Request;

class GambarSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminpage.gambar-slider.index', [
            'judulHalaman' => 'Daftar Gambar Slider',
            'data' => GambarSlider::latest('id')->get(),
            'no' => 1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('adminpage.gambar-slider.create', [
        //     'judulHalaman' => 'Tambah Gambar slider',
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => ['required', 'image']
        ]);
        $foto = $request->file('foto');
        $nama  = date('dmyHis-') . 'slider.' . $foto->getClientOriginalExtension();
        $path = 'upload/slider/';
        $foto->move($path, $nama);
        GambarSlider::create([
            'foto' => $path . $nama,
        ]);
        return redirect()->back()->with('success', 'Gambar slider berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(GambarSlider $gambarSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GambarSlider $gambarSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GambarSlider $gambarSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GambarSlider $gambarSlider)
    {
        unlink($gambarSlider->foto);
        $gambarSlider->delete();
        return redirect()->route('gambar-slider.index')
            ->with('success', 'Gambar slider berhasil dihapus!');
    }
}
