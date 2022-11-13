@extends('dashboard.layouts.main')

@section('container')
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Lihat Jadwal Seminar</div>
    </div>    
        <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
            <div>
                <a href="/seminar">
                    <i class="fas fa-rss text-blue-500"></i>
                    <span class="text-blue-500 ml-1">Seminar</span>
                </a>
            </div>
            <span class="font-bold text-gray-900 ml-1">/</span>
            <span class="text-gray-900 ml-1">Lihat Jadwal Seminar</span>
        </div>

    <div class="py-10 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <div class="p-3">
                        <h1 class="text-black text-center font-bold">Informasi Seminar</h1>
                    <div class="flex w-full mt-3 mb-3"> <span class="border border-dashed w-full border-black"></span> </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Nama Kelompok</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $seminar->namakelompok }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Dosen Pembimbing</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $seminar->dosenpembimbing }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Dosen Penguji</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $seminar->dosenpembimbing }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Tanggal</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $seminar->tanggal }}</span> </div>
                    </div>
                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Waktu</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $seminar->waktu }}</span> </div>
                    </div>

                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/seminar">Kembali</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection