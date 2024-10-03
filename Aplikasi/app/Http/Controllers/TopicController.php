<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Group;
use Illuminate\Http\Request;

class TopicController extends Controller
{

    public function index()
    {   
        return view('topic.index', [
            'topic' => Topic::where('user_id', auth()->user()->id)->get(),
            'title' => 'Pengajuan Topik TA'
        ]);
    }

    public function create()
    {   
        return view('topic.develop',[
            'group' => Group::where('user_id', auth()->user()->id)->get(),
            'title' => "Ajukan Topik TA"
        ]);
    }

    public function store(Request $request)
    {
        $topic = new Topic();
        $topic->group_id = $request->group_id;
        $topic->judul = $request->judul;
        $topic->deskripsi = $request->deskripsi;
        $topic['user_id'] = auth()->user()->id;
        $topic->save();
        return redirect()->route('topic.index')->with('topic', $topic);
    }

    public function edit($id)
    {
        $topic = Topic::findOrFail($id);
        return view('topic.manage',[
            'title' => 'Ubah Topik TA',
            'group' => Group::where('user_id', auth()->user()->id)->get(),
        ],compact('topic'));
    }

    public function update(Request $request, $id)
    {
        $topic = Topic::findOrFail($id);
        // $topic->namakelompok = $request->namakelompok;
        $topic->group_id = $request->group_id;
        $topic->judul = $request->judul;
        $topic->deskripsi = $request->deskripsi;
        $topic['user_id'] = auth()->user()->id;
        $topic->save();
        return redirect()->route('topic.index')->with('topic', $topic);
    }
    
}
