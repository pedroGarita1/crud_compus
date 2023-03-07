@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="com-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text text-center"><a href="{{ route('view-registro') }}" class="btn btn-primary">Registrar Computadoras</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center fs-3">Lista de Computadoras</h5>
                        <p class="card-text">
                            <table class="table table-hover table-condensed table-responsive table-dark">
                                <thead>
                                    <tr>
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
                                    @foreach ($compus as $item)
                                    <tr>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->marca }}</td>
                                        <td>{{ $item->modelo }}</td>
                                        <td>{{ $item->ram }}</td>
                                        <td>{{ $item->procesador }}</td>
                                        <td>{{ $item->discoduro }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td>{{ $item->url_image }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection