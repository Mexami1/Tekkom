<x-app-layout>

<style>

body,
main,
.min-h-screen{
    background:linear-gradient(135deg,#d8faf6,#eefdfa,#c8f5f2)!importa  nt;
}

.container{
    width:100%;
    max-width:1300px;
    margin:auto;
    padding:30px;
}

.header-dashboard{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#fff;
    padding:25px;
    border-radius:18px;
    border-left:6px solid #14b8a6;
    box-shadow:0 10px 25px rgba(20,184,166,.08);
    margin-bottom:25px;
}

.header-dashboard h2{
    color:#0f766e;
    margin:0;
    font-size:30px;
}

.header-dashboard p{
    color:#666;
    margin-top:8px;
}

.clock-box{
    text-align:center;
}

#clock{
    font-size:42px;
    color:#14b8a6;
    font-weight:bold;
}

#date{
    color:#777;
    margin-top:8px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-bottom:25px;
}

.card{
    background:#fff;
    padding:22px;
    border-radius:18px;
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
    font-size:34px;
}

.dashboard-content{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
    margin-top:20px;
}

.box{
    background:#fff;
    padding:22px;
    border-radius:18px;
    border-top:5px solid #14b8a6;
    box-shadow:0 10px 25px rgba(20,184,166,.08);
}

.box h3{
    margin-bottom:15px;
    color:#0f766e;
}

label{
    display:block;
    margin:12px 0 8px;
    font-weight:600;
}

input,
textarea{
    width:100%;
    border:1px solid #ddd;
    border-radius:10px;
    padding:12px;
}

textarea{
    resize:none;
    height:120px;
}

.btn-group{
    margin-top:20px;
}

.btn-masuk{
    background:#14b8a6;
    color:white;
    border:none;
    padding:12px 24px;
    border-radius:10px;
    cursor:pointer;
}

.btn-pulang{
    background:#ef4444;
    color:white;
    border:none;
    padding:12px 24px;
    border-radius:10px;
    cursor:pointer;
    margin-left:10px;
}

.btn-simpan{
    width:100%;
    margin-top:15px;
    background:#0f766e;
    color:white;
    border:none;
    padding:12px;
    border-radius:10px;
    cursor:pointer;
}

.riwayat{
    margin-top:25px;
    background:#fff;
    padding:22px;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(20,184,166,.08);
}

@media(max-width:900px){

.cards{
    grid-template-columns:1fr;
}

.dashboard-content{
    grid-template-columns:1fr;
}

.header-dashboard{
    flex-direction:column;
    gap:20px;
}

}

</style>

<div class="container">

<div class="header-dashboard">

<div>

<h2 id="greeting">
Selamat Datang, {{ Auth::user()->name }} 👋
</h2>

<p id="today-date"></p>

</div>

<div class="clock-box">

<div id="clock"></div>

<div id="date"></div>

</div>

</div>

<div class="cards">

<div class="card">
<h4>Total Hadir</h4>
<h1>{{ $totalHadir }}</h1>
</div>

<div class="card">
<h4>Laporan Bulan Ini</h4>
<h1>{{ $laporanBulanIni }}</h1>
</div>

<div class="card">

<h4>Status Hari Ini</h4>

@if($statusHariIni)

@if($statusHariIni->jam_keluar)

<h1 style="font-size:24px;">Pulang</h1>

@else

<h1 style="font-size:24px;">Hadir</h1>

@endif

@else

<h1 style="font-size:24px;">Belum Absen</h1>

@endif

</div>

</div>

    <div class="dashboard-content"></div>

    <!-- Absensi -->
    <div class="box">

        <h3>📍 Absensi Hari Ini</h3>

        @if($statusHariIni)

            <p><strong>Jam Masuk :</strong>
                {{ \Carbon\Carbon::parse($statusHariIni->jam_masuk)->format('H:i') }}
            </p>

            <p>
                <strong>Jam Pulang :</strong>

                @if($statusHariIni->jam_keluar)
                    {{ \Carbon\Carbon::parse($statusHariIni->jam_keluar)->format('H:i') }}
                @else
                    -
                @endif
            </p>

        @else

            <p>Anda belum melakukan absensi hari ini.</p>

        @endif

        <div class="btn-group">

            @if(!$statusHariIni)

                <form action="{{ route('absen.masuk') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-masuk">
                        Absen Masuk
                    </button>
                </form>

            @elseif(!$statusHariIni->jam_keluar)

                <form action="{{ route('absen.pulang') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-pulang">
                        Absen Pulang
                    </button>
                </form>

            @else

                <p style="color:green;font-weight:bold;">
                    ✅ Absensi hari ini sudah selesai.
                </p>

            @endif

        </div>

    </div>

    <!-- Laporan Harian -->
    <div class="box">

        <h3>📝 Laporan Harian</h3>

        <form action="{{ route('reports.store') }}" method="POST">

            @csrf

            <label>Judul</label>

            <input
                type="text"
                name="judul"
                placeholder="Contoh:TEKKOM"
                required
            >

           <label>Deskripsi</label>

<textarea
    name="deskripsi"
    required
></textarea>

<label>Status</label>

<select
    name="status"
    style="
        width:100%;
        padding:12px;
        border:1px solid #ddd;
        border-radius:10px;
        margin-bottom:15px;
    "
    required
>
    <option value="Proses">🟡 Proses</option>
    <option value="Selesai">🟢 Selesai</option>
</select>

<button type="submit" class="btn-simpan">
    Simpan Laporan
</button>
</div>
<!-- Aktivitas Terakhir -->
<div class="box" style="margin-top:25px;">

    <h3>📌 Aktivitas Terakhir</h3>

    @if($statusHariIni)

        <p>✅ Sudah Absen Masuk</p>

        @if($statusHariIni->jam_keluar)
            <p>✅ Sudah Absen Pulang</p>
        @endif

    @else

        <p>❌ Belum melakukan absensi hari ini.</p>

    @endif

    @if($laporanHariIni->count())

        <p>📝 Sudah mengirim {{ $laporanHariIni->count() }} laporan hari ini.</p>

    @else

        <p>📝 Belum mengirim laporan hari ini.</p>

    @endif

</div>

<!-- Riwayat Laporan -->
<div class="riwayat">

    <h3>📋 Riwayat Laporan Hari Ini</h3>

    <ul>

        @forelse($laporanHariIni as $laporan)

            <li style="margin-bottom:15px;">
                <strong>{{ $laporan->created_at->format('H:i') }}</strong>
                - {{ $laporan->judul }}
                <br>
                {{ $laporan->deskripsi }}
            </li>

        @empty

            <li>Belum ada laporan hari ini.</li>

        @endforelse

    </ul>

</div>

</div> {{-- Tutup Container --}}

<script>

function updateClock(){

    const now = new Date();

    // Jam
    document.getElementById("clock").innerHTML =
        now.toLocaleTimeString("id-ID");

    // Tanggal
    document.getElementById("date").innerHTML =
        now.toLocaleDateString("id-ID",{
            weekday:"long",
            day:"numeric",
            month:"long",
            year:"numeric"
        });

    document.getElementById("today-date").innerHTML =
        now.toLocaleDateString("id-ID",{
            weekday:"long",
            day:"numeric",
            month:"long",
            year:"numeric"
        });

    // Greeting
    let jam = now.getHours();
    let salam = "Selamat Malam";

    if(jam >= 4 && jam < 11){
        salam = "Selamat Pagi";
    }else if(jam >= 11 && jam < 15){
        salam = "Selamat Siang";
    }else if(jam >= 15 && jam < 18){
        salam = "Selamat Sore";
    }

    document.getElementById("greeting").innerHTML =
        salam + ", {{ Auth::user()->name }} 👋";

}

setInterval(updateClock,1000);
updateClock();

</script>

</x-app-layout>