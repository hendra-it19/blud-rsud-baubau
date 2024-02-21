<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman  = 'Kategori';
        $data = Category::latest('id')->get();
        $no = 1;
        return view('adminpage.category.index', compact('data', 'no', 'judulHalaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = 'Kategori';
        return view('adminpage.category.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => ['required', 'unique:categories,nama_kategori,except,id']
        ]);

        Category::create([
            'nama_kategori' => ucwords($request->kategori),
        ]);
        return redirect()->route('categories.index')
            ->with('success', 'Data Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $judulHalaman = 'Kategori';
        return view('adminpage.category.update', compact('judulHalaman', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'kategori' => ['required', $request->kategori == $category->nama_kategori ? '' : 'unique:categories,nama_kategori,except,id']
        ]);
        $category->update([
            'nama_kategori' => ucwords($request->kategori),
        ]);
        return redirect()->route('categories.index')
            ->with('success', 'Data kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
            ->with('success', 'Data kategori berhasil dihapus!');
    }
}
