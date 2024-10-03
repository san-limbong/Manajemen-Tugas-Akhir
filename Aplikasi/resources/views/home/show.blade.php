@extends('dashboard.layouts.main')

@section('container')
<!--Main-->
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Pengumuman</div>
    </div>
    <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
        <div>
            <a href="/home">
                <i class="fa fa-home text-blue-500"></i>
                <span class="text-blue-500 ml-1">Home</span>
            </a>
        </div>
        <span class="font-bold text-gray-900 ml-1">/</span>
        <span class="text-gray-900 ml-1">Lihat Pengumuman</span>
    </div>
    <div class="py-20 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">
                    <div class="p-3">
                        <h1 class="text-black text-center font-bold">{{ $home->judul }}</h1>
                    <div class="flex w-full mt-3 mb-3"> <span class="border border-dashed w-full border-black"></span> </div>
                    <div class="p-3 space-y-5">
                        <div class="flex flex-col"> <span class="text-black-200">{{ $home->deskripsi }}</span> </div>
                    </div>
                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/home">Kembali</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Main-->
@endsection