<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\CanchaController;
use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\AnotacionController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});


/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE PERSONAS %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('personas',[PersonaController::class, 'index'])->name('persona.index')->middleware(['auth']);
Route::get('personas/show/{persona}',[PersonaController::class, 'show'])->name('persona.show')->middleware(['auth']);;
Route::get('personas/edit/{persona}',[PersonaController::class, 'edit'])->name('persona.edit')->middleware(['auth']);;
Route::patch('personas/actualizar/{persona}',[PersonaController::class, 'update'])->name('persona.update')->middleware(['auth']);;
Route::get('personas/create',[PersonaController::class, 'create'])->name('persona.create')->middleware(['auth']);;
Route::post('personas/guardar',[PersonaController::class, 'store'])->name('persona.guardar')->middleware(['auth']);;
Route::delete('persona/eliminar/{persona}',[PersonaController::class, 'destroy'])->name('persona.eliminar')->middleware(['auth']);;



/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE equipo  %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('equipos',[EquipoController::class, 'index'])->name('equipo.index')->middleware(['auth']);;
Route::get('equipos/show/{equipo}',[EquipoController::class, 'show'])->name('equipo.show')->middleware(['auth']);;
Route::get('equipos/edit/{equipo}',[EquipoController::class, 'edit'])->name('equipo.edit')->middleware(['auth']);;
Route::patch('equipos/actualizar/{equipo}',[EquipoController::class, 'update'])->name('equipo.update')->middleware(['auth']);;
Route::get('equipos/create',[EquipoController::class, 'create'])->name('equipo.create')->middleware(['auth']);;
Route::get('listar/equipos',[EquipoController::class, 'listar'])->name('equipo.listar')->middleware(['auth']);;
Route::post('equipos/guardar',[EquipoController::class, 'store'])->name('equipo.guardar')->middleware(['auth']);;
Route::delete('equipos/eliminar/{equipo}',[EquipoController::class, 'destroy'])->name('equipo.eliminar')->middleware(['auth']);;

Route::get('oponentes/{equipo}',[EquipoController::class, 'oponentes'])->name('equipo.oponentes')->middleware(['auth']);;

/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE canchas  %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('canchas',[CanchaController::class, 'index'])->name('cancha.index')->middleware(['auth']);;
Route::get('canchas/show/{cancha}',[CanchaController::class, 'show'])->name('cancha.show')->middleware(['auth']);;
Route::get('canchas/edit/{cancha}',[CanchaController::class, 'edit'])->name('cancha.edit')->middleware(['auth']);;
Route::patch('canchas/actualizar/{cancha}',[CanchaController::class, 'update'])->name('cancha.update')->middleware(['auth']);;
Route::get('canchas/create',[CanchaController::class, 'create'])->name('cancha.create')->middleware(['auth']);;
Route::get('listar/canchas',[CanchaController::class, 'listar'])->name('cancha.listar')->middleware(['auth']);;
Route::post('canchas/guardar',[CanchaController::class, 'store'])->name('cancha.guardar')->middleware(['auth']);;
Route::delete('canchas/eliminar/{cancha}',[CanchaController::class, 'destroy'])->name('cancha.eliminar')->middleware(['auth']);;

/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE CAMPEONATO  %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('campeonatos',[CampeonatoController::class, 'index'])->name('campeonato.index')->middleware(['auth']);;
Route::get('campeonatos/show/{campeonato}',[CampeonatoController::class, 'show'])->name('campeonato.show')->middleware(['auth']);;
Route::get('campeonatos/edit/{campeonato}',[CampeonatoController::class, 'edit'])->name('campeonato.edit')->middleware(['auth']);;
Route::patch('campeonatos/actualizar/{campeonato}',[CampeonatoController::class, 'update'])->name('campeonato.update')->middleware(['auth']);;
Route::get('campeonatos/create',[CampeonatoController::class, 'create'])->name('campeonato.create')->middleware(['auth']);;
Route::get('listar/campeonatos',[CampeonatoController::class, 'listar'])->name('campeonato.listar')->middleware(['auth']);;
Route::post('campeonatos/guardar',[CampeonatoController::class, 'store'])->name('campeonato.guardar')->middleware(['auth']);;
Route::delete('campeonatos/eliminar/{campeonato}',[CampeonatoController::class, 'destroy'])->name('campeonato.eliminar')->middleware(['auth']);;



/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE PARTIDOS  %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('partidos',[PartidoController::class, 'index'])->name('partido.index')->middleware(['auth']);;
Route::get('partidos/show/{partido}',[PartidoController::class, 'show'])->name('partido.show')->middleware(['auth']);;
Route::get('partidos/edit/{partido}',[PartidoController::class, 'edit'])->name('partido.edit')->middleware(['auth']);;
Route::patch('partidos/actualizar/{partido}',[PartidoController::class, 'update'])->name('partido.update')->middleware(['auth']);;
Route::get('partidos/create',[PartidoController::class, 'create'])->name('partido.create')->middleware(['auth']);;
Route::get('imprimir',[PartidoController::class, 'imprimirPrograma']);

Route::post('partidos/guardar',[PartidoController::class, 'store'])->name('partido.guardar')->middleware(['auth']);;
Route::delete('partidos/eliminar/{partido}',[PartidoController::class, 'destroy'])->name('partido.eliminar')->middleware(['auth']);;
Route::get('campeonatos/reporte/{campeonato}', [PartidoController::class, 'imprimirPartidos'])->name('campeonato.patidos')->middleware(['auth']);;


/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE CAMPEONATO  %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('anotaciones', [AnotacionController::class, 'index'])->name('anotacion.index')->middleware(['auth']);;
Route::get('anotaciones/show/{anotacion}', [AnotacionController::class, 'show'])->name('anotacion.show')->middleware(['auth']);;
Route::get('anotaciones/edit/{anotacion}', [AnotacionController::class, 'edit'])->name('anotacion.edit')->middleware(['auth']);;
Route::patch('anotaciones/actualizar/{anotacion}', [AnotacionController::class, 'update'])->name('anotacion.update')->middleware(['auth']);;
Route::get('anotaciones/create', [AnotacionController::class, 'create'])->name('anotacion.create')->middleware(['auth']);;
Route::get('listar/anotaciones', [AnotacionController::class, 'listar'])->name('anotacion.listar')->middleware(['auth']);;
Route::post('anotaciones/guardar', [AnotacionController::class, 'store'])->name('anotacion.guardar')->middleware(['auth']);;
Route::delete('anotaciones/eliminar/{anotacion}', [AnotacionController::class, 'destroy'])->name('anotacion.eliminar')->middleware(['auth']);;

/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE CAMPEONATO  %%%%%%%%%%%%%%%%%%%%%%%% */
Route::get('tipos', [TipoController::class, 'index'])->name('tipo.index')->middleware(['auth']);;
Route::get('tipos/show/{tipo}', [TipoController::class, 'show'])->name('tipo.show')->middleware(['auth']);;
Route::get('tipos/edit/{tipo}', [TipoController::class, 'edit'])->name('tipo.edit')->middleware(['auth']);;
Route::patch('tipos/actualizar/{tipo}', [TipoController::class, 'update'])->name('tipo.update')->middleware(['auth']);;
Route::get('tipos/create', [TipoController::class, 'create'])->name('tipo.create')->middleware(['auth']);;
Route::get('listar/tipos', [TipoController::class, 'listar'])->name('tipo.listar')->middleware(['auth']);;
Route::post('tipos/guardar', [TipoController::class, 'store'])->name('tipo.guardar')->middleware(['auth']);;
Route::delete('tipos/eliminar/{tipo}', [TipoController::class, 'destroy'])->name('tipo.eliminar')->middleware(['auth']);;


Auth::routes();

Route::get('/home', [App\Http\Controllers\PersonaController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
