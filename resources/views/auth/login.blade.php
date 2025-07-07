@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto mt-10 space-y-4">
    @csrf
    <h2 class="text-2xl font-bold">Iniciar Sesión</h2>
    <input type="email" name="email" placeholder="Email" class="bg-gray-800 w-full p-2 rounded" required>
    <input type="password" name="password" placeholder="Contraseña" class="bg-gray-800 w-full p-2 rounded" required>
    <button type="submit" class="text-white px-4 py-2 rounded" style="background-color: #bd8b0b;">
        Ingresar
    </button>
</form>
@endsection
