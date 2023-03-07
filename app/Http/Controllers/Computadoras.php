<?php

namespace App\Http\Controllers;

use App\Models\Computadoras as ModelsComputadoras;
use App\http\Controllers\Validaciones;
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
    public function store (Request $request){
        $compus = new ModelsComputadoras;
        $validacion = new Validaciones;
        $validacion->validate_form($request);
        $compus->nombre = $request->name_input;
        $compus->marca = $request->marca_input;
        $compus->modelo = $request->modelo_input;
        $compus->ram = $request->ram_input;
        $compus->procesador = $request->procesador_input;
        $compus->discoduro = $request->disco_input;
        $compus->descripcion = $request->descripcion_input;
        if(isset($request->imagen_input))
        $compus->url_image = $request->imagen_input;
        else
        $compus->url_image = 'Sin URL';
        $compus->save();
        return redirect()->route('view-inicio');
    }
    public function edit ($id){
        $compus = ModelsComputadoras::where('id', $id)->first();
        $titulo = 'Editar -' . $compus->nombre;
        return view('editar', compact('compus', 'titulo'));
    }
    public function show ($id){
        $compus = ModelsComputadoras::where('id', $id)->first();
        $titulo = 'Eliminar -' . $compus->nombre;
        return view('eliminar', compact('compus','titulo'));
    }
    public function update (Request $request, $id){
        $compus = ModelsComputadoras::where('id', $id)->first();
        $validacion = new Validaciones;
        $validacion->validate_form($request);
        $compus->nombre = $request->name_input;
        $compus->marca = $request->marca_input;
        $compus->modelo = $request->modelo_input;
        $compus->ram = $request->ram_input;
        $compus->procesador = $request->procesador_input;
        $compus->discoduro = $request->disco_input;
        $compus->descripcion = $request->descripcion_input;
        if(isset($request->imagen_input))
        $compus->url_image = $request->imagen_input;
        else
        $compus->url_image = 'Sin URL';
        $compus->save();
        return redirect()->route('view-inicio');
    }
    public function destroy ($id){
        $compus = ModelsComputadoras::where('id',$id)->first();
        $compus->delete();
        return redirect()->route('view-inicio');
    }
}
