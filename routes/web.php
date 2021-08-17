<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EquipoController;
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
Route::post('equipos/guardar',[EquipoController::class, 'store'])->name('equipo.guardar');
Route::delete('equipos/eliminar/{equipo}',[EquipoController::class, 'destroy'])->name('equipo.eliminar');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
