<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>TEKKOM - Login</title>

<link rel="icon" type="image/png" href="{{ asset('images/logo-tekkom.png') }}">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>

<div class="circle one"></div>
<div class="circle two"></div>
<div class="circle three"></div>
<div class="circle four"></div>

<div class="login-box">

<div class="icon">
👤
</div>

<h2>User Login</h2>

<form method="POST" action="{{ route('login') }}">
@csrf

<input
type="email"
name="email"
placeholder="Username / Email"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

@if (Route::has('password.request'))
<a href="{{ route('password.request') }}" class="forgot">
Forgot Password?
</a>
@endif

<button type="submit">
Login
</button>

@if (Route::has('register'))

<p class="register">
Belum punya akun?
<a href="{{ route('register') }}">
Daftar
</a>
</p>

@endif

</form>

</div>

</body>
</html>