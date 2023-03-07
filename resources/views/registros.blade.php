@extends('layouts/main')
@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registro de computadoras</h5>
                        <hr>
                        <p class="card-text">
                            <form action="{{ route('store-computadoras') }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="name_input" placeholder="Nombre de la computadora">
                                            <label for="name_input">Nombre de la computadora</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="marca_input" placeholder="Marca">
                                            <label for="marca_input">Marca</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="modelo_input" placeholder="Modelo">
                                            <label for="modelo_input">Modelo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="ram_input" placeholder="ram">
                                            <label for="ram_input">RAM</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="procesador_input" placeholder="procesador">
                                            <label for="procesador_input">Procesador</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="disco_input" placeholder="Disco duro">
                                            <label for="disco_input">Disco duro</label>
                                        </div>
                                        
                                    </div>
                                    <div class="com-md-12 mb-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Descripcion" id="descripcion_input"></textarea>
                                            <label for="descripcion_input">Descripcion</label>
                                        </div>
                                    </div>
                                    <div class="com-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="imagen_input" placeholder="URL imagen">
                                            <label for="imagen_input">URL imagen</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center mt-3">
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-primary" type="button">Registrar</button>
                                            <a href="{{ route('view-inicio') }}" class="btn btn-secondary">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection