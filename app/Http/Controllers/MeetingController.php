<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\Group;
use Illuminate\Http\Request;

class MeetingController extends Controller
{

    public function index()
    {
        return view('meeting.index', [
            'meeting' => Meeting::where('user_id', auth()->user()->id)->get(),
            'title' => 'Meeting'
        ]);
    }

    
    public function create()
    {
        return view('meeting.develop',[
            'title' => "Tambah Data Meeting",
            'group' => Group::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    
    public function store(Request $request)
    {
        $meeting = new Meeting();
        $meeting->group_id = $request->group_id;
        $meeting->jeniskegiatan = $request->jeniskegiatan;
        $meeting->linkmeet = $request->linkmeet;
        $meeting->tanggal = $request->tanggal;
        $meeting->waktu = $request->waktu;
        $meeting->status = $request->status;
        $meeting['user_id'] = auth()->user()->id;
        $meeting->save();
        return redirect()->route('meeting.index')->with('meeting', $meeting);
    }

    public function edit($id)
    {
        $meeting = Meeting::findOrFail($id);
        return view('meeting.manage',[
            'title' => 'Ubah Data Meeting',
            'group' => Group::where('user_id', auth()->user()->id)->get(),
        ],compact('meeting'));
    }

    public function update(Request $request, $id)
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->group_id = $request->group_id;
        $meeting->jeniskegiatan = $request->jeniskegiatan;
        $meeting->linkmeet = $request->linkmeet;
        $meeting->tanggal = $request->tanggal;
        $meeting->waktu = $request->waktu;
        $meeting->status = $request->status;
        $meeting['user_id'] = auth()->user()->id;
        $meeting->save();
        return redirect()->route('meeting.index')->with('meeting', $meeting);
    }

}
