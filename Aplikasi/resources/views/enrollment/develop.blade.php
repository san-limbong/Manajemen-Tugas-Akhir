@extends('dashboard.layouts.main')

@section('container')
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Tambah Data Diri</div>
    </div>
    <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
        <div>
            <a href="/enrollment">
                <i class="fa fa-user text-blue-500"></i>
                <span class="text-blue-500 ml-1">Enrollment</span>
            </a>
        </div>
        <span class="font-bold text-gray-900 ml-1">/</span>
        <span class="text-gray-900 ml-1">Tambah Data Diri</span>
    </div>

    <div class="py-20 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">
                    <form action="{{ route('enrollment.store') }}" method="POST">
                    @csrf

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

                    <div class="mb-1"> 
                        <span class="text-sm">Total SKS</span> 
                        <input type="number" min="0" max="160"
                        name="totalsks"
                        class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>
                    {{-- Diploma III 108-120 SKS
                    Diploma IV 144-160 SKS
                    Sarjana 144 -160 SKS dengan beban minimal 120 SKS --}}
                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/enrollment">Kembali</a></button>
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