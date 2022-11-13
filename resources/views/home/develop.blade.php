@extends('dashboard.layouts.main')

@section('container')

<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Tambah Pengumuman</div>
    </div>

    <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
        <div>
            <a href="/home">
                <i class="fa fa-home text-blue-500"></i>
                <span class="text-blue-500 ml-1">Home</span>
            </a>
        </div>
        <span class="font-bold text-gray-900 ml-1">/</span>
        <span class="text-gray-900 ml-1">Tambah Pengumuman</span>
    </div>

    <div class="py-20 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <form action="{{ route('home.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-1"> 
                        <span class="text-sm">Judul Pengumuman</span> 
                        <input type="text"
                        name="judul"
                        placeholder="Masukkan Judul Pengumuman"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Deskripsi</span> 
                        <textarea type="text"
                        name="deskripsi"
                        placeholder="Masukkan Deskripsi"
                        class="h-24 py-1 px-3 w-full border-2 border-blue-400 rounded focus:outline-none focus:border-blue-600 resize-none" required></textarea> 
                    </div>

                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/home">Kembali</a></button>
                        <button class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700" type="submit">Tambah
                        </button> 
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection