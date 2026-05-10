<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios',[ServicioController::class,'index']);

// HEMOS QUITADO EL MIDDLEWARE PARA QUE PUEDAS ENTRAR LIBREMENTE
// Crear todas las rutas del CRUD automáticamente
Route::resource('contactos', ContactoController::class);

// Rutas adicionales para borrado permanente y restauración
Route::delete('contactos/{id}/force', [ContactoController::class, 'forceDelete'])
    ->name('contactos.force-delete');

Route::patch('contactos/{id}/restore', [ContactoController::class, 'restore'])
    ->name('contactos.restore');
