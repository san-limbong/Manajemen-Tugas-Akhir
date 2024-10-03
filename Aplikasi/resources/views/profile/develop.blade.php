@extends('dashboard.layouts.main')

@section('container')
<!--Main-->
<div class="flex flex-col">
    <div class="px-6 py-2 border-b border-light-grey mb-3">
        <div class="font-bold text-xl">Lengkapi Profil</div>
    </div>
   
    <div class="py-5 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <form action="{{ route('admprofileview.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="mb-1">
                        <span class="text-sm">Upload Foto Profil</span>
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
                    <!-- foto profil -->
                    <!-- <div class="mb-1">
                        <span>Upload Foto Profile</span>
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
                                id="image"
                                onchange="previewImage()"
                                required>
                                    
                        </div>
                    </div> -->
                    @error('image')
                        <div class="invalid-feedback py-3" style="color: red">  {{ $message }} </div>
                    @enderror

                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                        <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                            <img class="img-preview">
                        </div>
                    </div>

                    <!-- data profil -->
                    <div class="mb-1"> 
                        <span class="text-sm">Nama Mahasiswa</span> 

                        <input type="text"
                        name="name"
                        placeholder="Masukkan nama mahasiswa"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Nomor Induk</span> 

                        <input type="text"
                        name="nomorinduk"
                        placeholder="Masukkan nomor induk"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Tanggal Lahir</span> 

                        <input type="text"
                        name="tanggallahir"
                        placeholder="Masukkan tanggal lahir"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Tempat Lahir</span> 

                        <input type="text"
                        name="tempatlahir"
                        placeholder="Masukkan tempat lahir"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Prodi</span> 

                        <input type="text"
                        name="prodi"
                        placeholder="Masukkan program studi"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Email</span> 

                        <input type="text"
                        name="email"
                        placeholder="Masukkan alamat email"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Nomor Telepon</span> 

                        <input type="text"
                        name="notelp"
                        placeholder="Masukkan nomor telepon"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Jenis Kelamin</span> 

                        <input type="text"
                        name="jeniskelamin"
                        placeholder="Masukkan jenis kelamin"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Alamat Rumah</span> 

                        <input type="text"
                        name="alamat"
                        placeholder="Masukkan alamat tempat tinggal"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>

                    <div class="mb-1"> 
                        <span class="text-sm">Agama</span> 

                        <input type="text"
                        name="agama"
                        placeholder="Masukkan alamat tempat tinggal"
                        class="h-8 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600" required> 
                    </div>



                    <div class="mt-3 text-right"> 
                        <button class="ml-2 h-10 w-32 bg-green-600 rounded text-white hover:bg-green-700"><a href="/admprofileview">Kembali</a></button>
                
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