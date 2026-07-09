<x-guest-layout>

<div class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-indigo-700 via-sky-600 to-cyan-500">

    <!-- Background Decoration -->
    <div class="absolute w-96 h-96 bg-pink-400 rounded-full blur-3xl opacity-30 -top-20 -left-20"></div>
    <div class="absolute w-[500px] h-[500px] bg-cyan-300 rounded-full blur-3xl opacity-30 -bottom-32 -right-32"></div>

    <!-- Login Card -->
    <div class="relative w-[430px] bg-white/20 backdrop-blur-xl border border-white/30 rounded-3xl shadow-2xl pt-20 pb-8 px-8">

        <!-- Icon -->
        <div class="absolute -top-14 left-1/2 -translate-x-1/2">
            <div class="w-28 h-28 rounded-full bg-gradient-to-r from-cyan-400 to-blue-500 flex items-center justify-center shadow-xl border-4 border-white">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-12 h-12 text-white"
                     fill="currentColor"
                     viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 100-6 3 3 0 000 6z"/>
                    <path fill-rule="evenodd" d="M8 9a5 5 0 00-5 5h10a5 5 0 00-5-5z"/>
                </svg>
            </div>
        </div>

        <!-- Title -->
        <h2 class="text-3xl font-bold text-center text-white mb-8">
            Member Login
        </h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <input
                type="email"
                name="email"
                placeholder="Email"
                class="w-full mb-4 p-3 rounded-xl bg-white/80 border border-white/40 focus:outline-none focus:ring-2 focus:ring-cyan-300">

            <!-- Password -->
            <input
                type="password"
                name="password"
                placeholder="Password"
                class="w-full mb-5 p-3 rounded-xl bg-white/80 border border-white/40 focus:outline-none focus:ring-2 focus:ring-cyan-300">

            <!-- Button -->
            <button
                class="w-full py-3 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-500 hover:from-cyan-500 hover:to-blue-600 text-white font-bold shadow-lg transition duration-300">

                Sign In

            </button>

            <!-- Remember -->
            <div class="flex justify-between items-center mt-6 text-white text-sm">

                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded">
                    Remember me
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="hover:underline">
                        Forgot Password?
                    </a>
                @endif

            </div>

        </form>

        <!-- Register -->
        <p class="text-center text-white mt-8">

            Don't have an account?

            <a href="{{ route('register') }}"
               class="font-bold text-yellow-300 hover:text-yellow-200">
                Sign up here!
            </a>

        </p>

    </div>

</div>

</x-guest-layout>