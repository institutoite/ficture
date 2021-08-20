<?php

namespace App\Http\Controllers;

use App\Models\Anotacion;
use App\Http\Controllers\Controller;
use App\Models\Equipoequipo;
use App\Models\Jugador;
use App\Models\Tipo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAnotacionRequest;

class AnotacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anotaciones=Anotacion::all();
        return view('anotacion.index',compact('anotaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partidos=Equipoequipo::all();
        $jugadores=Jugador::all();
        $tipos=Tipo::all();

        return view('anotacion.create',compact('partidos','jugadores','tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnotacionRequest $request)
    {
        //dd($request->all());
        $anotacion = new Anotacion;
        $anotacion->descripcion = $request->descripcion;
        $anotacion->partido_id= $request->partido_id;
        $anotacion->jugador_id = $request->jugador_id;
        $anotacion->tipo_id = $request->tipo_id;
        $anotacion->save();
        return redirect()->route('anotacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anotacion  $anotacion
     * @return \Illuminate\Http\Response
     */
    public function show(Anotacion $anotacion)
    {
        return view('anotacion.show', compact('anotacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anotacion  $anotacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Anotacion $anotacion)
    {
        $partidos = Equipoequipo::all();
        $jugadores = Jugador::all();
        $tipos = Tipo::all();

        return view('anotacion.editar', compact('anotacion', 'partidos', 'jugadores', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anotacion  $anotacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anotacion $anotacion)
    {
        //dd($request->all());
        $anotacion->descripcion = $request->descripcion;
        $anotacion->partido_id = $request->partido_id;
        $anotacion->jugador_id = $request->jugador_id;
        $anotacion->tipo_id = $request->tipo_id;
        $anotacion->save();
        return redirect()->route('anotacion.show', $anotacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anotacion  $anotacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anotacion $anotacion)
    {
        $anotacion->delete();
        return response()->json(['ok' => 'eliminado satistifacotiamente']);
    }
}
