<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Tienda')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-indigo-700 text-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="{{ route('inicio') }}" class="text-2xl font-bold tracking-tight">
                Mi Tienda
            </a>
            <nav class="flex gap-6 text-sm font-medium">
                <a href="{{ route('inicio') }}"
                   class="transition {{ request()->routeIs('inicio') ? 'text-white underline underline-offset-4' : 'text-indigo-200 hover:text-white' }}">
                    Inicio
                </a>
                <a href="{{ route('nosotros') }}"
                   class="transition {{ request()->routeIs('nosotros') ? 'text-white underline underline-offset-4' : 'text-indigo-200 hover:text-white' }}">
                    Nosotros
                </a>
                <a href="{{ route('catalogo') }}"
                   class="transition {{ request()->routeIs('catalogo') || request()->routeIs('detalle') ? 'text-white underline underline-offset-4' : 'text-indigo-200 hover:text-white' }}">
                    Catálogo
                </a>
                <a href="{{ route('contacto') }}"
                   class="transition {{ request()->routeIs('contacto') ? 'text-white underline underline-offset-4' : 'text-indigo-200 hover:text-white' }}">
                    Contacto
                </a>
            </nav>
        </div>
    </header>

    <!-- Contenido -->
    <main class="flex-1 max-w-6xl mx-auto px-4 py-8 w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 text-center text-sm py-4">
        &copy; {{ date('Y') }} Mi Tienda &mdash; Todos los derechos reservados
    </footer>

</body>
</html>
