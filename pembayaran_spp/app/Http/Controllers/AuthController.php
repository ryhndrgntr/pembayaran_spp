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

    // public function landing() {
    //     return view('auth.landing');
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
            if(Auth::user()->role == "admin")
            {
                $request->session()->regenerate();
                return redirect()->intended('/dashadmin');
            }
            else if(Auth::user()->role == "petugas")
            {
                $request->session()->regenerate();
                return redirect()->intended('/dashpetugas');
            }else if(Auth::user()->role == "siswa"){
                $request->session()->regenerate();
                return redirect()->intended('/dashsiswa');
            }
        }else{
            {
                return redirect()->route('login')->with('error','Incorrect email or password!.');
            }
        }
        
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    
}
