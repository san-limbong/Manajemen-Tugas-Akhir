@extends('dashboard.layouts.main')

@section('container')

<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Enrollment Management</div>
    </div>

    <div class="flex flex-row pt-2 text-xs pt-1 pb-3 pl-5">
        <div>
            <a href="/adminenrollment">
                <i class="fa fa-user text-blue-500"></i>
                <span class="text-blue-500 ml-1">Enrollment Management</span>
            </a>
        </div>
        <span class="font-bold text-gray-900 ml-1">/</span>
        <span class="text-gray-900 ml-1">Daftar Mahasiswa TA</span>
    </div>


<div class="bg-gray-200 mx-4 ">
    <div class="flex justify-center md:flex-row lg:flex-row mx-2 py-2 ">
        <div class="p-2">
            <form action="/adminenrollment" method="GET">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i> </div>                
                <input type="search"
                name="search"
                class="h-14 w-1/2 pl-10 pr-5 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Cari ID Enrollment">
                <button class="mx-3 h-10 w-20 text-white rounded-lg bg-green-500 hover:bg-green-600">Search</button>
            </form>
        </div>
    </div>
</div>

    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
            <div class="px-6 py-2 border-b border-light-grey">
                <div class="font-bold text-xl">Daftar Mahasiswa TA</div>
            </div>
            <div class="table-responsive">
                <table class="table text-grey-darkest">
                    <thead class="bg-grey-dark text-white text-normal">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Total Sks</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no =1; @endphp
                        @foreach ($enrollment as $data)
                        <tr>
                            <td scope ="row">{{ $data->id }}</td>
                            <td>{{ $data->user->nomorinduk }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td>{{ $data->totalsks }}</td>
                            <td>{{ $data->status }}</td>
                            <td>
                                <form action="{{ route('adminenrollment.destroy',$data->id) }}" method="POST">
                                @csrf @method('delete')
                                <a href=" {{ route('adminenrollment.show',$data->id) }}" class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 mr-2 rounded-full">Lihat</a>              
                                <a href="{{ route('adminenrollment.edit',$data->id) }}" class="bg-yellow-500 hover:bg-yellow-800 text-white font-light py-1 px-2 rounded-full">Ubah status</a>
                                <button class="bg-red-500 hover:bg-red-800 text-white font-light py-1 px-2 rounded-full" onclick="return confirm('Are you sure?')" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pt-2 ml-3">
                    {{ $enrollment->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection