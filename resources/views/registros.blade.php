@extends('layouts/main')
@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="text-content">Registro Computadoras</h1>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <hr>
                        <p class="card-text">
                            <form action="{{ route('store-computadoras') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control text-bg-negro @error('name_input') is-invalid @enderror" autocomplete="off" value="{{ old('name_input') }}" name="name_input" id="name_input" placeholder="Nombre de la computadora">
                                            <label for="name_input">Nombre de la computadora</label>
                                            @error('name_input')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control text-bg-negro @error('marca_input') is-invalid @enderror" autocomplete="off" value="{{ old('marca_input') }}" name="marca_input" id="marca_input" placeholder="Marca">
                                            <label for="marca_input">Marca</label>
                                            @error('marca_input')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control text-bg-negro @error('modelo_input') is-invalid @enderror" autocomplete="off" value="{{ old('modelo_input') }}" name="modelo_input" id="modelo_input" placeholder="Modelo">
                                            <label for="modelo_input">Modelo</label>
                                            @error('modelo_input')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control text-bg-negro @error('ram_input') is-invalid @enderror" autocomplete="off" value="{{ old('ram_input') }}" name="ram_input" id="ram_input" placeholder="ram">
                                            <label for="ram_input">RAM</label>
                                            @error('ram_input')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control text-bg-negro @error('procesador_input') is-invalid @enderror" autocomplete="off" value="{{ old('procesador_input') }}" name="procesador_input" id="procesador_input" placeholder="procesador">
                                            <label for="procesador_input">Procesador</label>
                                            @error('procesador_input')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control text-bg-negro @error('disco_input') is-invalid @enderror" autocomplete="off" value="{{ old('disco_input') }}" name="disco_input" id="disco_input" placeholder="Disco duro">
                                            <label for="disco_input">Disco duro</label>
                                            @error('disco_input')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="com-md-12 mb-3">
                                        <div class="form-floating">
                                            <textarea class="form-control text-bg-negro @error('descripcion_input') is-invalid @enderror" autocomplete="off" placeholder="Descripcion" name="descripcion_input" id="descripcion_input">{{ old('descripcion_input') }}</textarea>
                                            <label for="descripcion_input">Descripcion</label>
                                            @error('descripcion_input')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="com-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control text-bg-negro"  name="imagen_input" id="imagen_input" autocomplete="off" value="{{ old('imagen_input') }}" placeholder="URL imagen">
                                            <label for="imagen_input">URL imagen</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center mt-3">
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-primary">Registrar</button>
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