@extends('layouts/main')
@section('contenido')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-content-3">Eliminar Registro</h1>
            </div>
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                <table id="myTable" class="table table-hover table-condensed table-responsive table-negro" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">RAM</th>
                                            <th scope="col">Procesador</th>
                                            <th scope="col">Disco Duro</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">URL de imagen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $compus->nombre }}</td>
                                            <td>{{ $compus->marca }}</td>
                                            <td>{{ $compus->modelo }}</td>
                                            <td>{{ $compus->ram }} GB</td>
                                            <td>{{ $compus->procesador }}</td>
                                            <td>{{ $compus->discoduro }}</td>
                                            <td>{{ $compus->descripcion }}</td>
                                            @if ( $compus->url_image == 'Sin URL' )
                                            <td>{{ $compus->url_image }}</td>
                                            @else
                                            <td><img src="{{ $compus->url_image }}" class="img-thumbnail img-fluid" style="width: 100px;" alt="..."></td>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="{{ route('destroy-computadora', ['id'=>$compus->id]) }}" method="post">
                                    <div class="d-grid gap-2 d-md-block text-center">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Eliminar</button>
                                        <a href="{{ route('view-inicio') }}" class="btn btn-secondary">Cancelar</a>
                                    </div>
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection