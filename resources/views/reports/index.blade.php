<x-app-layout>

<div class="container">

    <h2 style="font-size:30px;font-weight:bold;color:#0f766e;margin-bottom:25px;">
        📄 Riwayat Laporan
    </h2>

    <div style="
        background:white;
        border-radius:15px;
        padding:20px;
        box-shadow:0 10px 25px rgba(0,0,0,.08);
    ">

        <table style="width:100%;border-collapse:collapse;">

            <thead style="background:#14b8a6;color:white;">

    <tr>
    <th style="padding:15px;text-align:center;">Tanggal</th>
    <th style="padding:15px;text-align:center;">Judul</th>
    <th style="padding:15px;text-align:center;">Deskripsi</th>
    <th style="padding:15px;text-align:center;">Status</th>
    <th style="padding:15px;text-align:center;">Aksi</th>
    </tr>

</thead>
            <tbody>

            @forelse($reports as $report)

                <tr style="border-bottom:1px solid #eee;">

                   <td style="padding:15px;text-align:center;">
                       {{ \Carbon\Carbon::parse($report->tanggal)->format('d M Y') }}
                   </td>

                    <td style="padding:15px; text-align:center;">
    {{ $report->judul }}
</td>

<td style="padding:15px; text-align:center;">
    {{ $report->deskripsi }}
</td>

<td style="padding:15px; text-align:center;">
    @if($report->status == 'Selesai')
        <span style="
            background:#dcfce7;
            color:#15803d;
            padding:6px 14px;
            border-radius:20px;
            font-weight:bold;">
            ✅ Selesai
        </span>
    @else
        <span style="
            background:#dbeafe;
            color:#1d4ed8;
            padding:6px 14px;
            border-radius:20px;
            font-weight:bold;">
            🔄 Proses
        </span>
    @endif
</td>
<td style="padding:15px; text-align:center;">

    <div style="display:flex;justify-content:center;gap:10px;">

        @if($report->status == 'Proses')
            <a href="{{ route('reports.edit', $report) }}"
               style="
                    background:#f59e0b;
                    color:white;
                    padding:8px 14px;
                    border-radius:8px;
                    text-decoration:none;
                    font-weight:bold;">
                ✏️ Edit
            </a>
        @endif

        <form action="{{ route('reports.destroy', $report) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus laporan ini?')">

            @csrf
            @method('DELETE')

            <button type="submit"
                    style="
                        background:#ef4444;
                        color:white;
                        padding:8px 14px;
                        border:none;
                        border-radius:8px;
                        cursor:pointer;
                        font-weight:bold;">
                🗑️ Hapus
            </button>

        </form>

    </div>

</td>

                </tr>

            @empty

                <tr>

                    <td colspan="5" style="padding:20px;text-align:center;">
                        Belum ada laporan.
                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>