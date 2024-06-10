@extends('layouts/plantilla')
@section('title', 'Visualizar Platos')

@section('page-principal')
<a href="{{ route('platos.indice') }}">Módulo Plato</a>
@stop
@section('page-secondary', 'Visualizar Platos')

@section('content')
    @if (session('success-create'))
        <div class="alert alert-primary text-center">
            {{ session('success-create') }}
        </div>
    @elseif (session('success-update'))
        <div class="alert alert-success text-center">
            {{ session('success-update') }}
        </div>
    @elseif (session('success-delete'))
        <div class="alert alert-danger text-center">
            {{ session('success-delete') }}
        </div>
    @endif

    <div class="card-header container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 pl-10">
                <a href="{{ route('platos.create') }}" class="btn btn-primary">Nuevo Plato</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form action="{{ route('platos.index') }}" method="GET">
                    <div class="mb-3 row">
                        <div class="col-sm-9">
                            <input type="text" name="filterValue" placeholder="Buscar por nombre de plato"
                                class="form-control rounded border">
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-info"><b>Buscar</b></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card-body">
            <div class="card-body pl-10 pr-10">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Plato</th>
                            <th class="text-center" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($platos as $plato)
                            <tr>
                                <td>{{ $plato->id }}</td>
                                <td>{{ $plato->name }}</td>
                                <td width="5px">
                                    <a href="{{ route('platos.edit', $plato) }}"
                                        class="btn btn-primary btn-sm mb-2">Editar</a>
                                </td>
                                <td width="5px">
                                    <form action="{{ route('platos.destroy', $plato) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar" class="btn btn-danger btn-sm mb-2">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="m-0 row justify-content-center">
                    <nav class="pagination col-auto text-center">
                        {{$platos->appends(['filterValue'=>$filterValue])->links()}}
                    </nav>
                </div>
            </div>
        </div>

    @endsection
