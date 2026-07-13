<x-app-layout>

<div class="container" style="max-width:700px;margin:auto;">

    <h2 style="
        font-size:30px;
        font-weight:bold;
        color:#0f766e;
        margin-bottom:25px;">
        ✏️ Edit Laporan
    </h2>

    @if ($errors->any())
        <div style="
            background:#fee2e2;
            color:#b91c1c;
            padding:15px;
            border-radius:10px;
            margin-bottom:20px;">

            <ul style="margin:0;padding-left:20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    <form action="{{ route('reports.update', $report->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div style="margin-bottom:20px;">
            <label><b>Judul</b></label>

            <input
                type="text"
                name="judul"
                value="{{ old('judul', $report->judul) }}"
                style="
                    width:100%;
                    padding:12px;
                    border:1px solid #ddd;
                    border-radius:8px;">
        </div>

        <div style="margin-bottom:20px;">
            <label><b>Deskripsi</b></label>

            <textarea
                name="deskripsi"
                rows="5"
                style="
                    width:100%;
                    padding:12px;
                    border:1px solid #ddd;
                    border-radius:8px;">{{ old('deskripsi', $report->deskripsi) }}</textarea>
        </div>

        <div style="margin-bottom:25px;">
            <label><b>Status</b></label>

            <select
                name="status"
                style="
                    width:100%;
                    padding:12px;
                    border:1px solid #ddd;
                    border-radius:8px;">

                <option value="Proses"
                    {{ old('status', $report->status) == 'Proses' ? 'selected' : '' }}>
                    Proses
                </option>

                <option value="Selesai"
                    {{ old('status', $report->status) == 'Selesai' ? 'selected' : '' }}>
                    Selesai
                </option>

            </select>
        </div>

        <button
            type="submit"
            style="
                background:#14b8a6;
                color:white;
                border:none;
                padding:12px 24px;
                border-radius:8px;
                cursor:pointer;
                font-weight:bold;">
            💾 Update Laporan
        </button>

        <a href="{{ route('reports.index') }}"
           style="
                margin-left:10px;
                text-decoration:none;
                color:#555;">
            Batal
        </a>

    </form>

</div>

</x-app-layout>