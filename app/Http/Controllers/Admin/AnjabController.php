<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnjabAbk;
use Illuminate\Http\Request;

class AnjabController extends Controller
{

    private $judulHalaman = 'E-Berkas';

    public function index()
    {
        $judulHalaman = $this->judulHalaman;
        $data = AnjabAbk::latest('id')->get();
        $no = 1;
        return view('adminpage.e-berkas.index', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = $this->judulHalaman;
        return view('adminpage.e-berkas.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_berkas' => ['required'],
            'jenis_berkas' => ['required'],
            'file' => ['required', 'mimes:pdf,PDF'],
        ]);
        $file = $request->file('file');
        $name = date('dmy-His') . $request->nama_berkas . '.' . $file->getClientOriginalExtension();
        $path = 'upload/e-berkas/';
        $fileBaru = $path . $name;
        $file->move($path, $name);
        AnjabAbk::create([
            'nama_berkas' => ucwords($request->nama_berkas),
            'jenis_berkas' => ucwords($request->jenis_berkas),
            'file' => $fileBaru
        ]);
        return redirect()->route('anjab.index')
            ->with('success', 'Data E-Berkas berhasil diupload!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AnjabAbk $anjabAbk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($anjabAbk)
    {
        $judulHalaman = $this->judulHalaman;
        $anjabAbk = AnjabAbk::find($anjabAbk);
        return view('adminpage.e-berkas.update', compact('judulHalaman', 'anjabAbk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $anjabAbk)
    {
        $anjabAbk = AnjabAbk::find($anjabAbk);
        $request->validate([
            'nama_berkas' => ['required'],
            'jenis_berkas' => ['required'],
            'file' => ['nullable', 'mimes:pdf']
        ]);
        if (isset($request->file)) {
            $file = $request->file('file');
            $name = date('dmy-His') . '-' . $request->nama_berkas . '.' . $file->getClientOriginalExtension();
            $path = 'upload/e-berkas/';
            unlink($anjabAbk->file);
            $file->move($path, $name);
            $fileBaru = $path . $name;
        } else {
            $fileBaru = $anjabAbk->file;
        }
        $anjabAbk->update([
            'nama_berkas' => ucwords($request->nama_berkas),
            'jenis_berkas' => ucwords($request->jenis_berkas),
            'file' => $fileBaru,
        ]);
        return redirect()->route('anjab.index')
            ->with('success', 'Data E-Berkas ' . $anjabAbk->nama_berkas . ' diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnjabAbk $anjabAbk)
    {
        unlink($anjabAbk->file);
        $anjabAbk->delete();
        return redirect()->route('anjab.index')
            ->with('success', 'Data E-Berkas berhasil dihapus!');
    }
}
