@extends('layouts.app')
@section('title', 'Inicio')
@section('content')

{{-- Hero --}}
<div class="text-center py-16">
    <h1 class="text-4xl font-bold text-indigo-700 mb-4">Bienvenido a Mi Tienda</h1>
    <p class="text-lg text-gray-600 mb-8 max-w-xl mx-auto">
        Encuentra los mejores productos al mejor precio. Calidad garantizada en cada compra.
    </p>
    <a href="{{ route('catalogo') }}"
       class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition text-lg">
        Ver Catalogo
    </a>
</div>

{{-- Características --}}
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-8">
    <div class="bg-white rounded-xl shadow p-6 text-center">
        <h3 class="font-bold text-gray-800 mb-1">Envio Rapido</h3>
        <p class="text-gray-500 text-sm">Recibe tu pedido en la puerta de tu casa en tiempo record.</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6 text-center">
        <h3 class="font-bold text-gray-800 mb-1">Calidad Garantizada</h3>
        <p class="text-gray-500 text-sm">Todos nuestros productos pasan por un estricto control de calidad.</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6 text-center">
        <h3 class="font-bold text-gray-800 mb-1">Mejores Precios</h3>
        <p class="text-gray-500 text-sm">Precios competitivos y promociones exclusivas para nuestros clientes.</p>
    </div>
</div>

@endsection
