<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{

    public function index(Request $request)
    {   
        if($request->has('search')){
            $seminar = Seminar::where('tanggal','LIKE','%' .$request->search.'%')->paginate(5);
            $seminar->appends($request->all());
        }
        else{
            $seminar = Seminar::paginate(5);
        }
        return view ('seminar.index' ,[
            'title' => 'Seminar'
        ],compact('seminar'));
    }

    public function create()
    {   
        $this->authorize('admin');
        return view('seminar.develop',[
            'title' => "Tambah Jadwal Seminar"
        ]);
    }

    public function store(Request $request)
    {
        $seminar = new Seminar();
        $seminar->namakelompok = $request->namakelompok;
        $seminar->dosenpembimbing = $request->dosenpembimbing;
        $seminar->dosenpenguji = $request->dosenpenguji;
        $seminar->tanggal = $request->tanggal;
        $seminar->waktu = $request->waktu;
        $seminar->save();
        return redirect()->route('seminar.index');
    }

    public function show($id)
    {
        $seminar = Seminar::findOrFail($id);
        return view('seminar.show',[
            'title' => 'Lihat Jadwal Seminar'
        ],compact('seminar'));
    }

    public function edit($id)
    {   
        $this->authorize('admin');
        $seminar = Seminar::findOrFail($id);
        return view('seminar.manage',[
            'title' => 'Ubah Jadwal Seminar'
        ],compact('seminar'));
    }

    public function update(Request $request, $id)
    {
        $seminar = Seminar::findOrFail($id);
        $seminar->namakelompok = $request->namakelompok;
        $seminar->dosenpembimbing = $request->dosenpembimbing;
        $seminar->dosenpenguji = $request->dosenpenguji;
        $seminar->tanggal = $request->tanggal;
        $seminar->waktu = $request->waktu;
        $seminar->save();
        return redirect()->route('seminar.index');
    }

    public function destroy($id)
    {   
        $this->authorize('admin');
        $seminar = Seminar::findOrFail($id);
        $seminar->delete();
        return redirect()->route('seminar.index');
    }
}
