<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-100 to-gray-100">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

            <!-- Title -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Sistem Gaji</h1>
                <p class="text-sm text-gray-500">Silakan login untuk melanjutkan</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input 
                        id="email" 
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus 
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input 
                        id="password" 
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                        type="password"
                        name="password"
                        required
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between mt-4">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm">
                        <span class="ml-2">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" 
                           class="text-sm text-indigo-600 hover:underline">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <!-- Button -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg transition">
                        Masuk
                    </button>
                </div>
            </form>

            <!-- Footer -->
            <div class="mt-6 text-center text-xs text-gray-400">
                © {{ date('Y') }} Sistem Penggajian
            </div>
        </div>
    </div>
</x-guest-layout>