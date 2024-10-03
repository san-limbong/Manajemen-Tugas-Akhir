@extends('dashboard.layouts.main')

@section('container')

<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Profil</div>
    </div>


@if(count($profile))
    @foreach ($profile as $data)
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 pb-4">
        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/8 mx-2">
            <div class="p-2 flex flex-col">
                <a href="{{ route('profile.edit',$data->id) }}" class="no-underline text-white text-1xl">
                    Ubah Profil Anda
                </a>
            </div>
        </div>
    </div>
    @endforeach
@else
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 pb-4">
        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/8 mx-2">
            <div class="p-2 flex flex-col">
                <a href="{{ route('profile.create') }}" class="no-underline text-white text-1xl">
                    Lengkapi profil Anda
                </a>
            </div>
        </div>
    </div>
@endif
    
<!--Main-->

@foreach ($profile as $data)

<div class="flex flex-col">

    <!-- Card Sextion Starts Here -->
    <div class="py-10 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <div class="p-3">
                        <h1 class="text-black text-center font-bold">Profil Anda</h1>
                    <div class="flex w-full mt-3 mb-3"> <span class="border border-dashed w-full border-black"></span> </div>

                    <div class="flex flex-col text-center"> 
                            <div>
                                <img src="{{ asset('storage/' . $data->image) }}">
                            </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Nama Lengkap</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->name }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Nomor Induk</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->nomorinduk }}</span> </div>
                    </div>
                    
                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Tanggal Lahir</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->tanggallahir }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Tempat Lahir</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->tempatlahir }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Prodi</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->prodi }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Email</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->email }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Nomor Telepon</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->notelp }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Jenis Kelamin</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->jeniskelamin }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Alamat Rumah</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->alamat }}</span> </div>
                    </div>

                    <div class="p-3 space-y-5">
                        <span class="text-black text-lg font-bold">Agama</span>
                        <div class="flex flex-col"> <span class="text-black-200">{{ $data->agama }}</span> </div>
                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Cards Section Ends Here -->


</div>
@endforeach
<!--/Main-->
@endsection