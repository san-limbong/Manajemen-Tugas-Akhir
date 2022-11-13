@extends('dashboard.layouts.main')

@section('container')

<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Pengajuan Topik TA</div>
    </div>
    <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
        <div>
            <a href="/topic">
                <i class="fa fa-file text-blue-500"></i>
                <span class="text-blue-500 ml-1">Topic</span>
            </a>
        </div>
        <span class="font-bold text-gray-900 ml-1">/</span>
        <span class="text-gray-900 ml-1">Pengajuan Topik TA</span>
    </div>

@if(count($topic))
    @foreach ($topic as $data)
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 pb-4">
        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/8 mx-2">
            <div class="p-2 flex flex-col">
                <a href="{{ route('topic.edit',$data->id) }}" class="no-underline text-white text-1xl">
                    Ubah Topik TA
                </a>
            </div>
        </div>
    </div>
    @endforeach
@else
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 pb-4">
        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/8 mx-2">
            <div class="p-2 flex flex-col">
                <a href="{{ route('topic.create') }}" class="no-underline text-white text-1xl">
                    Ajukan Topik TA
                </a>
            </div>
        </div>
    </div>
@endif

@foreach ($topic as $data)
<div class="flex flex-col">
    <div class="py-10 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <div class="p-3">
                        <h1 class="text-black text-center font-bold">Informasi Topik TA</h1>
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
                        <span class="text-black text-lg font-bold">Judul Topik</span>
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