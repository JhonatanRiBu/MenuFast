<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\PlatoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Rutas Platos
Route::get('/inicioPlato', function () {
    return view('platos.indice');
})->name('platos.indice');

Route::get('/platos',[PlatoController::class, 'index'])->name('platos.index');
Route::get('/addPlatos', [PlatoController::class, 'create'])->name('platos.create');
Route::post('/addPlatos', [PlatoController::class, 'store'])->name('platos.store');
Route::get('/platos/{plato}/edit', [PlatoController::class, 'edit'])->name('platos.edit');
Route::put('/platos/{plato}', [PlatoController::class, 'update'])->name('platos.update');
Route::delete('/platos/{plato}', [PlatoController::class, 'destroy'])->name('platos.destroy');
//Rutas Menus

Route::get('/inicioMenu', function () {
    return view('menus.indice');
})->name('menus.indice');

Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/addMenus', [MenuController::class, 'create'])->name('menus.create');
Route::post('/addMenus', [MenuController::class, 'store'])->name('menus.store');
Route::get('/menus/{menu}',[MenuController::class,'show'])->name('menus.show');
Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');
Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');

