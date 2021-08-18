<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEquipoRequest;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    
    public function index()
    {
        $equipos=Equipo::all();
        return view('equipo.index',compact('equipos'));
    }
    public function listar()
    {
        $equipos=Equipo::all();
        return response()->json($equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquipoRequest $request)
    {
        $equipo=new Equipo;
        $equipo->nombre=$request->nombre;
        $equipo->direccion=$request->direccion;
        $equipo->escudo=$request->escudo;
        $equipo->colores=$request->colores;
        $equipo->fundacion=$request->fundacion;
        $equipo->save();
        return redirect()->route('equipo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        return view('equipo.show',compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        
        return view('equipo.editar',compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        $equipo = new Equipo;
        $equipo->nombre = $request->nombre;
        $equipo->direccion = $request->direccion;
        $equipo->escudo = $request->escudo;
        $equipo->colores = $request->colores;
        $equipo->fundacion = $request->fundacion;
        $equipo->save();
        return redirect()->route('equipo.show',$equipo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return response()->json(['respuesta' => 'Eliminado correctamente']);
    }
}
