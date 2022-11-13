<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function index(Request $request)
    {   
        if($request->has('search')){
            $home = Announcement::where('judul','LIKE','%' .$request->search.'%')->paginate(5);
            $home->appends($request->all());
        }
        else{
            $home = Announcement::paginate(5);
        }      
        return view ('home.index' ,[
            'title' => 'Dashboard'
        ],compact('home'));
    }

    public function create()
    {   
        
        $this->authorize('admin');
        return view('home.develop',[
            'title' => "Tambah Pengumuman",
        ]);
    }

    public function store(Request $request)
    {   
        
        $home = new Announcement();
        $home->judul = $request->judul;
        $home->deskripsi = $request->deskripsi;
        $home->save();
        return redirect()->route('home.index');
    }

    public function show($id)
    {   
        
        $home = Announcement::findOrFail($id);
        return view('home.show',[
            'title' => 'Lihat Pengumuman'
        ],compact('home'));
    }

    public function edit($id)
    {   
        $this->authorize('admin');
        $home = Announcement::findOrFail($id);
        return view('home.manage',[
            'title' => 'Ubah Pengumuman'
        ],compact('home'));
    }

    public function update(Request $request, $id)
    {
        $home = Announcement::findOrFail($id);
        $home->judul = $request->judul;
        $home->deskripsi = $request->deskripsi;
        $home->save();
        return redirect()->route('home.index');
    }

    public function destroy($id)
    {   
        $this->authorize('admin');
        $home = Announcement::findOrFail($id);
        $home->delete();
        return redirect()->route('home.index');
    }

    public function exportpdf()
    {   
        $home = Announcement::all();

        view()->share('home', $home);
        $pdf = PDF::loadview('home.announcement');
        return $pdf->download('announcement.pdf');

    }
}
