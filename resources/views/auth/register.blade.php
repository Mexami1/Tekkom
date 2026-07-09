<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Register</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

<div class="circle one"></div>
<div class="circle two"></div>
<div class="circle three"></div>
<div class="circle four"></div>

<div class="login-box register-box">

<div class="icon">
👤
</div>

<h2>User Register</h2>

<form method="POST" action="{{ route('register') }}">
@csrf

<input
type="text"
name="name"
placeholder="Nama Lengkap"
required>

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

<input
type="password"
name="password_confirmation"
placeholder="Konfirmasi Password"
required>

<button type="submit">
Register
</button>

<p class="register">
Sudah punya akun?
<a href="{{ route('login') }}">
Login
</a>
</p>

</form>

</div>

</body>
</html>