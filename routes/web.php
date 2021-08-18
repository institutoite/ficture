<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\CanchaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE PERSONAS %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('personas',[PersonaController::class, 'index'])->name('persona.index');
Route::get('personas/show/{persona}',[PersonaController::class, 'show'])->name('persona.show');
Route::get('personas/edit/{persona}',[PersonaController::class, 'edit'])->name('persona.edit');
Route::patch('personas/actualizar/{persona}',[PersonaController::class, 'update'])->name('persona.update');
Route::get('personas/create',[PersonaController::class, 'create'])->name('persona.create');
Route::post('personas/guardar',[PersonaController::class, 'store'])->name('persona.guardar');
Route::delete('persona/eliminar/{persona}',[PersonaController::class, 'destroy'])->name('persona.eliminar');



/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE equipo  %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('equipos',[EquipoController::class, 'index'])->name('equipo.index');
Route::get('equipos/show/{equipo}',[EquipoController::class, 'show'])->name('equipo.show');
Route::get('equipos/edit/{equipo}',[EquipoController::class, 'edit'])->name('equipo.edit');
Route::patch('equipos/actualizar/{equipo}',[EquipoController::class, 'update'])->name('equipo.update');
Route::get('equipos/create',[EquipoController::class, 'create'])->name('equipo.create');
Route::get('listar/equipos',[EquipoController::class, 'listar'])->name('equipo.listar');
Route::post('equipos/guardar',[EquipoController::class, 'store'])->name('equipo.guardar');
Route::delete('equipos/eliminar/{equipo}',[EquipoController::class, 'destroy'])->name('equipo.eliminar');

/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE canchas  %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('canchas',[CanchaController::class, 'index'])->name('cancha.index');
Route::get('canchas/show/{cancha}',[CanchaController::class, 'show'])->name('cancha.show');
Route::get('canchas/edit/{cancha}',[CanchaController::class, 'edit'])->name('cancha.edit');
Route::patch('canchas/actualizar/{cancha}',[CanchaController::class, 'update'])->name('cancha.update');
Route::get('canchas/create',[CanchaController::class, 'create'])->name('cancha.create');
Route::get('listar/canchas',[CanchaController::class, 'listar'])->name('cancha.listar');
Route::post('canchas/guardar',[CanchaController::class, 'store'])->name('cancha.guardar');
Route::delete('canchas/eliminar/{cancha}',[CanchaController::class, 'destroy'])->name('cancha.eliminar');

/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE CAMPEONATO  %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('campeonatos',[CampeonatoController::class, 'index'])->name('campeonato.index');
Route::get('campeonatos/show/{campeonato}',[CampeonatoController::class, 'show'])->name('campeonato.show');
Route::get('campeonatos/edit/{campeonato}',[CampeonatoController::class, 'edit'])->name('campeonato.edit');
Route::patch('campeonatos/actualizar/{campeonato}',[CampeonatoController::class, 'update'])->name('campeonato.update');
Route::get('campeonatos/create',[CampeonatoController::class, 'create'])->name('campeonato.create');
Route::get('listar/campeonatos',[CampeonatoController::class, 'listar'])->name('campeonato.listar');
Route::post('campeonatos/guardar',[CampeonatoController::class, 'store'])->name('campeonato.guardar');
Route::delete('campeonatos/eliminar/{campeonato}',[CampeonatoController::class, 'destroy'])->name('campeonato.eliminar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
