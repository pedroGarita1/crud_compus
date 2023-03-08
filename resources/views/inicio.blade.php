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
            <div class="col-md-12 text-center">
                <h1 class="text-content-1">Listado de computadoras</h1>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            <table id="myTable" class="table table-condensed table-responsive table-negro" width="100%">
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
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compus as $item)
                                    <tr>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->marca }}</td>
                                        <td>{{ $item->modelo }}</td>
                                        <td>{{ $item->ram }} GB</td>
                                        <td>{{ $item->procesador }}</td>
                                        <td>{{ $item->discoduro }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        @if ($item->url_image == 'Sin URL')
                                        <td>{{ $item->url_image }}</td>
                                        @else
                                        <td><img src="{{ $item->url_image }}" class="img-thumbnail img-fluid" style="width: 100px;" alt="..."></td>
                                        @endif
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('view-edit', ['id'=>$item->id]) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('view-delete', ['id'=>$item->id]) }}" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a>
                                            </div>
                                        </td>
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