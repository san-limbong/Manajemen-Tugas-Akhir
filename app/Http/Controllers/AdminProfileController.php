<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('search')){
            $profile = User::where('nomorinduk','LIKE','%' .$request->search.'%')->paginate(5);
            $profile->appends($request->all());
        }
        else{
            $profile = User::paginate(5);
        }
        return view ('adminprofile.index' ,[
            'title' => 'Profile Management'
        ],compact('profile'));
    }

    public function show($id)
    {
        $profile = User::findOrFail($id);
        return view('adminprofile.show',[
            'title' => 'Lihat Profile'
        ],compact('profile'));
    }


    public function edit($id)
    {
        $profile = User::findOrFail($id);
        return view('adminprofile.manage',[
            'title' => 'Ubah Lisensi'
        ],compact('profile'));
    }


    public function update(Request $request, $id)
    {
        $profile = User::findOrFail($id);
        $profile->is_admin = $request->is_admin;
        $profile->save();
        // return redirect()->route('adminprofile.index');
        return redirect('/login')->with('info', 'Update data success! Please Login Again');
    }

    public function destroy($id)
    {
        $this->authorize('admin');
        $profile = User::findOrFail($id);
        $profile->delete();
        // return redirect()->route('adminprofile.index');
        return redirect('/login')->with('info', 'Update data success! Please Login Again');
    }
}
