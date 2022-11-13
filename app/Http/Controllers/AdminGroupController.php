<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use PDF;

class AdminGroupController extends Controller
{
    
    public function index(Request $request)
    {   
        if($request->has('search')){
            $group = Group::with('user')
            ->where('namakelompok','LIKE','%' .$request->search.'%')->paginate(5);
            $group->appends($request->all());
        }
        else{
            $group = Group::with('user')->paginate(5);
        }
        return view ('admingroup.index' ,[
            'title' => 'Group Management'
        ],compact('group'));
    }

    public function show($id)
    {
        $group = Group::findOrFail($id);
        return view('admingroup.show',[
            'title' => 'Detail Group TA'
        ],compact('group'));
    }

    
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        return view('admingroup.manage',[
            'title' => 'Ubah Status'
        ],compact('group'));
    }

    
    public function update(Request $request, $id)
    {
        $group = Group::findOrFail($id);
        $group->status = $request->status;
        $group->keterangan = $request->keterangan;
        $group->save();
        return redirect()->route('admingroup.index');
    }

    
    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        return redirect()->route('admingroup.index');
    }

    public function exportpdf()
    {   
        $group = Group::all();

        view()->share('group', $group);
        $pdf = PDF::loadview('admingroup.group');
        return $pdf->download('group.pdf');

    }
}
