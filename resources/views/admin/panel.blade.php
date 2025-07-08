@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mt-10">
    <h2 class="text-2xl font-bold text-[#C8A752] mb-6">Panel de Administración</h2>

    <table class="w-full bg-gray-800 shadow rounded text-sm">
        <thead class="bg-gray-950 text-left">
            <tr>
                <th class="p-2">#</th>
                <th class="p-2">Usuario</th>
                <th class="p-2">Categoría</th>
                <th class="p-2">Estado</th>
                <th class="p-2">Actualizar</th>
                <th class="p-2">Descripción</th>
                <th class="p-2">Ubicación</th>
                <th class="p-2">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reclamos as $reclamo)
                <tr class="border-t">
                    <td class="p-2">{{ $reclamo->id }}</td>
                    <td class="p-2">{{ $reclamo->usuario->name }}</td>
                    <td class="p-2">{{ $reclamo->categoria->nombre }}</td>
                    <td class="p-2">
                        {{ $reclamo->estado->nombre }}
                    </td>
                    <td class="bg-gray-800 text-black p-2">
                        @livewire('estado-reclamo', ['reclamo' => $reclamo], key($reclamo->id))
                    </td>
                    <td class="p-2">{{ $reclamo->descripcion }}</td>
                    <td class="p-2">
                        <a href="{{ $reclamo->ubicacion }}" class="text-blue-600 hover:underline" target="_blank">Ver mapa</a>
                    </td>
                    <td class="p-2">
                        <form action="{{ route('admin.reclamos.destroy', $reclamo) }}" method="POST"
                            onsubmit="return confirm('¿Estás seguro de eliminar este reclamo?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline text-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
