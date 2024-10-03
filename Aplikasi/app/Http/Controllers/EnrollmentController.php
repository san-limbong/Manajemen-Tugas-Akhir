<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Enrollment;
use Illuminate\Http\Request;


class EnrollmentController extends Controller
{

    public function index()
    {
        return view('enrollment.index', [
            'enrollment' => Enrollment::where('user_id', auth()->user()->id)->get(),
            'title' => 'Registrasi Mahasiswa TA'
        ]);
    }

    public function create()
    {   
        return view('enrollment.develop',[
            'title' => "Tambah Data Diri"
        ]);

    }

    public function store(Request $request)
    {
        $enrollment = new Enrollment();
        $enrollment->totalsks = $request->totalsks;
        $enrollment['user_id'] = auth()->user()->id;
        $enrollment->save();
        return redirect()->route('enrollment.index')->with('enrollment', $enrollment);

    }

    public function edit($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('enrollment.manage',[
            'title' => 'Ubah Data Diri'
        ],compact('enrollment'));
    }

    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->totalsks = $request->totalsks;
        $enrollment['user_id'] = auth()->user()->id;
        $enrollment->save();
        return redirect()->route('enrollment.index')->with('enrollment', $enrollment);
    }

}
