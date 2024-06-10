@extends('layouts/plantilla')
@section('title','Visualizar Menus')

@section('page-principal')
<a href="{{route('menus.indice')}}">Módulo Menú</a>
@stop
@section('page-secondary','Visualizar Menus')

@section('content')
    @if (session('success-create')){
        <div class="alert alert-primary text-center">
            {{ session('success-create') }}
        </div>
    }
    @elseif (session('success-update')){
        <div class="alert alert-success text-center">
            {{ session('success-update') }}
        </div>
    }
    @elseif (session('success-delete')){
        <div class="alert alert-danger text-center">
            {{ session('success-delete') }}
        </div>
    }
    @endif

    <div class="card-body pl-10 pr-10">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Menú</th>
                    <th>Fecha Creación</th>
                    <th class="text-center" colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                <tr>
                    <td>{{$menu->id}}</td>
                    <td>{{$menu->name}}</td>
                    <td>{{$menu->created_at}}</td>
                    <td width="2px">
                        <a href="{{route('menus.show',$menu)}}" class="btn btn-primary btn-sm mb-2">Mostrar</a>
                    </td>
                    <td width="2px">
                        <a href="{{route('menus.edit',$menu)}}" class="btn btn-primary btn-sm mb-2">Editar</a>
                    </td>
                    <td width="2px">
                        <form action="{{route('menus.destroy',$menu)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm mb-2">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

