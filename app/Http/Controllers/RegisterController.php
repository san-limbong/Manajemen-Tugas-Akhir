<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('sesi.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|min:6|max:20|unique:users',
            'nomorinduk' => 'required|min:6|max:10|unique:users',
            'email' => 'required|email|unique:users',
            'prodi'=> 'required',
            'jeniskelamin'=> 'required',
            'password'=> 'required|min:6|max:255'

        ]);

        // dd('registrasi berhasil');

        
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful! Please Login');
    }
}
