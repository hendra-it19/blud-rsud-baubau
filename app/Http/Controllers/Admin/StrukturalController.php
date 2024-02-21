<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Struktural;
use Illuminate\Http\Request;

class StrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman  = 'Struktural';
        $data = Struktural::latest('id')->get();
        $no = 1;
        return view('adminpage.strukturals.index', compact('data', 'no', 'judulHalaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman  = 'Struktural';
        return view('adminpage.strukturals.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => ['required'],
            'foto' => ['required', 'image'],
            'jabatan' => ['required'],
            'profil' => ['nullable'],
        ]);

        $foto = $request->file('foto');
        $name = date('dmy-his') . '-struktural.' . $foto->getClientOriginalExtension();
        $path = 'upload/struktural/';
        $foto->move($path, $name);

        Struktural::create([
            'nama' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'profil' => $request->profil,
            'foto' => $path . $name,
        ]);

        return redirect()->route('strukturals.index')
            ->with('success', 'Data struktural Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Struktural $struktural)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Struktural $struktural)
    {
        $judulHalaman = 'Struktural';
        return view('adminpage.strukturals.update', compact('judulHalaman', 'struktural'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Struktural $struktural)
    {
        $request->validate([
            'nama_lengkap' => ['required'],
            'foto' => ['nullable', 'image'],
            'jabatan' => ['required'],
            'profil' => ['nullable'],
        ]);

        if (isset($request->foto)) {
            $foto = $request->file('foto');
            $name = date('dmy-his') . '-struktural.' . $foto->getClientOriginalExtension();
            $path = 'upload/struktural/';
            $foto->move($path, $name);
            $foto = $path . $name;
        } else {
            $foto = $struktural->foto;
        }

        $struktural->update([
            'nama' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'profil' => $request->profil,
            'foto' => $foto,
        ]);

        return redirect()->route('strukturals.index')
            ->with('success', 'Data struktural Berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Struktural $struktural)
    {
        unlink($struktural->foto);
        $struktural->delete();
        return redirect()->route('strukturals.index')
            ->with('success', 'Data struktural berhasil dihapus!');
    }
}
