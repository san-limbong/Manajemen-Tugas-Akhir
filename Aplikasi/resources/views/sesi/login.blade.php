<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="css/sesi/loginregister.css">

</head>
<body>

  @if(session()->has('success'))
  <div class="statusnyasukses">
    {{ session('success') }}
  </div>
  @endif

  @if(session()->has('info'))
  <div class="proses">
    {{ session('info') }}
  </div>
  @endif

  @if(session()->has('loginError'))
  <div class="statusnyaerror">
    {{ session('loginError') }}
  </div>
  @endif

  <div class="wrapper">
  <div class="left">
      <h3>Institut Teknologi Del</h3>   
    <img src="css/sesi/logo.png" alt="">
  </div>
  <div class="right">
    <div class="tabs">
      <h3 class="font">Login Form</h3>
    </div>
    
    <div class="login">
      <form action="/login" method="POST">
        @csrf
        <div class="input_field">
          <input type="text" name="username" class="input" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
          @error('username')
            <div class="invalid-feedback" style="color: red"> {{ $message }} </div>
          @enderror
        </div>


        <div class="input_field">
          <input type="password" name="password" class="input" id="password" placeholder="Password" required>
          @error('password')
            <div class="invalid-feedback" style="color: red">{{ $message }}</div>
          @enderror
        </div>


      <button class="button button1" style="border: none; color:white; padding:10px 20px; text-align:center; text-decoration:none; cursor: pointer; background-color:#4CAF50 ">Login</button>
    </form>
    <br>

    <small>Not registered? <a href="/register">Click Here!</a></small>
    </div>
    
  </div>
</div>
</body>
</html>