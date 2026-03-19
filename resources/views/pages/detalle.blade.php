@extends('layouts.app')
@section('title', $producto['nombre'] ?? $producto['name'] ?? 'Detalle')
@section('content')

<a href="{{ route('catalogo') }}" class="text-indigo-600 hover:underline text-sm mb-6 inline-block">
    &larr; Volver al catálogo
</a>

@php
    $nombre     = $producto['nombre']     ?? $producto['name']        ?? 'Sin nombre';
    $descripcion= $producto['descripcion']?? $producto['description'] ?? '';
    $precio     = $producto['precio']     ?? $producto['price']       ?? 0;
    $existencia = $producto['existencia'] ?? $producto['stock']       ?? $producto['quantity'] ?? 'N/D';

    // Recolectar las 3 imágenes aceptando distintos nombres de campo
    $imagenes = [];
    foreach (['imagen1','imagen_1','imagen2','imagen_2','imagen3','imagen_3'] as $campo) {
        if (!empty($producto[$campo])) {
            $imagenes[] = $producto[$campo];
        }
    }
    // También soporta campo 'images' como arreglo
    if (empty($imagenes) && !empty($producto['images']) && is_array($producto['images'])) {
        $imagenes = array_slice($producto['images'], 0, 3);
    }
    // Si aún no hay imágenes, usar imagen principal
    if (empty($imagenes)) {
        $principal = $producto['imagen'] ?? $producto['image'] ?? $producto['imagen1'] ?? null;
        if ($principal) $imagenes[] = $principal;
    }
    $imagenes = array_unique(array_values($imagenes));
    $imagenes = array_slice($imagenes, 0, 3);
@endphp

<div class="bg-white rounded-xl shadow p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $nombre }}</h1>
    <p class="text-gray-500 mb-4 leading-relaxed">{{ $descripcion }}</p>

    <div class="flex flex-wrap gap-6 items-center mb-6">
        <span class="text-indigo-600 font-bold text-2xl">
            ${{ number_format($precio, 2) }}
        </span>
        <span class="text-gray-500">
            Existencia: <strong class="text-gray-800">{{ $existencia }}</strong>
        </span>
    </div>

    <!-- 3 imágenes del producto -->
    <h2 class="text-xl font-semibold text-gray-700 mb-3">Imágenes del producto</h2>
    @if(!empty($imagenes))
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            @foreach($imagenes as $img)
            <img src="{{ $img }}"
                 alt="Imagen de {{ $nombre }}"
                 class="w-full h-56 object-cover rounded-lg shadow">
            @endforeach
        </div>
    @else
        <p class="text-gray-400 text-sm">No hay imágenes disponibles para este producto.</p>
    @endif
</div>

@endsection
