<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{

    public function index(Request $request)
    {   
        if($request->has('search')){
            $lecture = Lecture::where('tanggal','LIKE','%' .$request->search.'%')->paginate(5);
            $lecture->appends($request->all());
        }
        else{
            $lecture = Lecture::paginate(5);
        }
        return view ('lecture.index' ,[
            'title' => 'Lecture'
        ],compact('lecture'));
    }

    public function create()
    {   
        $this->authorize('admin');

        return view('lecture.develop',[
            'title' => "Tambah Jadwal Bimbingan"
        ]);
    }

    public function store(Request $request)
    {
        $lecture = new Lecture();
        $lecture->namakelompok = $request->namakelompok;
        $lecture->dosenpembimbing = $request->dosenpembimbing;
        $lecture->tanggal = $request->tanggal;
        $lecture->waktu = $request->waktu;
        $lecture->save();
        return redirect()->route('lecture.index');
    }

    public function show($id)
    {
        $lecture = Lecture::findOrFail($id);
        return view('lecture.show',[
            'title' => 'Lihat Jadwal Bimbingan'
        ],compact('lecture'));
    }

    public function edit($id)
    {   
        $this->authorize('admin');

        $lecture = Lecture::findOrFail($id);
        return view('lecture.manage',[
            'title' => 'Ubah Jadwal Bimbingan'
        ],compact('lecture'));
    }

    public function update(Request $request, $id)
    {
        $lecture = Lecture::findOrFail($id);
        $lecture->namakelompok = $request->namakelompok;
        $lecture->dosenpembimbing = $request->dosenpembimbing;
        $lecture->tanggal = $request->tanggal;
        $lecture->waktu = $request->waktu;
        $lecture->save();
        return redirect()->route('lecture.index');
    }

    public function destroy($id)
    {   
        $this->authorize('admin');

        $lecture = Lecture::findOrFail($id);
        $lecture->delete();
        return redirect()->route('lecture.index');
    }
}
