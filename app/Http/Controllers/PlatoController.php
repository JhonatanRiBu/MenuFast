<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlatoRequest;
use App\Models\Plato;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PlatoController extends Controller
{
    public function index(Request $request){
        $filterValue = $request->input('filterValue');
        $platosFilter = Plato::where('name', 'LIKE', '%' . $filterValue . '%');
        $platos = $platosFilter->paginate(10);
        Paginator::useBootstrapFive();
        return view('platos.index',[
            'platos' => $platos,
            'filterValue' => $filterValue,
        ]);
    }

    public function create(Plato $plato)
    {
        return view('platos.create');
    }
    public function store(PlatoRequest $request)
    {
        $plato = $request->all();
        Plato::create($plato);
        return redirect()->action([PlatoController::class, 'index'])
        ->with('success-create','Plato Agregado con éxito');
    }
    public function edit(Plato $plato)
    {
        return view('platos.edit',compact('plato'));
    }
    public function update(PlatoRequest $request, Plato $plato)
    {
        $plato->update([
            'name' => $request->name,
        ]);
        return redirect()->action([PlatoController::class,'index'])
        ->with('success-update','Plato Modificado con éxito');
    }
    public function destroy(Plato $plato)
    {
        $plato->delete();
        return redirect()->action([PlatoController::class, 'index'])
        ->with('success-delete','Plato Eliminado con éxito');
    }


}
