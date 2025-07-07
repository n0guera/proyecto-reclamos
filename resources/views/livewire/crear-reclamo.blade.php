<div>
    <!-- Mostrar alertas -->
    <div 
    x-data="{ showAlert: false, alertMessage: '', alertType: '' }"
    x-on:alert.window="
        showAlert = true; 
        alertMessage = $event.detail.message; 
        alertType = $event.detail.type; 
        setTimeout(() => showAlert = false, 5000);
    "
    x-show="showAlert"
    x-transition
    class="fixed top-4 right-4 z-50 w-80 p-4 rounded shadow-lg"
    :class="{
        'bg-green-100 border-green-500 text-green-700': alertType === 'success',
        'bg-red-100 border-red-500 text-red-700': alertType === 'error'
    }"
>
    <div class="flex items-center">
        <span x-text="alertMessage" class="flex-grow"></span>
        <button @click="showAlert = false" class="ml-2 text-lg">&times;</button>
    </div>
</div>

@if (session()->has('success'))
    <div 
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 3000)"
        class="p-3 mb-4 rounded bg-green-100 text-green-800 border border-green-300 transition ease-in-out duration-500"
        x-transition
    >
        {{ session('success') }}
    </div>
@endif

    <form wire:submit.prevent="submit" class="space-y-6" wire:key="form-{{ $formKey }}">
        <!-- Descripción -->
        <div>
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción *</label>
            <textarea wire:model="descripcion" id="descripcion" rows="4"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
            @error('descripcion') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <!-- Ubicación -->
        <div>
            <label for="ubicacion" class="block text-sm font-medium text-gray-700">Ubicación *</label>
            <input wire:model="ubicacion" type="text" id="ubicacion"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('ubicacion') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <!-- Categoría -->
        <div>
            <label for="categoria_id" class="block text-sm font-medium text-gray-700">Categoría *</label>
            <select wire:model="categoria_id" id="categoria_id"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                <option value="">-- Seleccione una categoría --</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            @error('categoria_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Enviar Reclamo
            </button>
        </div>
    </form>
</div>