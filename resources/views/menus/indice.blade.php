@extends('layouts/plantilla')
@section('title','Módulo Menus')

@section('page-principal')
<a href="/">Inicio</a>
@stop
@section('page-secondary','Módulo Menú')

@section('content')
        <div class="d-grid gap-5 w-1/3 vstack col-md-5 mx-auto mt-60 h-50 ">
            <a class="btn btn-primary btn-lg" href="{{route('menus.create')}}">Crear Menú</a>
            <a class="btn btn-primary btn-lg" href="{{route('menus.index')}}">Visualizar Menú</a>
        </div>

@endsection
