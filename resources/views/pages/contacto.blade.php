@extends('layouts.app')
@section('title', 'Contacto')
@section('content')

<h1 class="text-3xl font-bold text-indigo-700 mb-6">Contacto</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

    {{-- Información de contacto --}}
    <div class="bg-white rounded-xl shadow p-6 space-y-4">
        <h2 class="text-xl font-semibold text-gray-700 mb-2">Informacion de Contacto</h2>
        <div class="text-gray-600">
            <p class="font-medium text-gray-800">Correo electronico</p>
            <p>contacto@mitienda.com</p>
        </div>
        <div class="text-gray-600">
            <p class="font-medium text-gray-800">Telefono</p>
            <p>+52 (33) 1234-5678</p>
        </div>
        <div class="text-gray-600">
            <p class="font-medium text-gray-800">Direccion</p>
            <p>Guadalajara, Jalisco, Mexico</p>
        </div>
        <div class="text-gray-600">
            <p class="font-medium text-gray-800">Horario</p>
            <p>Lunes a Viernes, 9:00 - 18:00</p>
        </div>
    </div>

    {{-- Formulario de contacto (visual, sin backend) --}}
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Envianos un Mensaje</h2>
        <form class="space-y-4" onsubmit="event.preventDefault(); alert('Mensaje enviado. Gracias!');">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" placeholder="Tu nombre"
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Correo electronico</label>
                <input type="email" placeholder="correo@ejemplo.com"
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
                <textarea rows="4" placeholder="Escribe tu mensaje aqui..."
                          class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>
            <button type="submit"
                    class="w-full bg-indigo-600 text-white py-2 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Enviar Mensaje
            </button>
        </form>
    </div>

</div>
@endsection
