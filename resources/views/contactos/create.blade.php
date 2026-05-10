<x-layout title="Añadir un contacto">
    <div class="max-w-xl mx-auto">
        <form method="POST" action="{{ route('contactos.store') }}" class="space-y-4">
            @csrf

            <div>
                <label for="nombre" class="block font-semibold">Nombre:</label>
                <input type="text" name="nombre" id="nombre"
                       class="border p-2 w-full rounded"
                       value="{{ old('nombre') }}">
                @error('nombre')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="apellidos" class="block font-semibold">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos"
                       class="border p-2 w-full rounded"
                       value="{{ old('apellidos') }}">
                @error('apellidos')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="direccion" class="block font-semibold">Dirección:</label>
                <input type="text" name="direccion" id="direccion"
                       class="border p-2 w-full rounded"
                       value="{{ old('direccion') }}">
                @error('direccion')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="correo" class="block font-semibold">Correo:</label>
                <input type="email" name="correo" id="correo"
                       class="border p-2 w-full rounded"
                       value="{{ old('correo') }}">
                @error('correo')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="telefono" class="block font-semibold">Teléfono:</label>
                <input type="text" name="telefono" id="telefono"
                       class="border p-2 w-full rounded"
                       value="{{ old('telefono') }}">
                @error('telefono')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Añadir
            </button>
        </form>
    </div>
</x-layout>
