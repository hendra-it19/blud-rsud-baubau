<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\PostinganBerita;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SideKategori extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $kategori = Category::all();
        $jumlahBerita = PostinganBerita::count();
        return view('components.side-kategori', compact('kategori', 'jumlahBerita'));
    }
}
