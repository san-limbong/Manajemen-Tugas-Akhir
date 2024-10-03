@extends('dashboard.layouts.main')

@section('container')
    
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Ubah Status</div>
    </div>

    <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
        <div>
            <a href="/admingroup">
                <i class="fa fa-users text-blue-500"></i>
                <span class="text-blue-500 ml-1">Group Management</span>
            </a>
        </div>
        <span class="font-bold text-gray-900 ml-1">/</span>
        <span class="text-gray-900 ml-1">Ubah Status</span>
    </div>

<div class="flex flex-col">

    <div class="py-5 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <div class="p-3">
                        <h1 class="text-black text-center font-bold">Informasi Kelompok TA</h1>
                    <div class="flex w-full mt-3 mb-3"> <span class="border border-dashed w-full border-black"></span> </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold"> Diajukan oleh:</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $group->user->nomorinduk }} - {{ $group->user->name }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Nama Kelompok TA</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $group->namakelompok }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Nama Anggota Kelompok</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $group->anggota1 }}</span> </div>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $group->anggota2 }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Deskripsi Anggota Kelompok</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $group->deskanggota }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Informasi Dosen Pembimbing</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $group->dosenpembimbing }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Deskripsi Dosen</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $group->deskdosen }}</span> </div>
                    </div>

                    <form action="{{ route('admingroup.update', $group->id) }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="mb-1"> 
                            <span class="text-sm">Status Pengajuan</span> 
                            <br>
                            <select name="status"
                            value="{{ $group->status }}"
                            class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required>
                                <option value="Disetujui">Disetujui</option>
                                <option value="Sedang diproses">Sedang diproses</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div>

                        <div class="mb-1"> 
                            <span class="text-sm">Keterangan</span> 
                            <input type="text"
                            name="keterangan"
                            value="{{ $group->keterangan }}"
                            class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                        </div>
                        
                        <div class="mt-3 text-right"> 
                            <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/admingroup">Kembali</a></button>

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