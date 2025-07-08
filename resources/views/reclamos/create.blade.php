@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-gray-800 p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4 text-[#C8A752]">Nuevo Reclamo</h2>

    <form method="POST" action="{{ route('reclamos.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <input type="text" name="ubicacion" placeholder="Ubicación (enlace de Google Maps)" class="bg-gray-900 w-full order p-2 rounded" required>

        <select name="id_categoria" class="bg-gray-900 w-full order p-2 rounded" required>
            <option value="">Seleccioná una categoría</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>

        <textarea name="descripcion" placeholder="Descripción del reclamo" class="bg-gray-900 w-full p-2 rounded" rows="4" required></textarea>

        <input type="file" name="foto" class="bg-gray-900 w-full p-2 rounded">

        <button type="submit" class="bg-[#C8A752] text-black px-4 py-2 rounded hover:bg-[#b79749] transition">
            Enviar Reclamo
        </button>
        <a href="{{ route('reclamos.mis') }}" class="inline-block bg-[#C8A752] text-black px-4 py-2 rounded hover:bg-[#b79749] transition mb-4">
            Mis reclamos
        </a>
    </form>
</div>
@endsection