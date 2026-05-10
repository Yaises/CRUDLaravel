<x-layout title="Editar contacto">
    <div class="max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Editar Contacto: {{ $contacto->nombre }}</h1>

        <form method="POST" action="{{ route('contactos.update', $contacto->id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="nombre" class="block font-semibold">Nombre:</label>
                <input type="text" name="nombre" id="nombre"
                       class="border p-2 w-full rounded"
                       value="{{ old('nombre', $contacto->nombre) }}">
                @error('nombre')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="apellidos" class="block font-semibold">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos"
                       class="border p-2 w-full rounded"
                       value="{{ old('apellidos', $contacto->apellidos) }}">
                @error('apellidos')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="direccion" class="block font-semibold">Dirección:</label>
                <input type="text" name="direccion" id="direccion"
                       class="border p-2 w-full rounded"
                       value="{{ old('direccion', $contacto->direccion) }}">
                @error('direccion')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="correo" class="block font-semibold">Correo:</label>
                <input type="email" name="correo" id="correo"
                       class="border p-2 w-full rounded"
                       value="{{ old('correo', $contacto->correo) }}">
                @error('correo')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="telefono" class="block font-semibold">Teléfono:</label>
                <input type="text" name="telefono" id="telefono"
                       class="border p-2 w-full rounded"
                       value="{{ old('telefono', $contacto->telefono) }}">
                @error('telefono')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-4">
                <button type="submit"
                        class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">
                    Actualizar Contacto
                </button>
                <a href="{{ route('contactos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-layout>
