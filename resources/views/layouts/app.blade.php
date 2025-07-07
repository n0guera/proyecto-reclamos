<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Municipalidad de Narnia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-900 text-white min-h-screen">

    <!-- Navbar -->
    <nav class="bg-gray-800 shadow w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20">
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ url('/') }}" class="text-white hover:text-[#C8A752] transition">Inicio</a>
                    <a href="{{ route('reclamos.create') }}" class="text-white hover:text-[#C8A752] transition">Reclamos</a>
                    <a href="{{ url('/sobre-nosotros') }}" class="text-white hover:text-[#C8A752] transition">Sobre Nosotros</a>
                    @guest
                        <a href="{{ route('login') }}" class="text-white hover:text-[#C8A752] transition">Iniciar sesión</a>
                    @endguest

                    @auth
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-white hover:text-[#C8A752] transition bg-transparent border-0 cursor-pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    @endauth

                    @guest
                        <a href="{{ route('register') }}" class="text-white hover:text-[#C8A752] transition">Registrarse</a>
                    @endguest

                    @auth
                        @if(auth()->check() && auth()->user()->is_admin)
                            <a href="{{ route('admin.reclamos.index') }}" class="text-white hover:text-[#C8A752]">Panel</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <main class="py-8 px-4 max-w-5xl mx-auto">
        @yield('content')
    </main>
    <footer class="bg-gray-900 text-gray-300 mt-12">
        <div class="max-w-7xl mx-auto px-6 py-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-semibold text-[#C8A752] mb-2">Municipalidad de Narnia</h4>
                <p class="text-sm">Comprometidos con una gestión transparente y cercana.</p>
            </div>

            <div>
                <h4 class="text-lg font-semibold text-[#C8A752] mb-2">Contacto</h4>
                <p class="text-sm">Tel: 3704-001122</p>
                <p class="text-sm">Email: aslan@narnia.gov.ar</p>
            </div>

            <div>
                <h4 class="text-lg font-semibold text-[#C8A752] mb-2">Redes sociales</h4>
                <div class="flex space-x-4 mt-2">
                    <a href="https://facebook.com" target="_blank" class="hover:text-[#C8A752] transition">
                        {{-- Ícono de Facebook --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12.07C22 6.5 17.52 2 12 2S2 6.5 2 12.07c0 5.02 3.66 9.17 8.44 9.87v-6.99h-2.54v-2.88h2.54v-2.2c0-2.5 1.5-3.88 3.8-3.88 1.1 0 2.24.2 2.24.2v2.48h-1.26c-1.24 0-1.63.77-1.63 1.56v1.84h2.78l-.44 2.88h-2.34v6.99C18.34 21.24 22 17.09 22 12.07Z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="hover:text-[#C8A752] transition">
                        {{-- Ícono de Twitter (X) --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.43.36a9.1 9.1 0 0 1-2.88 1.1A4.52 4.52 0 0 0 16.11 0c-2.5 0-4.51 2.09-4.51 4.67 0 .37.04.73.11 1.07A12.9 12.9 0 0 1 3.1 1.63 4.69 4.69 0 0 0 2.91 4c0 1.61.79 3.03 2 3.86a4.47 4.47 0 0 1-2-.57v.06c0 2.26 1.53 4.15 3.54 4.57a4.62 4.62 0 0 1-2 .08 4.54 4.54 0 0 0 4.23 3.2A9.06 9.06 0 0 1 2 19.54 12.84 12.84 0 0 0 9.29 22c8.92 0 13.8-7.72 13.8-14.42 0-.22-.01-.44-.02-.66A9.94 9.94 0 0 0 23 3Z"/>
                        </svg>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="hover:text-[#C8A752] transition">
                        {{-- Ícono de Instagram --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5A4.25 4.25 0 0 0 20.5 16.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5Zm8.62 2.38a1.12 1.12 0 1 1 0 2.25 1.12 1.12 0 0 1 0-2.25Zm-4.87 1.62a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm0 1.5a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 text-center py-4 text-xs text-gray-500">
            © {{ date('Y') }} Municipalidad de Narnia — Todos los derechos reservados.
        </div>
    </footer>
    @livewireStyles
</body>
</html>
