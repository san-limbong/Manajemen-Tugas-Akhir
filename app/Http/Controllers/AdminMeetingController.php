<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

class AdminMeetingController extends Controller
{
    public function index(Request $request)
    {   
        if($request->has('search')){
            $meeting = Meeting::with('group')
            ->where('jeniskegiatan','LIKE','%' .$request->search.'%')->paginate(5);
            $meeting->appends($request->all());
        }
        else{
            $meeting = Meeting::with('group')
            ->paginate(5);
        }
        return view ('adminmeeting.index' ,[
            'title' => 'Meeting Management'
        ],compact('meeting'));
    }

    public function show($id)
    {
        $meeting = Meeting::findOrFail($id);
        return view('adminmeeting.show',[
            'title' => 'Detail Kelompok TA'
        ],compact('meeting'));
    }

    public function edit($id)
    {
        $meeting = Meeting::findOrFail($id);
        return view('adminmeeting.manage',[
            'title' => 'Ubah Status'
        ],compact('meeting'));
    }

    public function update(Request $request, $id)
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->status = $request->status;
        $meeting->keterangan = $request->keterangan;
        $meeting->save();
        return redirect()->route('adminmeeting.index');
    }

    public function destroy($id)
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->delete();
        return redirect()->route('adminenrollment.index');
    }
}
