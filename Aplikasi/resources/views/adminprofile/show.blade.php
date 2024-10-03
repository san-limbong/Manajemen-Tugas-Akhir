@extends('dashboard.layouts.main')

@section('container')
    
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Lihat Profile</div>
    </div>    
        <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
            <div>
                <a href="/adminprofile">
                    <i class="fa fa-cogs text-blue-500"></i>
                    <span class="text-blue-500 ml-1">Profile Management</span>
                </a>
            </div>
            <span class="font-bold text-gray-900 ml-1">/</span>
            <span class="text-gray-900 ml-1">Lihat Profile</span>
        </div>

<div class="flex flex-col">
    <div class="py-10 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <div class="p-3">
                        <h1 class="text-black text-center font-bold">Informasi Akun</h1>
                    <div class="flex w-full mt-3 mb-3"> <span class="border border-dashed w-full border-black"></span> </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">NIM/NIDN/NIP</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $profile->nomorinduk }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Nama Lengkap</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $profile->name }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Username</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $profile->username }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Email</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $profile->email }}</span> </div>
                    </div>

                    
                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Status Akun</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $profile->is_admin }}</span> </div>
                    </div>
                    
                    <div class="p-3 mb-1"> 
                        <span class="text-sm text-gray-600">
                            Petunjuk
                            <br>
                            1 = Admin
                            <br>
                            0 = Bukan Admin
                        </span>
                    </div>

                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/adminprofile">Kembali</a></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection