<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostinganBerita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $judulHalaman = 'Manajemen Akun';
        $data = User::latest('id')->get();
        $no = 1;
        return view('adminpage.users.index', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = 'Manajemen Akun';
        return view('adminpage.users.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => ['required'],
            'username' => ['required', 'unique:users,username,except,id'],
            'role' => ['required', 'in:0,1'],
            'password' => ['required'],
            'konfirmasi_password' => ['same:password']
        ]);
        User::create([
            'nama' => $request->nama_lengkap,
            'username' => $request->username,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('users.index')
            ->with('success', 'Data akun berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $judulHalaman = 'Manajemen Akun';
        return view('adminpage.users.update', compact('judulHalaman', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama_lengkap' => ['required'],
            'username' => ['required', $user->username == $request->username ? '' :  'unique:users,username,except,id'],
            'role' => ['required', 'in:0,1'],
            'password' => ['nullable'],
            'konfirmasi_password' => ['same:password'],
        ]);
        if (isset($request->password)) {
            $user->update([
                'nama' => $request->nama_lengkap,
                'username' => $request->username,
                'is_superadmin' => $request->role,
                'password' => Hash::make($request->password),
            ]);
        } else {
            $user->update([
                'nama' => $request->nama_lengkap,
                'username' => $request->username,
                'is_superadmin' => $request->role,
            ]);
        }
        return redirect()->route('users.index')
            ->with('success', 'Data akun' . $request->nama . ' berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $post = PostinganBerita::where('user_id', $user->id)->first();
        if (empty($post)) {
            $user->delete();
            return redirect()->back()
                ->with('success', 'Data akun ' . $user->username . ' berhasil dihapus!');
        } else {
            return redirect()->back()
                ->with('errors', 'Gagal hapus, data akun masih terkait dengan postingan!');
        }
    }
}
