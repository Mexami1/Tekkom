<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tekkom</title>

<link rel="icon" type="image/png" href="{{ asset('images/logo-tekkom.png') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>

body{
    font-family:'Segoe UI',sans-serif;
    background:#f5f7fa;
}

/*================ HEADER =================*/

.top-header{
    background:#18b7b0;
    color:white;
    padding:35px 0;
}

.top-header h2{
    font-weight:700;
    margin-bottom:8px;
}

.top-header h4{
    margin-bottom:8px;
}

/*================ NAVBAR =================*/

.navbar{
    background:#0c918b !important;
}

.navbar .nav-link{
    color:white !important;
    margin-right:10px;
    font-size:17px;
}

.navbar .nav-link:hover{
    color:#ffe082 !important;
}

/*================ HERO =================*/

.hero{
    padding:80px 0;
    background:linear-gradient(to right,#ffffff,#eef8f7);
}

.hero h1{
    color:#0c918b;
    font-size:60px;
    font-weight:bold;
}

.hero p{
    font-size:22px;
    line-height:40px;
    color:#555;
}

.hero-logo{
    width:350px;
    height:350px;
    object-fit:contain;
    background:transparent;
    padding:0;
    box-shadow:none;
    border:none;
}

/*================ BUTTON =================*/

.btn-success{
    background:#198754;
    border:none;
    padding:12px 30px;
    font-size:22px;
}

/*================ CARD =================*/

.feature-card{
    border:none;
    border-radius:15px;
    transition:.3s;
}

.feature-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 30px rgba(0,0,0,.15);
}

.feature-icon{
    font-size:55px;
    color:#18b7b0;
    margin-bottom:20px;
}

/*================ FOOTER =================*/

footer{
    margin-top:70px;
    background:#2f2f2f;
    color:white;
    padding:35px 0;
}

</style>

</head>

<body>

<!-- HEADER -->

<div class="top-header">

    <div class="container">

        <h2>Sistem Informasi Absensi</h2>

        <h4>Perekaman Daftar Hadir & Pelaporan Tugas Harian</h4>

        <small>
            Aplikasi Monitoring Kehadiran dan Aktivitas Pegawai
        </small>

    </div>

</div>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark shadow">

<div class="container">

<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav me-auto">

<li class="nav-item">
<a class="nav-link active" href="#">
Beranda
</a>
</li>




</ul>


</div>

</div>

</nav>

<!-- HERO -->

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h1>
Selamat Datang
</h1>

<p class="mt-4">
Sistem ini digunakan untuk mencatat kehadiran serta mengelola laporan tugas harian secara digital
sehingga aktivitas pengguna dapat dipantau dengan lebih mudah dan efisien.
</p>

<a href="{{ route('login') }}"
class="btn btn-success mt-3">

<i class="fa-solid fa-arrow-right"></i>

Login

</a>

</div>

<div class="col-lg-6 d-flex justify-content-center align-items-center">

    <img src="{{ asset('images/logo-tekkom.png') }}"
         class="hero-logo"
         alt="Logo Tekkom">

</div>
</div>

</div>

</div>

</section>

<!-- FITUR -->

<div class="container">

<div class="row g-4">

<div class="col-md-6">

<div class="card feature-card p-4 text-center">

<i class="fa-solid fa-user-check feature-icon"></i>

<h4>Daftar Hadir</h4>

<p>

Melakukan absensi masuk,
istirahat,
dan pulang secara online.

</p>

</div>

</div>

<div class="col-md-6">

<div class="card feature-card p-4 text-center">

<i class="fa-solid fa-clipboard-list feature-icon"></i>

<h4>Laporan Harian</h4>

<p>

Menginput aktivitas pekerjaan
setiap hari secara mudah
dan cepat.

</p>

</div>

</div>

</div>

</div>

<!-- FOOTER -->

<footer>

<div class="container">

<div class="row text-center">

<div class="col-md-4">

<h5>Layanan</h5>

<p>Absensi Online</p>

</div>

<div class="col-md-4">

<h5>Made By</h5>

<p>SMKTIAIRLANGGA</p>

</div>

<div class="col-md-4">

<h5>Layanan</h5>

<p>Laporan Tugas Online</p>

</div>

</div>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>