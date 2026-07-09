<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4">

            <h1 class="text-3xl font-bold mb-6">
                Sistem Daftar Hadir & Laporan Harian
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-blue-500 text-white rounded-lg p-6 shadow">
                    <h2 class="text-xl font-bold">Daftar Hadir</h2>
                    <p class="mt-2">
                        Melakukan absensi masuk dan pulang.
                    </p>

                    <a href="/attendance"
                        class="inline-block mt-4 bg-white text-blue-600 px-4 py-2 rounded">
                        Masuk
                    </a>
                </div>

                <div class="bg-green-500 text-white rounded-lg p-6 shadow">
                    <h2 class="text-xl font-bold">Laporan Harian</h2>
                    <p class="mt-2">
                        Input laporan pekerjaan harian.
                    </p>

                    <a href="/reports"
                        class="inline-block mt-4 bg-white text-green-600 px-4 py-2 rounded">
                        Masuk
                    </a>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>