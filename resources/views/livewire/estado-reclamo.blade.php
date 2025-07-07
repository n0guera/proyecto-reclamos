<div class="flex items-center space-x-2">
    {{-- Menú desplegable --}}
    <select wire:model="estado_id"
            class="border rounded px-2 py-1 text-sm focus:ring-[#C8A752]">
        @foreach ($estados as $estado)
            <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
        @endforeach
    </select>

    {{-- Botón de confirmación --}}
    <button wire:click="cambiarEstado"
            class="text-xs bg-[#C8A752] text-white px-2 py-1 rounded hover:bg-[#b79749] transition">
        Cambiar estado
    </button>
</div>