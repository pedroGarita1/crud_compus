<?php

namespace App\Http\Controllers;

use App\Models\Computadoras as ModelsComputadoras;
use Illuminate\Http\Request;

class Computadoras extends Controller
{
    public function index(){
        $titulo = 'Inicio';
        $compus = ModelsComputadoras::all();
        return view('inicio', compact('titulo', 'compus'));
    }
    public function view_store (){
        $titulo = 'Registro';
        return view('registros', compact('titulo'));
    }
}
