<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class AdminEnrollmentController extends Controller
{
    
    public function index(Request $request)
    {   
        if($request->has('search')){
            $enrollment = Enrollment::with('user')
            ->where('id','LIKE','%' .$request->search.'%')->paginate(5);
            $enrollment->appends($request->all());
        }
        
        else{
            $enrollment = Enrollment::with('user')->paginate(5);
        }
        return view ('adminenrollment.index' ,[
            'title' => 'Enrollment Management'
        ],compact('enrollment'));
    }
    

    public function show($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('adminenrollment.show',[
            'title' => 'Detail Mahasiswa TA'
        ],compact('enrollment'));
    }

    public function edit($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('adminenrollment.manage',[
            'title' => 'Ubah Status Mahasiswa TA'
        ],compact('enrollment'));
    }

    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->status = $request->status;
        $enrollment->save();
        return redirect()->route('adminenrollment.index');
    }

    public function destroy($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->delete();
        return redirect()->route('adminenrollment.index');
    }

}
