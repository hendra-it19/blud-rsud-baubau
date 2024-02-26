<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PostinganBerita;
use Exception;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        try {
            $data = PostinganBerita::with('category', 'user')->latest('id')->simplePaginate(10);
            return response()->json([
                'status' => true,
                'data' => $data,
                'errors' => null,
                'message' => 'Daftar berita berhasil ditampilkan!'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'data' => null,
                'errors' => $e->getMessage(),
                'message' => 'Terdapat kesalahan pada Api/BeritaController.berita!'
            ], 500);
        }
    }

    public function detailBerita($slug)
    {
        try {
            $data = PostinganBerita::with('category', 'user')->where('slug', $slug)->first();
            return response()->json([
                'status' => true,
                'data' => $data,
                'errors' => null,
                'message' => 'Daftar berita berhasil ditampilkan!'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'data' => null,
                'errors' => $e->getMessage(),
                'message' => 'Terdapat kesalahan pada Api/BeritaController.berita!'
            ], 500);
        }
    }
}
