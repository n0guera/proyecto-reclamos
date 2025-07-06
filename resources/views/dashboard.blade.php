@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Bienvenido {{ auth()->user()->nombre }}</h1>
    <p class="text-gray-700">Este es tu panel de usuario.</p>
@endsection