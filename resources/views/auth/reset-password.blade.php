<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - TEKKOM</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Poppins,sans-serif;
        }

        body{
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            background:linear-gradient(180deg,#87CEFA,#4db8ff);
            overflow:hidden;
        }

        body::before,
        body::after{
            content:"";
            position:absolute;
            width:280px;
            height:280px;
            border-radius:50%;
            background:rgba(255,255,255,.18);
        }

        body::before{
            left:-70px;
            top:40px;
        }

        body::after{
            right:-80px;
            bottom:40px;
        }

        .card{
            width:540px;
            padding:45px;
            background:rgba(255,255,255,.18);
            border-radius:30px;
            backdrop-filter:blur(12px);
            box-shadow:0 15px 30px rgba(0,0,0,.15);
            text-align:center;
            z-index:2;
        }

        .icon{
            font-size:70px;
            margin-bottom:10px;
        }

        h2{
            color:#174A7C;
            margin-bottom:10px;
        }

        p{
            color:#2d4d6b;
            font-size:14px;
            margin-bottom:25px;
            line-height:22px;
        }

        input{
            width:100%;
            padding:18px;
            border:none;
            outline:none;
            border-radius:40px;
            margin-top:15px;
            background:#edf2ff;
            box-shadow:0 8px 15px rgba(0,0,0,.12);
            font-size:16px;
        }

        button{
            width:100%;
            padding:17px;
            margin-top:25px;
            border:none;
            border-radius:40px;
            background:#0f4c81;
            color:white;
            font-size:22px;
            font-weight:bold;
            cursor:pointer;
            transition:.3s;
        }

        button:hover{
            background:#08365e;
        }

        .error{
            color:red;
            font-size:14px;
            text-align:left;
            margin:8px 0 0 18px;
        }

        a{
            color:#174A7C;
            text-decoration:none;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="card">

    <div class="icon">🔒</div>

    <h2>Buat Password Baru</h2>

    <p>
        Masukkan password baru untuk akun TEKKOM Anda.
    </p>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <input
            type="email"
            name="email"
            value="{{ old('email', $request->email) }}"
            placeholder="Masukkan Email"
            required
            autofocus
        >

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <input
            type="password"
            name="password"
            placeholder="Password Baru"
            required
        >

        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <input
            type="password"
            name="password_confirmation"
            placeholder="Konfirmasi Password"
            required
        >

        <button type="submit">
            Reset Password
        </button>

        <div style="margin-top:20px;">
            <a href="{{ route('login') }}">← Kembali ke Login</a>
        </div>

    </form>

</div>

</body>
</html>