<?php

namespace App\View\Components;

use App\Models\PostinganBerita;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SideBerita extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $beritaTerbaru = PostinganBerita::with('category')->latest('id')->take(5)->get();
        return view('components.side-berita', compact('beritaTerbaru'));
    }
}
