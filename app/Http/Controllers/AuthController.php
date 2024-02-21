<?php

namespace App\Http\Controllers;

use App\Models\PostinganBerita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        $judulHalaman  = 'Login';
        return view('auth.login', compact('judulHalaman'));
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('username', $request->username)->first();

        if (!empty($user) && Hash::check($request->password, $user->password)) {
            Auth::login($user, $request->ingat_saya);
            return redirect()->intended('/admin');
        }
        return redirect()->back()
            ->with('login-errors', 'Username atau password yang anda masukkan salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function dashboard(): View
    {
        $judulHalaman = 'Dashboard';
        // $data = PostinganBerita::
        return view('adminpage.dashboard', compact('judulHalaman'));
    }

    public function profile(): View
    {
        $judulHalaman = 'Profile';
        return view('adminpage.profile', compact('judulHalaman'));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'nama_lengkap' => ['required'],
            'username' => ['required', auth()->user()->username == $request->username ? 'required' : 'unique:users,username,except,id'],
            'password' => ['nullable'],
            'konfirmasi_password' => ['same:password'],
        ]);
        $user = User::find(auth()->user()->id);
        if (isset($request->password)) {
            $user->update([
                'nama' => $request->nama_lengkap,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
        } else {
            $user->update([
                'nama' => $request->nama_lengkap,
                'username' => $request->username,
            ]);
        }

        return redirect()->back()
            ->with('success', 'Data akun berhasil diperbarui!');
    }
}
