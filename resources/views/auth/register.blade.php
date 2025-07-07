@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto mt-10 space-y-4">
    @csrf
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2 class="text-2xl font-bold">Registrarse</h2>
    <input type="text" name="name" placeholder="Apellido y Nombre" class="bg-gray-800 w-full order p-2 rounded" required>
    <input type="email" name="email" placeholder="Email" class="bg-gray-800 w-full p-2 rounded" required>
    <input type="text" name="dni" placeholder="DNI" class="bg-gray-800 w-full p-2 rounded" required>
    <input type="text" name="domicilio" placeholder="Domicilio" class="bg-gray-800 w-full p-2 rounded" required>
    <input type="text" name="telefono" placeholder="Teléfono (opcional)" class="bg-gray-800 w-full p-2 rounded">
    <input type="password" name="password" placeholder="Contraseña (mínimo 6 carácteres)" class="bg-gray-800 w-full p-2 rounded" required>
    <input type="password" name="password_confirmation" placeholder="Repetir contraseña" class="bg-gray-800 w-full p-2 rounded" required>
    <button type="submit" class="text-white px-4 py-2 rounded" style="background-color: #bd8b0b;">
        Crear cuenta
    </button>
</form>
@endsection
