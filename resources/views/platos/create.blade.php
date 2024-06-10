@extends('layouts/plantilla')

@section('page-principal')
<a href="{{route('platos.indice')}}">Módulo Plato</a>
@stop
@section('page-secondary','Agregar Platos')

@section('content')
    <div class="card w-1/2 text-center mx-auto mt-40">
        <div class="card-header">
            <h1 class="text-gray-600"><b>Registra un Nuevo Plato!! <span>⬇️</span></b></h1>
        </div>
        <div class="card-body ">
            <form class="form-floating" method="POST" action="{{route('platos.store')}}">
            @csrf
            <input type="text" class="form-control is-invalid" id="name" name="name" value="{{old('name')}}">
            <label for="name">Nombre Plato</label>

            <div class="text-center mt-3">
                    <input type="submit" value="Crear Plato" class="btn btn-primary">
                    <a href="{{route('platos.indice')}}" class="btn btn-secondary">Cancelar</a>
            </div>

            </form>
        </div>
    </div>
@endsection
