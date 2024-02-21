<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PostinganBerita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman  = 'Berita';
        $data = PostinganBerita::latest('id')->get();
        $no = 1;
        return view('adminpage.berita.index', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = 'Berita';
        $kategori = Category::latest('id')->get();
        return view('adminpage.berita.create', compact('judulHalaman', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required'],
            'kategori' => ['required', 'exists:categories,id'],
            'isi_berita' => ['required'],
            'foto' => ['required', 'image'],
        ]);

        $foto = $request->file('foto');

        $path = 'upload/berita/';
        $name = date('DMY His') . '-berita.' . $foto->getClientOriginalExtension();
        $foto->move($path, $name);


        $excerpt = strip_tags($request->isi_berita);
        $excerpt = substr($excerpt, 0, 50);

        PostinganBerita::create([
            'judul' => ucwords($request->judul),
            'user_id' => auth()->user()->id,
            'category_id' => $request->kategori,
            'konten' => $request->isi_berita,
            'excerpt' => $excerpt,
            'foto' => $path . $name,
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Data berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PostinganBerita $postinganBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $judulHalaman = 'Berita';
        $kategori = Category::latest('id')->get();
        $postinganBerita = PostinganBerita::find($id);
        return view('adminpage.berita.update', compact('judulHalaman', 'postinganBerita', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $postinganBerita = PostinganBerita::find($id);

        $request->validate([
            'judul' => ['required'],
            'kategori' => ['required', 'exists:categories,id'],
            'isi_berita' => ['required'],
            'foto' => ['nullable', 'image'],
        ]);

        $fotoBaru = null;

        if (!empty($request->foto)) {
            $foto = $request->file('foto');
            $path = 'upload/berita/';
            $name = date('DMY His') . '-berita.' . $foto->getClientOriginalExtension();
            $foto->move($path, $name);
            $fotoBaru = $path . $name;
        } else {
            $fotoBaru = $postinganBerita->foto;
        }

        $excerpt = strip_tags($request->isi_berita);
        $excerpt = substr($excerpt, 0, 50);

        $postinganBerita->update([
            'judul' => ucwords($request->judul),
            'user_id' => auth()->user()->id,
            'category_id' => $request->kategori,
            'konten' => $request->isi_berita,
            'excerpt' => $excerpt,
            'foto' => $fotoBaru,
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Data berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $postinganBerita = PostinganBerita::find($id);
        $postinganBerita->delete();
        return redirect()->route('berita.index')
            ->with('success', 'Data berita berhasil dihapus!');
    }
}
