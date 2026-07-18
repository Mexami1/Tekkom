<section>

    <header class="mb-8">
        <h2 class="text-3xl font-bold text-teal-700">
            👤 Profile Information
        </h2>

        <p class="mt-2 text-gray-500 text-lg">
            Update informasi akun dan alamat email Anda
        </p>
    </header>

    <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('PATCH')

        <div>
            <x-input-label
                for="name"
                value="Nama"
                class="text-teal-700 font-semibold"
            />

            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-2 block w-full rounded-xl border-2 border-teal-200 focus:border-teal-500 focus:ring-teal-500"
                :value="old('name', $user->name)"
                required
                autofocus
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('name')"
            />
        </div>

        <div>
            <x-input-label
                for="email"
                value="Email"
                class="text-teal-700 font-semibold"
            />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-2 block w-full rounded-xl border-2 border-teal-200 focus:border-teal-500 focus:ring-teal-500"
                :value="old('email', $user->email)"
                required
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('email')"
            />
        </div>

        <div class="flex items-center gap-4">

    <button
    type="submit"
    style="background:#0f766e;color:#fff;padding:12px 24px;border:none;border-radius:10px;font-weight:600;">
    Update
</button>

    @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-green-600 font-medium"
                >
                    ✔ Berhasil disimpan
                </p>
            @endif

        </div>

    </form>

</section>