<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Iniciar Sesión</h2>

    @session('status')
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-md text-sm">
            {{ session('status') }}
        </div>
    @endsession

    <form wire:submit.prevent="login">
        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="email" wire:model="email"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                   autocomplete="email"
                   autofocus>
            @error('email')
                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Contraseña -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
            <input type="password" id="password" wire:model="password"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                   autocomplete="current-password">
            @error('password')
                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Recordar sesión y olvidé contraseña -->
        <div class="mb-6 flex justify-between items-center">
            <div class="flex items-center">
                <input type="checkbox" id="remember" wire:model="remember"
                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember" class="ml-2 text-sm text-gray-600">Recordar sesión</label>
            </div>
            
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif
        </div>

        <!-- Botón de submit -->
        <button type="submit"
                wire:loading.attr="disabled"
                class="w-full flex justify-center items-center bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-75">
            <span wire:loading.remove>Ingresar</span>
            <span wire:loading>
                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </span>
        </button>
    </form>

    <div class="mt-6 pt-6 border-t border-gray-200 text-center">
        <p class="text-sm text-gray-600">
            ¿No tienes cuenta?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-medium">Regístrate</a>
        </p>
    </div>
</div>