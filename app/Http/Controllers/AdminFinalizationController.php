<?php

namespace App\Http\Controllers;

use App\Models\Finalization;
use Illuminate\Http\Request;

class AdminFinalizationController extends Controller
{

    public function index(Request $request)
    {   
        if($request->has('search')){
            $finalization = Finalization::with('group')
            ->where('status','LIKE','%' .$request->search.'%')->paginate(5);
            $finalization->appends($request->all());
        }
        else{
            $finalization = Finalization::with('group')->paginate(5);
        }
        return view ('adminfinalization.index' ,[
            'title' => 'Finalization Management'
        ],compact('finalization'));
    }

    public function show($id)
    {
        $finalization = Finalization::findOrFail($id);
        return view('adminfinalization.show',[
            'title' => 'Detail Artefak'
        ],compact('finalization'));
    }

    public function edit($id)
    {
        $finalization = Finalization::findOrFail($id);
        return view('adminfinalization.manage',[
            'title' => 'Ubah Status'
        ],compact('finalization'));
    }

    public function update(Request $request, $id)
    {
        $finalization = Finalization::findOrFail($id);
        $finalization->status = $request->status;
        $finalization->keterangan = $request->keterangan;
        $finalization->save();
        return redirect()->route('adminfinalization.index');
    }

    public function destroy($id)
    {
        $finalization = Finalization::findOrFail($id);
        $finalization->delete();
        return redirect()->route('adminfinalization.index');
    }
}
