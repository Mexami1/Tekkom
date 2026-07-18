<section>
   <header class="mb-8">
    <h2 class="text-3xl font-bold text-teal-700">
        🔒 Update Password
    </h2>

    <p class="mt-2 text-gray-500 text-lg">
        Gunakan password yang kuat agar akun Anda tetap aman.
    </p>
</header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">

    <button
        type="submit"
        style="background:#0f766e;color:#fff;padding:12px 24px;border:none;border-radius:10px;font-weight:600;cursor:pointer;">
        Update Password
    </button>

    @if (session('status') === 'password-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="text-green-600 font-medium"
        >
            ✔ Password berhasil diperbarui
        </p>
    @endif

</div>
    </form>
</section>
