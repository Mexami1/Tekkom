<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Tekkom</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

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
            width:430px;
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
            margin-top:10px;
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
            font-size:20px;
            font-weight:bold;
            cursor:pointer;
            transition:.3s;
        }

        button:hover{
            background:#08365e;
        }

        .status{
            color:green;
            margin-bottom:15px;
            font-size:14px;
        }

        .error{
            color:red;
            font-size:13px;
            margin-top:8px;
            text-align:left;
            margin-left:15px;
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

    <h2>Reset Password</h2>

    <p>
        Masukkan email yang terdaftar.
        Kami akan mengirimkan link untuk mengatur ulang password Anda.
    </p>

    @if(session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <input
            type="email"
            name="email"
            placeholder="Masukkan Email"
            value="{{ old('email') }}"
            required
        >

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">
            Kirim Link Reset
        </button>

        <div style="margin-top:20px;">
            <a href="{{ route('login') }}">← Kembali ke Login</a>
        </div>

    </form>

</div>

</body>
</html>