<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login(Request $request){
        $user = users::where('username',$request->username)->first();
        $credentials = ['username' => $request->username, 'password' => $request->password];
        
        if(Auth::attempt($credentials))
        {
            return view('Home');
        } else {
            return back()->with('fail', 'invalid username or password');
        }
    }
    
    public function logout(Request $request){
        // users::logout();
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function insert(Request $request) {

        DB::table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password

        ]);
        return back()->with('success', 'registration successfully');
    }

    
}
