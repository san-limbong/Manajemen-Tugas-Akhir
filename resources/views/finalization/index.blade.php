@extends('dashboard.layouts.main')

@section('container')

<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Finalization</div>
    </div>    
        <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
            <div>
                <a href="/finalization">
                    <i class="fas fa-graduation-cap text-blue-500"></i>
                    <span class="text-blue-500 ml-1">Finalization</span>
                </a>
            </div>
            <span class="font-bold text-gray-900 ml-1">/</span>
            <span class="text-gray-900 ml-1">Informasi Artefak TA</span>
        </div>
    
        


@if(count($finalization))
    @foreach ($finalization as $data)
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 pb-2">
        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/8 mx-2">
            <div class="p-2 flex flex-col">
                <a href="{{ route('finalization.edit',$data->id) }}" class="no-underline text-white text-1xl">
                    Ubah data Anda
                </a>
            </div>
        </div>
    </div>
    @endforeach
@else
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 pb-2">
        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/8 mx-2">
            <div class="p-2 flex flex-col">
                <a href="{{ route('finalization.create') }}" class="no-underline text-white text-1xl">
                    Tambah data Anda
                </a>
            </div>
        </div>
    </div>
@endif

@foreach ($finalization as $data)
<div class="px-6 border-b border-light-grey">

    <button class="mx-2 p-2 h-8 w-25 text-white rounded-lg bg-green-600 hover:bg-green-700 float-right text-xs">
        <a href="{{url('/download',$data->file)}}">
            <i class="fas fa-download mx-1"></i>
            Download</a>
    </button>

    <button class="mx-2 p-2 h-8 w-25 text-white rounded-lg bg-blue-600 hover:bg-blue-700 float-right text-xs">
        <a href="{{url('/view',$data->id)}}">
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
                        <h1 class="text-black text-center font-bold">Informasi Artefak TA</h1>
                    <div class="flex w-full mt-3 mb-3"> <span class="border border-dashed w-full border-black"></span> </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Nama Kelompok</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->group->namakelompok }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Diajukan Oleh</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->user->nomorinduk }} - {{ $data->user->name }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Judul</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->judul }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Deskripsi</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->deskripsi }}</span> </div>
                    </div>
                    
                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Status Pengajuan</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->status }}</span> </div>
                    </div>
                    
                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Keterangan</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->keterangan }}</span> </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection