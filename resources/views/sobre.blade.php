@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-6">
    <h2 class="text-3xl font-bold text-center mb-10 text-[#C8A752]">Sobre Nosotros</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
        @php
            $miembros = [
                [
                    'nombre' => 'Agu Federico',
                    'descripcion' => 'Descripcion',
                    'avatar' => 'https://via.placeholder.com/150',
                    'url' => 'https://github.com/fede'
                ],
                [
                    'nombre' => 'Masacote Nahuel',
                    'descripcion' => 'Descripcion',
                    'avatar' => 'https://via.placeholder.com/150',
                    'url' => 'https://nahuel.dev'
                ],
                [
                    'nombre' => 'Noguera Bruno',
                    'descripcion' => 'Descripcion',
                    'avatar' => 'https://via.placeholder.com/150',
                    'url' => 'https://github.com/santi'
                ],
                [
                    'nombre' => 'Olmedo Eric',
                    'descripcion' => 'Descripcion',
                    'avatar' => 'https://via.placeholder.com/150',
                    'url' => 'https://portfolio.eric.com'
                ],
                [
                    'nombre' => 'Viotti Elias',
                    'descripcion' => 'Descripcion',
                    'avatar' => 'https://via.placeholder.com/150',
                    'url' => 'https://github.com/EliasViotti'
                ],
            ];
        @endphp

        @foreach ($miembros as $m)
        <a href="{{ $m['url'] }}" target="_blank"
           class="bg-white shadow-md hover:shadow-xl transition p-6 rounded-lg text-center w-72 group">
            <img src="{{ $m['avatar'] }}" alt="Avatar de {{ $m['nombre'] }}"
                 class="w-24 h-24 mx-auto rounded-full mb-4 border-4 border-[#C8A752] transition-transform group-hover:scale-105">
            <h3 class="text-lg font-semibold text-[#C8A752]">{{ $m['nombre'] }}</h3>
            <p class="text-sm text-gray-600 mt-2">{{ $m['descripcion'] }}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection
