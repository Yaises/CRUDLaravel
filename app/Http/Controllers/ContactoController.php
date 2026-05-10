<?php

namespace App\Http\Controllers;

use App\Models\Contacto; // IMPORTANTE: Para que funcione el conteo y la lista
use App\Http\Requests\StoreContactoRequest;
use App\Actions\CreateContactoAction;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $conteo = Contacto::count();
        $contactos = Contacto::paginate(10);
        return view('contactos.lista', compact('contactos', 'conteo'));
    }

    public function create()
    {
        return view('contactos.create');
    }

    public function store(StoreContactoRequest $request, CreateContactoAction $action)
    {
        $action->execute($request->validated());
        return to_route('contactos.index')->with('success', 'Contacto creado con éxito');
    }

    public function show(Contacto $contacto)
    {
        // Muestra un contacto específico
        return view('contactos.show', compact('contacto'));
    }

    public function edit(Contacto $contacto)
    {
        // Muestra el formulario para editar
        return view('contactos.edit', compact('contacto'));
    }

    public function update(Request $request, Contacto $contacto)
    {
        // Valida y actualiza los datos
        $data = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'nullable'
        ]);

        $contacto->update($data);
        return to_route('contactos.index')->with('success', 'Contacto actualizado');
    }

    public function destroy(Contacto $contacto) {
        $contacto->delete();
        return back()->with('success', 'Eliminado correctamente');
    }
}
