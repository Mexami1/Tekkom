<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TEKKOM</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body{
            margin:0;
            font-family:'Figtree',sans-serif;
            background:#f4f7fb;
        }

        .wrapper{
            display:flex;
            min-height:100vh;
        }

        .sidebar{
            width:250px;
            background:#0f766e;
            color:white;
            position:fixed;
            height:100%;
        }

        .logo{
            text-align:center;
            padding:25px;
            font-size:24px;
            font-weight:bold;
            border-bottom:1px solid rgba(255,255,255,.2);
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:15px 25px;
            transition:.3s;
        }

        .sidebar a:hover{
            background:#115e59;
        }
        .active-menu{
            background:#115e59;
            border-left:5px solid #34d399;
            font-weight:bold;
        }

        .content{
            margin-left:250px;
            width:100%;
        }

        .navbar{
            background:white;
            padding:18px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
        }

        .main{
            padding:30px;
        }

        .logout-btn{
            background:#ef4444;
            color:white;
            border:none;
            padding:10px 18px;
            border-radius:8px;
            cursor:pointer;
        }

        .logout-btn:hover{
            background:#dc2626;
        }
    </style>

</head>

<body>

<div class="wrapper">

    <div class="sidebar">

        <div class="logo">
            TEKKOM
        </div>

        <a href="{{ route('dashboard') }}"
   class="{{ request()->routeIs('dashboard') ? 'active-menu' : '' }}">
   🏠 Dashboard
</a>

<a href="{{ route('attendance.index') }}">
    📅 Riwayat Kehadiran
</a>

<a href="{{ route('reports.index') }}"
   class="{{ request()->routeIs('reports.*') ? 'active-menu' : '' }}">
   📋 Riwayat Harian
</a>


<a href="{{ route('profile.edit') }}"
   class="{{ request()->routeIs('profile.*') ? 'active-menu' : '' }}">
   👤 Profil
</a>
    </div>

    <div class="content">

        <div class="navbar">

            <h2>Selamat Datang, {{ Auth::user()->name }} 👋</h2>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logout-btn">
                    Logout
                </button>
            </form>

        </div>

        <div class="main">

            {{ $slot }}

        </div>

    </div>

</div>

</body>
</html>