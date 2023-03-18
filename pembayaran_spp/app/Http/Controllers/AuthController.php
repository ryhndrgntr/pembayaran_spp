<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function index()
    // {
    //     $role = Auth::user()->role;

    //     switch ($role) {
    //         case 'admin':
    //             return redirect()->intended('/dashadmin');
    //             break;
    //         case 'petugas':
    //             return redirect()->intended('/dashpetugas');
    //             break;
    //         case 'siswa':
    //             return redirect()->intended('/dashsiswa');
    //             break;
    //         default:
    //             return redirect('/'); // redirect ke halaman default jika role tidak dikenali atau pengguna tidak memiliki role
    //     }
    // }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                $request->session()->regenerate();
                return redirect()->intended('/dashadmin');
            } elseif (Auth::user()->role == 'petugas') {
                $request->session()->regenerate();
                return redirect()->intended('/dashpetugas');
            } elseif (Auth::user()->role == 'siswa') {
                $request->session()->regenerate();
                return redirect()->intended('/dashsiswa');
            }
        } else {
            return redirect()
                ->route('login')
                ->with('error', 'Incorrect email or password!.');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
