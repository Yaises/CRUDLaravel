<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    // GET /servicios
    public function index(){
        $servicios = "Aquí todos los datos de mis servicios";
        return view('servicios.index', compact('servicios'));
    }
}
