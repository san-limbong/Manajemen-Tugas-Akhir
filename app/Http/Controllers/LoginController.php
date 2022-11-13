<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('sesi.login');
    }

    public function authenticate(Request $request)
    {
        // $request->validate([
        //     'username' => 'required|min:6|max:10',
        //     'password' => 'required'
        // ]);

        // dd('berhasil login!');
        $credentials = $request->validate([
            'username' => 'required|min:6|max:20',
            'password' => 'required|min:6|max:255'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login failed!');
        
    }
    public function logout()
    {
    Auth::logout();

        request()->session()->invalidate();
        //supaya gk bisa dipake

        request()->session()->regenerateToken();
        // supaya gk bisa dibajak
        return redirect('/');
        //balikin kehalaman mana
    }
}
