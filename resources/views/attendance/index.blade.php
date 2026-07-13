<x-app-layout>

<div class="container">

    <h2 style="font-size:30px;font-weight:bold;color:#0f766e;margin-bottom:25px;">
        📅 Riwayat Kehadiran
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
                    <th style="padding:15px;text-align:center;">Jam Masuk</th>
                    <th style="padding:15px;text-align:center;">Jam Pulang</th>
                    <th style="padding:15px;text-align:center;">Status</th>
                </tr>

            </thead>

            <tbody>

            @forelse($attendance as $item)

                <tr style="border-bottom:1px solid #eee;">

                    <td style="padding:15px;text-align:center;">
                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                    </td>

                    <td style="padding:15px;text-align:center;">
                        {{ $item->jam_masuk }}
                    </td>

                    <td style="padding:15px;text-align:center;">
                        {{ $item->jam_keluar ?? '-' }}
                    </td>

                    <td style="padding:15px;text-align:center;">

                        @if($item->status=="Hadir")

                            <span style="
                                background:#dcfce7;
                                color:#15803d;
                                padding:5px 12px;
                                border-radius:20px;
                                font-weight:bold;">
                                Hadir
                            </span>

                        @else

                            {{ $item->status }}

                        @endif

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="4" style="padding:20px;text-align:center;">
                        Belum ada data kehadiran.
                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>