@extends('dashboard.layouts.main')

@section('container')

<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Pengumuman</div>
    </div>
    <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
        <div>
            <a href="/home">
                <i class="fa fa-home text-blue-500"></i>
                <span class="text-blue-500 ml-1">Home</span>
            </a>
        </div>
        <span class="font-bold text-gray-900 ml-1">/</span>
        <span class="text-gray-900 ml-1">Dashboard</span>
    </div>
<!--Main-->
@can('admin')
<div class="flex flex-col ">
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 pb-4">
        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/8 mx-2">
            <div class="p-2 flex flex-col">
                <a href="{{ route('home.create') }}" class="no-underline text-white text-1xl">
                    Tambah Pengumuman
                </a>
            </div>
        </div>
    </div>
@endcan
<div class="bg-gray-200 mx-4 ">
    <div class="flex justify-center md:flex-row lg:flex-row mx-2 py-2 ">
        <div class="p-2">
            <form action="/home" method="GET">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i> </div>
                <input type="search"
                name="search"
                class="h-14 w-1/2 pl-10 pr-5 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Cari Judul Pengumuman">
                <button class="mx-3 h-10 w-20 text-white rounded-lg bg-green-500 hover:bg-green-600">Search</button>
            </form>
        </div>
    </div>
</div>

    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
            @can('admin')
            <button class="my-1 mx-2 p-1 h-8 w-25 text-white rounded-lg bg-blue-600 hover:bg-blue-700 float-right text-xs">
                <a href="/announcementpdf">
                    <i class="fas fa-download mx-1"></i>
                    Export PDF
                </a>
            </button>
            @endcan
            <div class="px-6 py-2 border-b border-light-grey">
                <div class="font-bold text-xl">Daftar Pengumuman</div>
            </div>
            <div class="table-responsive">
                <table class="table text-grey-darkest">
                    <thead class="bg-grey-dark text-white text-normal">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no =1; @endphp
                        @foreach ($home as $data)
                        <tr>
                            <td scope ="row">{{ $no++ }}</td>
                            <td>{{ $data->judul }}</td>
                            <td>
                                <form action="{{ route('home.destroy',$data->id) }}" method="POST">
                                @csrf @method('delete')

                                <a href="{{ route('home.show',$data->id) }}" class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 mr-2 rounded-full">Lihat</a>
                                @can('admin')
                                <a href="{{ route('home.edit',$data->id) }}" class="bg-yellow-500 hover:bg-yellow-800 text-white font-light py-1 px-2 rounded-full">Ubah</a>

                                <button class="bg-red-500 hover:bg-red-800 text-white font-light py-1 px-2 rounded-full" onclick="return confirm('Are you sure?')" type="submit">Hapus</button>
                                @endcan
                                </form>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <div class="pt-2 ml-3">
                    {{ $home->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Main-->
@endsection