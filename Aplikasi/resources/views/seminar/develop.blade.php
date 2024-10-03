@extends('dashboard.layouts.main')

@section('container')
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Tambah Jadwal Seminar</div>
    </div>    
        <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
            <div>
                <a href="/seminar">
                    <i class="fas fa-rss text-blue-500"></i>
                    <span class="text-blue-500 ml-1">Seminar</span>
                </a>
            </div>
            <span class="font-bold text-gray-900 ml-1">/</span>
            <span class="text-gray-900 ml-1">Tambah Jadwal Seminar</span>
        </div>

    <div class="py-20 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <form action="{{ route('seminar.store') }}" method="POST">
                    @csrf
                    <div class="mb-1"> 
                        <span class="text-sm">Nama Kelompok</span> 
                        <br>
                        <select name="namakelompok"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required>
                        <option value="Kelompok 1">Kelompok 1</option>
                        <option value="Kelompok 2">Kelompok 2</option>
                        <option value="Kelompok 3">Kelompok 3</option>
                        <option value="Kelompok 4">Kelompok 4</option>
                    </select>
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Dosen Pembimbing</span> 
                        <input type="text"
                        name="dosenpembimbing"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Dosen Penguji</span> 
                        <input type="text"
                        name="dosenpenguji"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Tanggal</span> 
                        <input type="date"
                        name="tanggal"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Waktu</span> 
                        <input type="time"
                        name="waktu"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/seminar">Kembali</a></button>
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