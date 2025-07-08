@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-6">
    <h2 class="text-3xl font-bold text-center mb-10 text-[#C8A752]">Sobre Nosotros</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
        @php
            $miembros = [
                [
                    'nombre' => 'Agu Federico',
                    'descripcion' => 'Desarrollador web en formación, apasionado por el código limpio',
                    'avatar' => 'https://github.com/agufedee.png',
                    'url' => 'https://github.com/agufedee'
                ],
                [
                    'nombre' => 'Masacote Nahuel',
                    'descripcion' => 'Estudiante de programación con enfoque en backend y bases de datos',
                    'avatar' => 'https://github.com/nahuelmasacote.png',
                    'url' => 'https://github.com/nahuelmasacote'
                ],
                [
                    'nombre' => 'Noguera Bruno',
                    'descripcion' => 'Futuro full-stack developer con ganas de crear soluciones reales',
                    'avatar' => 'https://github.com/n0guera.png',
                    'url' => 'https://github.com/n0guera'
                ],
                [
                    'nombre' => 'Olmedo Eric',
                    'descripcion' => 'Apasionado por la tecnología, aprendiendo a construir el futuro',
                    'avatar' => 'https://github.com/D4vidR0j4s.png',
                    'url' => 'https://github.com/D4vidR0j4s'
                ],
                [
                    'nombre' => 'Viotti Elias',
                    'descripcion' => 'Apasionado por la inovación y el cryptomundo',
                    'avatar' => 'https://github.com/EliasViotti.png',
                    'url' => 'https://github.com/EliasViotti'
                ],
            ];
        @endphp

        @foreach ($miembros as $m)
        <a href="{{ $m['url'] }}" target="_blank"
           class="bg-gray-800  shadow-md hover:shadow-xl transition p-6 rounded-lg text-center w-72 group">
            <img src="{{ $m['avatar'] }}" alt="Avatar de {{ $m['nombre'] }}"
                 class="w-24 h-24 mx-auto rounded-full mb-4 border-4 border-[#C8A752] transition-transform group-hover:scale-105">
            <h3 class="text-lg font-semibold text-[#C8A752]">{{ $m['nombre'] }}</h3>
            <p class="text-sm text-gray-400 mt-2">{{ $m['descripcion'] }}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection
