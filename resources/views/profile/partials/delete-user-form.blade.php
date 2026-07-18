<section class="space-y-6">

    <header class="mb-8">
    <h2 class="text-2xl font-bold text-black">
        Hapus Akun
    </h2>

    <p class="mt-2 text-gray-500">
        Setelah akun dihapus, seluruh data yang berkaitan dengan akun ini akan dihapus secara permanen dan tidak dapat dipulihkan kembali.
    </p>
</header>

    <button
    type="button"
    x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    style="
        background:#dc2626;
        color:white;
        padding:10px 22px;
        border:none;
        border-radius:8px;
        font-weight:600;
        cursor:pointer;
    ">
    Hapus Akun
</button>

    <x-modal
        name="confirm-user-deletion"
        :show="$errors->userDeletion->isNotEmpty()"
        focusable
    >

        <form method="POST" action="{{ route('profile.destroy') }}" class="p-6">

            @csrf
            @method('DELETE')

            <h2 class="text-2xl font-bold text-red-600">
                Konfirmasi Hapus Akun
            </h2>

            <p class="mt-3 text-gray-600">
                Apakah Anda yakin ingin menghapus akun ini?
                <br><br>

                Tindakan ini bersifat permanen dan tidak dapat dibatalkan.
                Semua data absensi, laporan harian, serta informasi akun akan dihapus secara permanen.
            </p>

            <div class="mt-6">

                <label class="block font-semibold mb-2">
                    Masukkan Password
                </label>

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full rounded-lg"
                    placeholder="Masukkan password"
                />

                <x-input-error
                    :messages="$errors->userDeletion->get('password')"
                    class="mt-2"
                />

            </div>

            <div class="mt-8 flex justify-end gap-3">

                <button
                    type="button"
                    x-on:click="$dispatch('close')"
                    style="
                        background:#e5e7eb;
                        color:#374151;
                        padding:10px 22px;
                        border:none;
                        border-radius:10px;
                        font-weight:600;
                        cursor:pointer;
                    ">
                    Batal
                </button>

                <button
                    type="submit"
                    style="
                        background:#dc2626;
                        color:white;
                        padding:10px 22px;
                        border:none;
                        border-radius:10px;
                        font-weight:600;
                        cursor:pointer;
                    ">
                    Ya, Hapus Akun
                </button>

            </div>

        </form>

    </x-modal>

</section>