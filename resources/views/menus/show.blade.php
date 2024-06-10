@extends('layouts/plantilla')
@section('title','Ver PLatos')

@section('page-principal')
<a href="{{route('menus.indice')}}">Módulo Menú</a>
@stop
@section('page-secondary','Ver Menú')

@section('content')
    @if (session('success-create'))
        <div class="alert alert-primary text-center">
            {{ session('success-create') }}
        </div>
    @endif
    <div class="card-body pl-10 pr-10">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Menú</th>
                    <th>Platos</th>
                    <th>Fecha Creación</th>
                    <th>Lista</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$menu->id}}</td>
                    <td>{{$menu->name}}</td>
                    <td>
                    @foreach ($platos as $plato)
                        {{$plato->name}}
                        @if (!$loop->last){{', '}} @endif
                    @endforeach
                    </td>
                    <td>{{$menu->created_at}}</td>
                    <td>
                        <button type="button" class="no-border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Mostrar Lista
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{route('menus.index')}}" class="btn btn-secondary">Volver</a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Lista de platos del menú</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Día</th>
                                    <th>Plato</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 6; $i++)
                                    <tr>
                                        <td>{{$diasSemana[$i]}}</td>
                                        <td>
                                            <select name="Platos">
                                            @foreach ($platos as $plato)
                                                <option value="{{$plato->id}}">{{$plato->name}}</option>
                                            @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

