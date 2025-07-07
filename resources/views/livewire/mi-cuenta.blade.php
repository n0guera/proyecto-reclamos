<div class="max-w-4xl mx-auto mt-8">
<div 
    x-data="{ showAlert: false, alertMessage: '', alertType: '' }"
    x-on:alert.window="
        showAlert = true;
        alertMessage = $event.detail.message;
        alertType = $event.detail.type;
        setTimeout(() => showAlert = false, 3000);
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
    <h1 class="text-2xl font-bold mb-6">Mis Reclamos</h1>

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


    @if ($reclamos->isEmpty())
        <p class="text-gray-600">No realizaste ningún reclamo aún.</p>
    @else
        <div class="space-y-4">
            @foreach ($reclamos as $reclamo)
                <div wire:key="reclamo-{{ $reclamo->id }}" class="p-4 bg-white border rounded shadow-sm">
                    <h2 class="text-lg font-semibold text-blue-700">
                        {{ $reclamo->categoria->nombre ?? 'Sin categoría' }}
                    </h2>
                    <p class="text-gray-700 mt-1"><strong>Ubicación:</strong> {{ $reclamo->ubicacion }}</p>
                    <p class="text-gray-700 mt-1"><strong>Descripción:</strong> {{ $reclamo->descripcion }}</p>
                    <p class="text-sm text-gray-500 mt-2">
                        Estado: <span class="capitalize font-medium">{{ $reclamo->estado }}</span> |
                        Fecha: {{ $reclamo->created_at->format('d/m/Y H:i') }}
                    </p>

                    <button wire:click="eliminar({{ $reclamo->id }})"
                        onclick="return confirm('¿Estás seguro de que querés eliminar este reclamo?')"
                        class="mt-3 inline-block text-red-600 hover:text-red-800 text-sm underline">
                        Eliminar reclamo
                    </button>
                </div>
            @endforeach
        </div>
    @endif
</div>
