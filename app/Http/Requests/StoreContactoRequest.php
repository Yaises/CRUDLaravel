<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // $this->user() !== null; // Solo usuarios autenticados
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // nombre: obligatorio, texto, 2-50 caracteres
            'nombre' => 'required|string|min:2|max:50',

            // apellidos: obligatorio, texto, 2-100 caracteres
            'apellidos' => 'required|string|min:2|max:100',

            // direccion: opcional, texto máximo 255 caracteres
            'direccion' => 'nullable|string|max:255',

            // correo: obligatorio, formato válido, único en la tabla contactos
            'correo' => 'required|email|unique:contactos,correo',

            // telefono: obligatorio, solo números y símbolos, 9-20 caracteres
            'telefono' => 'required|regex:/^[0-9+\-\s()]+$/|min:9|max:20',
        ];
    }

    /**
     * Mensajes de error personalizados
     */
    public function messages(): array
    {
        return [
            'correo.unique' => 'Este correo ya está registrado.',
            'telefono.regex' => 'El teléfono contiene caracteres inválidos.',
            'nombre.required' => 'El nombre es obligatorio.',
        ];
    }
}
