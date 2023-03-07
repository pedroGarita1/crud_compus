<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validaciones extends Controller
{
    public function validate_form($datos){
        $datos->validate(
            [
            'name_input' => 'required',
            'marca_input' => 'required',
            'modelo_input' => 'required',
            'ram_input' => 'required | numeric',
            'procesador_input' => 'required',
            'disco_input' => 'required',
            'descripcion_input' => 'required'
            ],
            [
                'name_input.required' => 'Se requiere el campo nombre',
                'marca_input.required' => 'Se requiere el campo marca',
                'modelo_input.required' => 'Se requiere el campo modelo',
                'ram_input.required' => 'Se requiere el campo ram',
                'ram_input.numeric' => 'Se require el campo ram de forma numerica',
                'procesador_input.required' => 'Se requiere el campo procesador',
                'disco_input.required' => 'Se requiere el campo disco duro',
                'descripcion_input.required' => 'Se require el campo descripcion' 
            ]
        );
    }
}
