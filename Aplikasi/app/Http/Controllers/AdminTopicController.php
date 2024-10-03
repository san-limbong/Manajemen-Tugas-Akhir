<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class AdminTopicController extends Controller
{
    public function index(Request $request)
    {   
        if($request->has('search')){
            $topic = Topic::with('group')
            ->where('judul','LIKE','%' .$request->search.'%')->paginate(5);
            $topic->appends($request->all());
        }
        else{
            $topic = Topic::with('group')->paginate(5);
        }
        return view ('admintopic.index' ,[
            'title' => 'Topic Management'
        ],compact('topic'));
    }

    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        return view('admintopic.show',[
            'title' => 'Detail Topic'
        ],compact('topic'));
    }

    public function edit($id)
    {
        $topic = Topic::findOrFail($id);
        return view('admintopic.manage',[
            'title' => 'Ubah Status'
        ],compact('topic'));
    }

    public function update(Request $request, $id)
    {
        $topic = Topic::findOrFail($id);
        $topic->status = $request->status;
        $topic->keterangan = $request->keterangan;
        $topic->save();
        return redirect()->route('admintopic.index');
    }

    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->delete();
        return redirect()->route('admintopic.index');
    }
}
