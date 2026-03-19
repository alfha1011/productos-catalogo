@extends('layouts.app')
@section('title', 'Nosotros')
@section('content')

<h1 class="text-3xl font-bold text-indigo-700 mb-6">Sobre Nosotros</h1>

<div class="bg-white rounded-xl shadow p-6 mb-6">
    <p class="text-gray-600 leading-relaxed max-w-2xl mb-4">
        Somos una empresa dedicada a ofrecer productos de calidad a nuestros clientes. Nuestra misión es
        brindar la mejor experiencia de compra con precios accesibles y atención personalizada.
    </p>
    <p class="text-gray-600 leading-relaxed max-w-2xl">
        Desde nuestros inicios, hemos trabajado para construir relaciones de confianza con nuestros clientes,
        ofreciendo siempre productos cuidadosamente seleccionados y un servicio de excelencia.
    </p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
    <div class="bg-indigo-50 rounded-xl p-5 text-center">
        <div class="text-3xl font-bold text-indigo-700 mb-1">+500</div>
        <p class="text-gray-600 text-sm">Productos disponibles</p>
    </div>
    <div class="bg-indigo-50 rounded-xl p-5 text-center">
        <div class="text-3xl font-bold text-indigo-700 mb-1">+1,000</div>
        <p class="text-gray-600 text-sm">Clientes satisfechos</p>
    </div>
    <div class="bg-indigo-50 rounded-xl p-5 text-center">
        <div class="text-3xl font-bold text-indigo-700 mb-1">5 años</div>
        <p class="text-gray-600 text-sm">De experiencia en el mercado</p>
    </div>
</div>

@endsection
