<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index', [
            'profile' => User::where('id', auth()->user()->id)->get(),
            'title' => 'Profil Mahasiswa'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.develop',[
            'title' => "Lengkapi Profil"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $profile=new User();
        
        $imagename = '';
        if($request->file('image')){
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            
            $request->image->move('assets',$image);
        }
        $profile->name = $request->name;
        $profile->tanggallahir = $request->tanggallahir;
        $profile->tempatlahir = $request->tempatlahir;
        $profile->prodi = $request->prodi;
        $profile->email = $request->email;
        $profile->notelp = $request->notelp;
        $profile->jeniskelamin = $request->jeniskelamin;
        $profile->alamat = $request->alamat;
        $profile->agama = $request->agama;
        $profile->image=$imagename;
        $profile['id'] = auth()->user()->id;
        $profile->save();
        return redirect()->route('profile.index')->with('profile', $profile);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::findOrFail($id);
        return view('profile.manage',[
            'title' => 'Ubah Profil'
        ],compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $profile = User::findOrFail($id);

        $imagename = '';
        if($request->file('image')){
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            
            // $request->image->move('assets',$image);
            $name = $request->file('image')->getClientOriginalName();
 
            $path = $request->file('image')->store('public/assets');
            $imagename = $path;
        }
        $profile->name = $request->name;
        $profile->tanggallahir = $request->tanggallahir;
        $profile->tempatlahir = $request->tempatlahir;
        $profile->prodi = $request->prodi;
        $profile->email = $request->email;
        $profile->notelp = $request->notelp;
        $profile->jeniskelamin = $request->jeniskelamin;
        $profile->alamat = $request->alamat;
        $profile->agama = $request->agama;
        $profile->image=$imagename;
        $profile['id'] = auth()->user()->id;
        $profile->save();
        return redirect()->route('profile.index')->with('profile', $profile);
    }


}
