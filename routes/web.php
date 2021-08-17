<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
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
Route::get('personas/create',[PersonaController::class, 'create'])->name('persona.create');
Route::post('personas/guardar',[PersonaController::class, 'store'])->name('persona.guardar');
Route::delete('persona/eliminar/{persona}',[PersonaController::class, 'destroy'])->name('persona.eliminar');


/* %%%%%%%%%%%%%%%%%%%%%%%%%  RUTAS DE  %%%%%%%%%%%%%%%%%%%%%%%% */




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
