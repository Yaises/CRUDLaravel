<?php

namespace App\Models;

// Tienes que quitar las "//" de la siguiente línea:
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'direccion',
        'correo',
        'telefono',
    ];
}
