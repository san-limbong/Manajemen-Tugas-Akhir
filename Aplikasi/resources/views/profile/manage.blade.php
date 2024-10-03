@extends('dashboard.layouts.main')

@section('container')
<!--Main-->
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Update Profil</div>
    </div>
   
    <div class="py-5 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    

                    <div class="mb-1">
                        <span class="text-sm">Upload Foto Profil</span>
                        <input type="hidden" name="oldImage" value="{{ $profile->image }}">
                            <div class="mb-3 w-96">
                            <input 
                            id="image"
                            name="image"
                            type="file"
                            onchange="previewImage()"
                            class="form-control h-12 pt-2 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600
                            "required>
                            </div>
                    </div>
                    <!-- Foto Profil
                    <div class="mb-1">
                        <span>Upload Foto Profil</span>
                        <input type="hidden" name="oldImage" value="{{ $profile->image }}">
                        <div class="relative border-dotted h-20 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">

                            <div class="absolute">
                                <div class="flex flex-col items-center"> 
                                    <i class="fa fa-folder-open fa-2x text-blue-700"></i>
                                    <span class="block text-gray-400 font-normal">Attach you files here</span>
                                </div>
                            </div> 
                            {{-- Sini dia --}}
                                
                                <input type="file" 
                                class="h-full w-full opacity-0"
                                name="image"
                                value="{{ $profile->image }}"
                                id="image"
                                onchange="previewImage()"
                                required>
                                    
                        </div>
                    </div> -->
                    @error('image')
                        <div class="invalid-feedback py-3" style="color: red"> Format file tidak sesuai </div>
                    @enderror

                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                        <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">

                            @if($profile->image)
                            <img src="{{ asset('storage/'. $profile->image) }}" class="img-preview">
                            @else
                            <img class="img-preview">
                            @endif
                        </div>
                    </div>

                    <!-- data profil -->
                    <div class="mb-1"> 
                        <span class="text-sm">Nama Mahasiswa</span> 

                        <input type="text"
                        name="name"
                        value="{{ $profile->name }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Nomor Induk</span> 

                        <input type="text"
                        name="nomorinduk"
                        value="{{ $profile->nomorinduk }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Tanggal Lahir</span> 

                        <input type="text"
                        name="tanggallahir"
                        value="{{ $profile->tanggallahir }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Tempat Lahir</span> 

                        <input type="text"
                        name="tempatlahir"
                        value="{{ $profile->tempatlahir }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Prodi</span> 

                        <input type="text"
                        name="prodi"
                        value="{{ $profile->prodi }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Email</span> 

                        <input type="text"
                        name="email"
                        value="{{ $profile->email }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Nomor Telepon</span> 

                        <input type="text"
                        name="notelp"
                        value="{{ $profile->email }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Jenis Kelamin</span> 

                        <input type="text"
                        name="jeniskelamin"
                        value="{{ $profile->jeniskelamin }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Alamat Rumah</span> 

                        <input type="text"
                        name="alamat"
                        value="{{ $profile->alamat }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Agama</span> 

                        <input type="text"
                        name="agama"
                        value="{{ $profile->alamat }}"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    
                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/profile">Kembali</a></button>
                
                        <button class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700" type="submit">Tambah
                        </button> 
                    </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<!--/Main-->
<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>


@endsection