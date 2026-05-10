<x-layout title="Detalles del contacto">
    <div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Detalles de {{ $contacto->nombre }}</h1>

        <div class="space-y-2">
            <p><strong>Apellidos:</strong> {{ $contacto->apellidos }}</p>
            <p><strong>Correo:</strong> {{ $contacto->correo }}</p>
            <p><strong>Teléfono:</strong> {{ $contacto->telefono }}</p>
            <p><strong>Dirección:</strong> {{ $contacto->direccion ?? 'No especificada' }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('contactos.index') }}" class="text-blue-600 hover:underline">
                Volver al listado
            </a>
        </div>
    </div>
</x-layout>
