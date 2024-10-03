<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{

    public function index(Request $request)
    {   
        if($request->has('search')){
            $evaluation = Evaluation::where('namakelompok','LIKE','%' .$request->search.'%')->paginate(5);
            $evaluation->appends($request->all());
        }
        else{
            $evaluation = Evaluation::paginate(5);
        }
        return view ('evaluation.index' ,[
            'title' => 'Penilaian Mahasiswa TA'
        ],compact('evaluation'));
    }

    public function create()
    {   
        $this->authorize('admin');
        return view('evaluation.develop',[
            'title' => "Tambah Penilaian"
        ]);
    }

    public function store(Request $request)
    {
        $evaluation = new Evaluation();
        $evaluation->namakelompok = $request->namakelompok;
        //Seminar
        $evaluation->seminarnilai = $request->seminarnilai;
        $evaluation->seminarstatus = $request->seminarstatus;
        //TA
        $evaluation->tanilai = $request->tanilai;
        $evaluation->tastatus = $request->tastatus;
        $evaluation->save();
        return redirect()->route('evaluation.index');
    }

    public function show(Evaluation $evaluation)
    {
        //
    }

    public function edit($id)
    {   
        $this->authorize('admin');
        $evaluation = Evaluation::findOrFail($id);
        return view('evaluation.manage',[
            'title' => 'Ubah Penilaian'
        ],compact('evaluation'));
    }

    public function update(Request $request, $id)
    {
        $evaluation = Evaluation::findOrFail($id);
        $evaluation->namakelompok = $request->namakelompok;
        //Seminar
        $evaluation->seminarnilai = $request->seminarnilai;
        $evaluation->seminarstatus = $request->seminarstatus;
        //TA
        $evaluation->tanilai = $request->tanilai;
        $evaluation->tastatus = $request->tastatus;
        $evaluation->save();
        return redirect()->route('evaluation.index');
    }

    public function destroy($id)
    {   
        $this->authorize('admin');
        $evaluation = Evaluation::findOrFail($id);
        $evaluation->delete();
        return redirect()->route('evaluation.index');
    }
}
