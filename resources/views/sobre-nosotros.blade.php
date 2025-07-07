@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Sobre Nosotros</h1>

        <ul class="space-y-4">
            @foreach ($integrantes as $persona)
                <li class="flex items-center space-x-4">
                    <img 
                        src="https://github.com/{{ $persona['github_user'] }}.png" 
                        alt="Avatar de {{ $persona['nombre'] }}" 
                        class="w-12 h-12 rounded-full border shadow"
                    >
                    <div>
                        <a 
                            href="https://github.com/{{ $persona['github_user'] }}"
                            target="_blank"
                            class="text-blue-600 hover:underline text-lg font-medium"
                        >
                            {{ $persona['nombre'] }}
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
