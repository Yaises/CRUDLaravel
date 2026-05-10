<x-layout title="Listado de Contactos">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Mis Contactos</h1>

        <a href="{{ route('contactos.create') }}"
           class="inline-block mb-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Nuevo Contacto
        </a>

        <table class="w-full border-collapse bg-white shadow rounded">
            <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-2">Nombre</th>
                <th class="p-2">Apellidos</th>
                <th class="p-2">Dirección</th>
                <th class="p-2">Correo</th>
                <th class="p-2">Teléfono</th>
                <th class="p-2">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contactos as $contacto)
                <tr class="border-b">
                    <td class="p-2">{{ $contacto->nombre }}</td>
                    <td class="p-2">{{ $contacto->apellidos }}</td>
                    <td class="p-2">{{ $contacto->direccion }}</td>
                    <td class="p-2">{{ $contacto->correo }}</td>
                    <td class="p-2">{{ $contacto->telefono }}</td>
                    <td class="p-2 space-x-2">
                        <a href="{{ route('contactos.show', $contacto->id) }}" class="text-blue-600 hover:underline">Ver</a>
                        <a href="{{ route('contactos.edit', $contacto->id) }}" class="text-yellow-600 hover:underline">Editar</a>

                        <form action="{{ route('contactos.destroy', $contacto->id) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar contacto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $contactos->links() }}
        </div>
    </div>
</x-layout>
