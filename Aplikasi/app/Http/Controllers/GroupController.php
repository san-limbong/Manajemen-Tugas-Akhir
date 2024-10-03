<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index()
    {   

        return view('group.index', [
            'group' => Group::where('user_id', auth()->user()->id)->get(),
            'title' => 'Group Tugas Akhir'
        ]);
    }

    public function create()
    {
        return view('group.develop',[
            'title' => "Ajukan Group TA"
        ]);
    }

    public function store(Request $request)
    {
        $group = new Group();
        $group->namakelompok = $request->namakelompok;
        $group->anggota1 = $request->anggota1;
        $group->anggota2 = $request->anggota2;
        $group->deskanggota = $request->deskanggota;
        $group->dosenpembimbing = $request->dosenpembimbing;
        $group->deskdosen = $request->deskdosen;
        $group['user_id'] = auth()->user()->id;
        $group->save();

        return redirect()->route('group.index')->with('group', $group);
    }

    public function edit($id)
    {
        $group = Group::findOrFail($id);
        return view('group.manage',[
            'title' => 'Ubah Group TA'
        ],compact('group'));
    }

    public function update(Request $request, $id)
    {
        $group = Group::findOrFail($id);
        $group->namakelompok = $request->namakelompok;
        $group->anggota1 = $request->anggota1;
        $group->anggota2 = $request->anggota2;
        $group->deskanggota = $request->deskanggota;
        $group->dosenpembimbing = $request->dosenpembimbing;
        $group->deskdosen = $request->deskdosen;
        $group['user_id'] = auth()->user()->id;
        $group->save();
        return redirect()->route('group.index')->with('group', $group);
    }
}
