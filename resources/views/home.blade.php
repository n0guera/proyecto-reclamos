@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Bienvenidos a la página oficial de la <span class="text-[#C8A752]">Municipalidad de Narnia</span></h1>
    <p class="text-gray-300">Aquí podras encontrar algunos de los reclamos que puedes realizar.<br><br></p>
    <p class="text-gray-300">Recuerda que debes haber iniciado sesión para poder realizar un reclamo</p>
    <div class="grid gap-6 mt-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <img src="{{ asset('images/electrotecnia.jpg') }}" alt="Electrotecnia" class="w-full h-48 object-cover">
            <h3 class="text-xl font-semibold text-[#C8A752] mb-2">Electrotecnia</h3>
            <p class="text-white">Reportá fallas en luz, postes en mal estado o reposición de lámparas públicas.</p>
        </div>
        <div class="bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <img src="{{ asset('images/Gestion Ambiental.jpg') }}" alt="Gestion Ambiental" class="w-full h-48 object-cover">
            <h3 class="text-xl font-semibold text-[#C8A752] mb-2">Gestión Ambiental</h3>
            <p class="text-white">Informá sobre residuos biodegradables, microbasurales y trabajos de recolección en la vía pública.</p>
        </div>
        <div class="bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <img src="{{ asset('images/MdVP.jpg') }}" alt="MdVP" class="w-full h-48 object-cover">
            <h3 class="text-xl font-semibold text-[#C8A752] mb-2">Mantenimiento de la Vía Pública</h3>
            <p class="text-white">Enviá reclamos relacionados al estado de las calles de tu sector.</p>
        </div>
        <div class="bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <img src="{{ asset('images/pluvial.jpg') }}" alt="Infraestructura Pluvial" class="w-full h-48 object-cover">
            <h3 class="text-xl font-semibold text-[#C8A752] mb-2">Infraestructura Pluvial</h3>
            <p class="text-white">Solicitud de asistencia para trabajos de saneamiento en cloacas vecinales.</p>
        </div>
        <div class="bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <img src="{{ asset('images/Espacios Verdes.jpg') }}" alt="Espacios Verdes" class="w-full h-48 object-cover">
            <h3 class="text-xl font-semibold text-[#C8A752] mb-2">Espacios Verdes</h3>
            <p class="text-white">Informanos o solicitá de árboles que necesiten poda o sectores a desmalezar</p>
        </div>
        <div class="bg-gray-800 shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <img src="{{ asset('images/denuncias.png') }}" alt="Denuncias" class="w-full h-56 object-cover">
            <h3 class="text-xl font-semibold text-[#C8A752] mb-2">Consultas y Denuncias</h3>
            <p class="text-white">Realizá tu reclamo o denuncia sobre algun predio en infracción o cualquier violación a alguna ordenanza municipal</p>
        </div>
    </div>

@endsection
