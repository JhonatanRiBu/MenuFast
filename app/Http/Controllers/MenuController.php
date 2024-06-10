<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use App\Models\Plato;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $menus = Menu::all();

        return view('menus.index', [
            'menus' => $menus,
        ]);
    }

    public function create(Menu $menu)
    {
        $platos = Plato::all();
        return view('menus.create',[
            'platos'=> $platos
        ]);
    }
    public function store(MenuRequest $request)
    {
        $menu = $request->all();
        $menuCreate = Menu::create($menu);
        $menuCreate->platos()->attach($request->input('platos'));

        return redirect()->action([MenuController::class, 'index'])
        ->with('success-create', 'Menu Agregado con éxito');
    }
    public function show(Menu $menu)
    {
        $diasSemana = ['lunes',
                        'martes',
                        'miercoles',
                        'jueves',
                        'viernes',
                        'sábado'];
        $menu = Menu::find($menu->id);
        $platos = $menu->platos()->select('name')->get();
        return view('menus.show',compact('menu','platos','diasSemana'));
    }
    public function edit(Menu $menu, PLato $platos)
    {
        $platos = Plato::all();
        $ids_platos = $menu->platos()->pluck('platos.id');
        return view('menus.edit',compact('menu','platos','ids_platos'));
    }
    public function update(MenuRequest $request, Menu $menu)
    {
        $menu = Menu::find($menu->id);
        if(!$menu){
            abort(404,'Menú no encontrado');
        }
        else{
            $menu->update([
                'menu' => $request->name,
            ]);
            $menu->platos()->sync($request->input('platos'));
        }
        return redirect()->action([MenuController::class, 'index'])
        ->with('success-update','Menú Modificado con éxito');
    }
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->action([MenuController::class, 'index'])
        ->with('success-delete','Menú Eliminado con éxito');
    }

}
