<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gray-500">

    <div class="bg-white w-[450px] rounded shadow-lg p-8 relative">

        <div class="absolute -top-12 left-1/2 -translate-x-1/2">

            <div class="w-24 h-24 rounded-full bg-cyan-400 flex items-center justify-center shadow-lg">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 100-6 3 3 0 000 6z"/>
                    <path fill-rule="evenodd" d="M8 9a5 5 0 00-5 5h10a5 5 0 00-5-5z"/>
                </svg>

            </div>

        </div>

        <h2 class="text-3xl text-center mt-10 mb-8 font-semibold text-gray-600">
            Member Register
        </h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input
                type="text"
                name="name"
                placeholder="Full Name"
                value="{{ old('name') }}"
                class="w-full border rounded p-3 mb-4">

            <input
                type="email"
                name="email"
                placeholder="Email"
                value="{{ old('email') }}"
                class="w-full border rounded p-3 mb-4">

            <input
                type="password"
                name="password"
                placeholder="Password"
                class="w-full border rounded p-3 mb-4">

            <input
                type="password"
                name="password_confirmation"
                placeholder="Confirm Password"
                class="w-full border rounded p-3 mb-6">

            <button
                class="w-full bg-cyan-400 hover:bg-cyan-500 text-white font-bold py-3 rounded">

                Sign Up

            </button>

        </form>

        <p class="text-center mt-6 text-gray-600">

            Already have an account?

            <a href="{{ route('login') }}" class="text-cyan-500 font-semibold">
                Login here!
            </a>

        </p>

    </div>

</div>

</x-guest-layout>