<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Gestión de Reclamos' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="bg-gray-50 antialiased">

<header class="bg-gray-800 text-white p-4 flex justify-between items-center">
    <div>
        <h1 class="text-xl font-bold">Municipalidad de Narnia</h1>
    </div>
    <div>
        @auth
            <span>Bienvenido, {{ auth()->user()->nombre }}</span>
        @else
            <span>Invitado</span>
        @endauth
    </div>
</header>

<div class="min-h-screen flex flex-col md:flex-row">
    @auth
    <aside class="w-64 bg-white shadow-lg hidden md:block">
        <div class="p-6">
            <h2 class="text-xl font-bold mb-6">Gestión Reclamos</h2>
            <nav class="flex flex-col space-y-3">
                <a href="{{ route('reclamos.create') }}" class="text-blue-600 hover:underline">📝 Crear Reclamo</a>
                <a href="{{ route('mi-cuenta') }}" class="text-blue-600 hover:underline">👤 Mi Cuenta</a>
                <a href="{{ route('sobre-nosotros') }}" class="text-blue-600 hover:underline">ℹ️ Sobre Nosotros</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-red-600 hover:underline mt-4 text-left">🚪 Cerrar sesión</button>
                </form>
            </nav>
        </div>
    </aside>
    @endauth

    <main class="flex-1">
        @auth
        <header class="bg-white shadow-sm md:hidden">
            <!-- Header móvil opcional -->
        </header>
        @endauth

        <div class="@auth p-4 md:p-8 @else min-h-screen flex items-center justify-center @endauth">
            @yield('content')
        </div>
    </main>
</div>

@livewireScripts
</body>
</html>
