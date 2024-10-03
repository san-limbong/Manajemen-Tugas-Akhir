<?php

namespace App\Http\Controllers;

use App\Models\Finalization;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FinalizationController extends Controller
{

    public function index()
    {
        return view('finalization.index', [
            'finalization' => Finalization::where('user_id', auth()->user()->id)->get(),
            'title' => 'Informasi Artefak'
        ]);
    }

    public function create()
    {
        return view('finalization.develop',[
            'title' => "Tambah Artefak",
            'group' => Group::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function store(Request $request)
    {
        // ddd($request);

        $request->validate([
            
            'file' => 'required|file|max:2048'
        ]);

        $finalization=new Finalization();
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        
        $request->file->move('assets',$filename);
        $finalization->group_id = $request->group_id;
        $finalization->file=$filename;
        $finalization->judul=$request->judul;
        $finalization->deskripsi=$request->deskripsi;
        $finalization['user_id'] = auth()->user()->id;
        $finalization->save();
        return redirect()->route('finalization.index')->with('finalization', $finalization);

    }


    public function edit($id)
    {
        $finalization = Finalization::findOrFail($id);
        return view('finalization.manage',[
            'title' => 'Ubah Artefak',
            'group' => Group::where('user_id', auth()->user()->id)->get(),
        ],compact('finalization'));
    }


    public function update(Request $request, $id)
    {   
        $request->validate([
            
            'file' => 'required|file|max:2048'
        ]);

        $finalization = Finalization::findOrFail($id);

        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        
        $request->file->move('assets',$filename);
        $finalization->group_id = $request->group_id;
        $finalization->file=$filename;
        $finalization->judul = $request->judul;
        $finalization->deskripsi = $request->deskripsi;
        $finalization['user_id'] = auth()->user()->id;
        $finalization->save();
        return redirect()->route('finalization.index')->with('finalization', $finalization);
    }

    public function download(Request $request,$file)
    {
        return response()->download(public_path('assets/'.$file));
    }

    public function view($id)
    {
        $data=Finalization::find($id);
        return view('finalization.viewartefak',compact('data'));
    }
}
