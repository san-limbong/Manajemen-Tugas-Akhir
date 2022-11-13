@extends('dashboard.layouts.main')

@section('container')
    
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Detail Artefak</div>
    </div>    
        <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
            <div>
                <a href="/adminfinalization">
                    <i class="fas fa-graduation-cap text-blue-500"></i>
                    <span class="text-blue-500 ml-1">Finalization Management</span>
                </a>
            </div>
            <span class="font-bold text-gray-900 ml-1">/</span>
            <span class="text-gray-900 ml-1">Detail Artefak</span>
        </div>

        <div class="px-6 border-b border-light-grey">

            <button class="mx-2 p-2 h-8 w-25 text-white rounded-lg bg-green-600 hover:bg-green-700 float-right text-xs">
                <a href="{{url('/download',$finalization->file)}}">
                    <i class="fas fa-download mx-1"></i>
                    Download</a>
            </button>
        
            <button class="mx-2 p-2 h-8 w-25 text-white rounded-lg bg-blue-600 hover:bg-blue-700 float-right text-xs">
                <a href="{{url('/view',$finalization->id)}}">
                    <i class="fas fa-eye"></i>
                    Lihat</a>
            </button>
        
            <div class="font-bold text-base">Artefak</div>
        </div>

<div class="flex flex-col">
    <div class="py-10 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <div class="p-3">
                        <h1 class="text-black text-center font-bold">Informasi Mahasiswa TA</h1>
                    <div class="flex w-full mt-3 mb-3"> <span class="border border-dashed w-full border-black"></span> </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold"> Diajukan oleh:</span>

                        <div class="flex flex-col"> <span class="text-black-200">{{ $finalization->user->nomorinduk }} - {{ $finalization->user->name }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Nama Kelompok TA</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $finalization->group->namakelompok }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Judul</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $finalization->judul }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Deskripsi</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $finalization->deskripsi }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Status</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $finalization->status }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Keterangan</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $finalization->keterangan }}</span> </div>
                    </div>

                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/adminfinalization">Kembali</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection