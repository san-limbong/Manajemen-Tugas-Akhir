@extends('dashboard.layouts.main')

@section('container')

<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Ubah Status Mahasiswa TA</div>
    </div>

    <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
        <div>
            <a href="/adminenrollment">
                <i class="fa fa-user text-blue-500"></i>
                <span class="text-blue-500 ml-1">Enrollment Management</span>
            </a>
        </div>
        <span class="font-bold text-gray-900 ml-1">/</span>
        <span class="text-gray-900 ml-1">Ubah Status Mahasiswa TA</span>
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
                        <span class="text-black text-lg font-bold">Nama Lengkap</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $enrollment->user->name }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">NIM</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $enrollment->user->nomorinduk}}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Total SKS</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $enrollment->totalsks }}</span> </div>
                    </div>

                    <form action="{{ route('adminenrollment.update', $enrollment->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-1 py-5"> 
                            <span class="text-sm">Status Pengajuan</span> 
                            <input type="text"
                            name="status"
                            value="{{ $enrollment->status }}"
                            class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                        </div>

                        <div class="mt-3 text-right"> 
                            <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/adminenrollment">Kembali</a></button>
                            <button class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700" type="submit">Kirim Tanggapan
                            </button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection