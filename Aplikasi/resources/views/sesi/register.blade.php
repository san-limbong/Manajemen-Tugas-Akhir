<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register Form</title>
	<link rel="stylesheet" href="css/sesi/loginregister.css">

</head>
<body>
  <div class="wrapper">
  <div class="left">
      <h3>Institut Teknologi Del</h3>   
    <img src="css/sesi/logo.png" alt="">
  </div>
  <div class="right">
    <div class="tabs">
      <h3 class="font">Register Form</h3>
    
    <div class="register">
      <form action="/register" method="POST">
        @csrf
        <div class="input_field">
          <input type="text" name="name" class="input" id="name" placeholder="Nama lengkap" autofocus required value="{{ old('name') }}">
          @error('name')
            <div class="invalid-feedback" style="color: red"> {{ $message }} </div>
          @enderror
        </div>

        <div class="input_field">
            <input type="text" name="username" class="input" id="username" placeholder="Username" required value="{{ old('username') }}">
            @error('username')
              <div class="invalid-feedback" style="color: red">  {{ $message }} </div>
            @enderror
          </div>

          <div class="input_field">
            <input type="text" name="nomorinduk" class="input" id="nomorinduk" placeholder="NIM/NIDN/NIP" required value="{{ old('nomorinduk') }}">
            @error('nomorinduk')
              <div class="invalid-feedback" style="color: red">  {{ $message }} </div>
            @enderror
          </div>

          <div class="input_field">
            <input type="text" name="email" class="input" id="email" placeholder="Email" required value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback" style="color: red">  {{ $message }} </div>
            @enderror
          </div>


          <div class="input_field" required>
            <span class="text-sm" style="color: gray">Jenis Kelamin</span>
            <br>  
            <br>  
              <input type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki"> &nbsp; Laki-laki
              &nbsp;
              <input type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan"> &nbsp; Perempuan
            @error('jeniskelamin')
              <div class="invalid-feedback" style="color: red">  {{ $message }} </div>
            @enderror
          </div>

          <div class="input_field">
            <span class="text-sm" style="color: gray">Program Studi</span> 
            <select name="prodi" id="prodi"
            class="input"
            required">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
              <option value="Teknik Bioproses">Teknik Bioproses</option>
              <option value="Manajemen Rekayasa">Manajemen Rekayasa</option>
            </select>
            @error('prodi')
              <div class="invalid-feedback" style="color: red">{{ $message }} </div>
            @enderror
          </div>

        <div class="input_field">
          <input type="password" name="password" class="input" id="password" placeholder="Password" required>
          @error('password')
            <div class="invalid-feedback" style="color: red"> {{ $message }}</div>
          @enderror
        </div>
        <button class="button button1" style="border: none; color:white; padding:10px 20px; text-align:center; text-decoration:none; cursor: pointer; background-color:#4CAF50 ">Register</button>
      </form>
      </div>
      
  </div>
  <br>
  <small>Already have account? <a href="/login">Click Here!</a></small>
</div>
</body>
</html>