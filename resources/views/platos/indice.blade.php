@extends('layouts/plantilla')
@section('title','Módulo Platos')

@section('page-principal')
<a href="/">Inicio</a>
@stop
@section('page-secondary','Módulo Plato')

@section('content')
        <div class="d-grid gap-5 w-1/3 vstack col-md-5 mx-auto mt-60 h-50 ">
            <a class="btn btn-primary btn-lg" href="{{route('platos.create')}}">Agregar Plato</a>
            <a class="btn btn-primary btn-lg" href="{{route('platos.index')}}">Visualizar Platos</a>
        </div>

@endsection
