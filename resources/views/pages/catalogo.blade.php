@extends('layouts.app')
@section('title', 'Catálogo')
@section('content')

<h1 class="text-3xl font-bold text-indigo-700 mb-6">Catálogo de Productos</h1>

@if(empty($productos))
    <div class="bg-yellow-50 border border-yellow-200 text-yellow-800 rounded-lg p-4">
        No se pudieron cargar los productos. Verifica que la API esté activa.
    </div>
@else
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($productos as $producto)
    @php
        // Imagen principal: acepta varios nombres de campo
        $imagen = $producto['imagen'] ?? $producto['image'] ?? $producto['imagen1'] ?? $producto['imagen_1'] ?? null;
        $nombre = $producto['nombre'] ?? $producto['name'] ?? 'Sin nombre';
        $descripcion = $producto['descripcion'] ?? $producto['description'] ?? '';
        $precio = $producto['precio'] ?? $producto['price'] ?? 0;
    @endphp
    <div class="bg-white rounded-xl shadow hover:shadow-md transition overflow-hidden flex flex-col">
        <img src="{{ $imagen ?? 'https://placehold.co/400x250?text=Sin+imagen' }}"
             alt="{{ $nombre }}"
             class="w-full h-48 object-cover">
        <div class="p-4 flex flex-col flex-1">
            <h2 class="font-bold text-lg text-gray-800 mb-1">{{ $nombre }}</h2>
            <p class="text-gray-500 text-sm mb-3 flex-1 line-clamp-2">{{ $descripcion }}</p>
            <div class="flex items-center justify-between mt-auto">
                <span class="text-indigo-600 font-bold text-lg">
                    ${{ number_format($precio, 2) }}
                </span>
                <a href="{{ route('detalle', $producto['id']) }}"
                   class="bg-indigo-600 text-white text-sm px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                    Ver detalle
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif

@endsection
