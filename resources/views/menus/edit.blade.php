@extends('layouts/plantilla')

@section('page-principal')
<a href="{{route('menus.indice')}}">Módulo Menú</a>
@stop
@section('page-secondary','Editar Menus')

@section('content')
    <div class="card w-1/2 text-center mx-auto mt-40">
        <div class="card-header">
            <h1 class="text-gray-600"><b>Modifica el siguiente Menú!! <span>⬇️</span></b></h1>
        </div>
        <div class="card-body ">
            <form class="form-floating" method="POST" action="{{route('menus.update',$menu)}}">
            @csrf
            @method('PUT')
            <input type="text" class="form-control is-invalid" id="name" name="name" value="{{$menu->name}}">
            <label for="name">Nombre Menú</label>

            <div class="form-group row mt-2">
                <div class="mt-1"><span class="text-2xl">-----🍽️</span><b>PLATOS</b><span class="text-2xl">🍽️-----</span></div>
                <div class="col-sm-12 mt-2">
                    <select name="platos[]" id="platos" class="form-control js-example-basic-multiple" multiple="multiple">
                        @foreach ($platos as $plato)
                            <option value="{{$plato->id}}" {{ in_array($plato->id, old('platos', [])) ? 'selected' : '' }}>{{$plato->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center mt-3">
                    <input type="submit" value="Modificar Menú" class="btn btn-primary">
                    <a href="{{route('menus.index')}}" class="btn btn-secondary">Cancelar</a>
            </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(()=>{});
        $('#platos').val( @json($ids_platos));
    </script>
    <script>
        $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            theme:"classic"
        });
        });
    </script>

@stop
