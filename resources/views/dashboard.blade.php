<x-app-layout>

    <x-slot name="header">
        <h2 style="font-size:28px;font-weight:bold;color:#0f766e;">
            
        </h2>
    </x-slot>

<style>body{
    background:linear-gradient(135deg,#ccfbf1,#99f6e4,#5eead4) !important;
}

main{
    background:linear-gradient(135deg,#ccfbf1,#99f6e4,#5eead4) !important;
    min-height:100vh;
}

.min-h-screen{
    background:linear-gradient(135deg,#ccfbf1,#99f6e4,#5eead4) !important;
} <style>

body{
    background:linear-gradient(135deg,#d8faf6,#eefdfa,#c8f5f2);
    min-height:100vh;
}

.container{
    max-width:1150px;
    margin:auto;
    padding:35px 25px;
}

.welcome{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
    margin-bottom:25px;
}

.welcome h2{
    color:#0f766e;
    margin-bottom:5px;
}

.welcome{

    background:white;

    padding:25px;

    border-radius:18px;

    box-shadow:0 10px 25px rgba(20,184,166,.08);

    margin-bottom:25px;

    border-left:6px solid #14b8a6;

}

.cards{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:20px;

    margin-bottom:30px;

}

.card{

    background:#fff;

    border-radius:18px;

    padding:22px;

    border-left:5px solid #14b8a6;

    box-shadow:0 10px 25px rgba(20,184,166,.10);

    transition:.3s;

}

.card:hover{

    transform:translateY(-5px);

}

.card h4{

    color:#666;

    margin-bottom:10px;

}

.card h1{

    color:#14b8a6;

    font-size:35px;

}

.content{

    display:grid;

    grid-template-columns:0.8fr 1.2fr;

    gap:20px;

    align-items:start;

}

.box{

    background:#fff;

    padding:22px;

    border-radius:18px;

    border-top:5px solid #14b8a6;

    box-shadow:0 10px 25px rgba(20,184,166,.10);

}
.box:first-child{

    max-height:220px;

}

.box h3{

    color:#0f766e;

    margin-bottom:20px;

}

label{

    display:block;

    margin-top:15px;

    margin-bottom:8px;

    font-weight:600;

}

input,
textarea{

    width:100%;

    padding:12px;

    border:1px solid #ddd;

    border-radius:10px;

    outline:none;

}

textarea{

    resize:none;

    height:120px;

}

button{

    border:none;

    padding:12px 24px;

    border-radius:10px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

}

button:hover{

    transform:translateY(-2px);

}

.btn-masuk{

    background:#14b8a6;

    color:white;

}

.btn-pulang{

    background:#ef4444;

    color:white;

    margin-left:10px;

}

.btn-simpan{

    background:#0f766e;

    color:white;

    width:100%;

}

.riwayat{

    margin-top:25px;

    background:white;

    padding:25px;

    border-radius:18px;

    border-top:5px solid #14b8a6;

    box-shadow:0 10px 25px rgba(20,184,166,.08);

}

.riwayat ul{

    margin-top:15px;

    padding-left:20px;

}

</style>

<div class="container">

<div class="welcome">

<h2>Halo, {{ Auth::user()->name }} 👋</h2>

<p>Selamat datang di Sistem Daftar Hadir & Laporan Harian.</p>

</div>

<div class="cards">

<div class="card">
<h4>Total Hadir</h4>
<h1>18</h1>
</div>

<div class="card">
<h4>Laporan Bulan Ini</h4>
<h1>23</h1>
</div>

<div class="card">
<h4>Status Hari Ini</h4>
<h1 style="font-size:24px;">Belum Absen</h1>
</div>

</div>

<div class="content">

<div class="box">

<h3>📍 Daftar Hadir</h3>

<p><b>Tanggal :</b> {{ date('d F Y') }}</p>

<p><b>Jam :</b> {{ date('H:i') }} WIB</p>

<button class="btn-masuk">
Absen Masuk
</button>

<button class="btn-pulang">
Absen Pulang
</button>

</div>

<div class="box">

<h3>📝 Laporan Harian</h3>

<form>

<label>Judul Pekerjaan</label>

<input type="text" placeholder="Masukkan judul pekerjaan">

<label>Deskripsi</label>

<textarea placeholder="Masukkan laporan pekerjaan..."></textarea>

<button class="btn-simpan">

Simpan Laporan

</button>

</form>

</div>

</div>

<div class="riwayat">

<h3>📋 Riwayat Hari Ini</h3>

<ul>

<li>08:00 - Absen Masuk</li>

<li>12:00 - Istirahat</li>

<li>17:00 - Absen Pulang</li>

<li>Laporan : Instalasi Laravel & Pembuatan Dashboard</li>

</ul>

</div>

</div>

</x-app-layout>