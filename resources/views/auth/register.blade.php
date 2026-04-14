<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-100 to-gray-100">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

            <!-- Title -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Sistem Gaji</h1>
                <p class="text-sm text-gray-500">Buat akun baru</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nama')" />
                    <x-text-input 
                        id="name" 
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                        type="text" 
                        name="name" 
                        :value="old('name')" 
                        required 
                        autofocus 
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input 
                        id="email" 
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
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

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                    <x-text-input 
                        id="password_confirmation" 
                        class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                        type="password"
                        name="password_confirmation" 
                        required 
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Action -->
                <div class="flex items-center justify-between mt-6">
                    <a href="{{ route('login') }}" 
                       class="text-sm text-indigo-600 hover:underline">
                        Sudah punya akun?
                    </a>

                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded-lg transition">
                        Daftar
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