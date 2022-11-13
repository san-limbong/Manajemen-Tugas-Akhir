@extends('dashboard.layouts.main')

@section('container')
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Ubah Penilaian</div>
    </div>    
        <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
            <div>
                <a href="/evaluation">
                    <i class="fas fa-tasks text-blue-500"></i>
                    <span class="text-blue-500 ml-1">Evaluation</span>
                </a>
            </div>
            <span class="font-bold text-gray-900 ml-1">/</span>
            <span class="text-gray-900 ml-1">Ubah Penilaian</span>
        </div>

    <div class="py-20 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">
                    <form action="{{ route('evaluation.update', $evaluation->id) }}" method="POST">
                    @csrf
                    @method('put')
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
                    {{-- Seminar --}}
                    <div class="mb-1"> 
                        <span class="text-sm">Nilai Seminar</span> 
                        <input type="text"
                        name="seminarnilai"
                        value="{{ $evaluation->seminarnilai }}"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Status Seminar</span> 
                        <input type="text"
                        name="seminarstatus"
                        value="{{ $evaluation->seminarstatus }}"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"> 
                    </div>

                    {{-- TA --}}
                    <div class="mb-1"> 
                        <span class="text-sm">Nilai Tugas Akhir</span> 
                        <input type="text"
                        name="tanilai"
                        value="{{ $evaluation->tanilai }}"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Status Tugas Akhir</span> 
                        <input type="text"
                        name="tastatus"
                        value="{{ $evaluation->tastatus }}"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"> 
                    </div>

                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/evaluation">Kembali</a></button>
                        <button class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700" type="submit">Ubah
                        </button> 
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection