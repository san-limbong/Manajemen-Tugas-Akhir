@extends('dashboard.layouts.main')

@section('container')
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Ubah Data Meeting</div>
    </div>

    <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
        <div>
            <a href="/meeting">
                <i class="fas fa-video text-blue-500"></i>
                <span class="text-blue-500 ml-1">Meeting</span>
            </a>
        </div>
        <span class="font-bold text-gray-900 ml-1">/</span>
        <span class="text-gray-900 ml-1">Ubah Data Meeting</span>
    </div>

    <div class="py-20 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">
                    <div class="mb-1"> 
                        <span class="text-sm">Nama Lengkap</span> 
                        <div class="h-12 pt-3 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600">
                            {{ auth()->user()->name }}
                        </div>
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">NIM</span> 
                        <div class="h-12 pt-3 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600">
                            {{ auth()->user()->nomorinduk }}
                        </div>
                    </div>

                    @foreach ($group as $data)

                    <div class="mb-1"> 
                        <span class="text-sm">Nama Kelompok</span> 
                        <div class="h-12 pt-3 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600">
                            {{ $data->namakelompok }}
                        </div>
                    </div>
                    
                    <form action="{{ route('meeting.update', $meeting->id) }}" method="POST">
                        @csrf
                        @method('put')
                        
                        <div class="mb-1" hidden> 
                            <span class="text-sm">ID Grup</span> 
                            <input type="number" min="0" max="20"
                            name="group_id"
                            value="{{ $data->id }}"
                            class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" readonly> 
                        </div>
                        @endforeach

                    <div class="mb-1"> 
                        <span class="text-sm">Jenis Kegiatan</span> 
                        <br>
                        <select name="jeniskegiatan"
                        value="{{ $meeting->jeniskegiatan }}"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required>
                            <option value="Bimbingan Tugas Akhir">Bimbingan Tugas Akhir</option>
                            <option value="Seminar Proposal">Seminar Proposal</option>
                            <option value="Seminar TA">Seminar TA</option>
                            <option value="Sidang/Pra Sidang">Sidang/Pra Sidang</option>
                        </select>
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Link Meeting</span> 
                        <input type="text"
                        name="linkmeet"
                        value="{{ $meeting->linkmeet }}"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Dosen Pembimbing</span> 
                        <input type="text"
                        name="dosenpembimbing"
                        value="{{ $meeting->dosenpembimbing }}"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>


                    <div class="mb-1"> 
                        <span class="text-sm">Tanggal</span> 
                        <input type="date"
                        name="tanggal"
                        value="{{ $meeting->tanggal }}"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Waktu</span> 
                        <input type="time"
                        name="waktu"
                        value="{{ $meeting->waktu }}"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>
                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/meeting">Kembali</a></button>
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