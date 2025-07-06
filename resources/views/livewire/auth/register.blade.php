<div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Registro de Usuario</h2>

    @session('success')
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-md text-sm">
            {{ session('success') }}
        </div>
    @endsession

    <form wire:submit.prevent="register" class="space-y-4">
        <!-- Nombre y Apellido (en fila en pantallas grandes) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre*</label>
                <input wire:model="nombre" type="text" id="nombre" autocomplete="given-name"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('nombre') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Apellido -->
            <div>
                <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido*</label>
                <input wire:model="apellido" type="text" id="apellido" autocomplete="family-name"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('apellido') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- DNI y Teléfono -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- DNI -->
            <div>
                <label for="dni" class="block text-sm font-medium text-gray-700">DNI*</label>
                <input wire:model="dni" type="number" id="dni" inputmode="numeric"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('dni') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Teléfono -->
            <div>
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono*</label>
                <input wire:model="telefono" type="tel" id="telefono" autocomplete="tel"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('telefono') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Domicilio -->
        <div>
            <label for="domicilio" class="block text-sm font-medium text-gray-700">Domicilio*</label>
            <input wire:model="domicilio" type="text" id="domicilio" autocomplete="street-address"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('domicilio') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email*</label>
            <input wire:model="email" type="email" id="email" autocomplete="email"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Contraseña y Confirmación -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Contraseña -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña*</label>
                <input wire:model="password" type="password" id="password" autocomplete="new-password"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('password') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Confirmar Contraseña -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar*</label>
                <input wire:model="password_confirmation" type="password" id="password_confirmation" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
        </div>

        <!-- Requisitos de contraseña -->
        <div class="text-xs text-gray-500">
            <p>La contraseña debe contener:</p>
            <ul class="list-disc pl-5">
                <li>Mínimo 8 caracteres</li>
                <li>Al menos una mayúscula</li>
                <li>Al menos una minúscula</li>
                <li>Al menos un número</li>
                <li>Puede incluir símbolos</li>
            </ul>
        </div>

        <!-- Botón de Registro -->
        <div class="pt-2">
            <button type="submit" 
                    wire:loading.attr="disabled"
                    class="w-full flex justify-center items-center bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-75">
                <span wire:loading.remove>Registrarse</span>
                <span wire:loading>
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </span>
            </button>
        </div>
    </form>

    <div class="mt-6 pt-6 border-t border-gray-200 text-center">
        <p class="text-sm text-gray-600">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline font-medium">Inicia sesión</a>
        </p>
    </div>
</div>