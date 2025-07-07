@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10">
    <h2 class="text-2xl font-bold text-[#C8A752] mb-6">Mis Reclamos</h2>

    @if ($reclamos->isEmpty())
        <p class="text-gray-600">Todavía no cargaste ningún reclamo.</p>
    @else
        <table class="w-full bg-gray-800 shadow rounded text-sm">
            <thead class="bg-gray-950 text-left">
                <tr>
                    <th class="p-2">Categoría</th>
                    <th class="p-2">Estado</th>
                    <th class="p-2">Descripción</th>
                    <th class="p-2">Ubicación</th>
                    <th class="p-2">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reclamos as $reclamo)
                    <tr class="border-t">
                        <td class="p-2">{{ $reclamo->categoria->nombre }}</td>
                        <td class="p-2">{{ $reclamo->estado->nombre }}</td>
                        <td class="p-2">{{ $reclamo->descripcion }}</td>
                        <td class="p-2">
                            <a href="{{ $reclamo->ubicacion }}" class="text-blue-600 hover:underline" target="_blank">Ver mapa</a>
                        </td>
                        <td class="p-2">{{ $reclamo->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection