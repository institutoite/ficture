<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Jugador;
use App\Models\Arbitro;
use App\Models\Presidente;
use Illuminate\Http\Request;
use App\Http\Requests\storePersonaRuequest;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas=Persona::get();
        return view('persona.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePersonaRuequest $request)
    {

       // dd($request->all());
        $persona=new Persona;
        $persona->nombre = $request->nombre; //
        $persona->apellidop = $request->apellidop; //
        $persona->apellidom = $request->apellidom; //
        $persona->ci = $request->ci; //
        $persona->expedido = $request->expedido; //
        $persona->telefono = $request->telefono; //
        $persona->rol = $request->rol; //
        $persona->save();

        $rol=$persona->rol;

        switch ($rol) {
            case 'presidente':
                $presidente= new Presidente;
                $presidente->persona_id=$persona->id;
                $presidente->save();
                break;
            
            case 'jugador':
                $jugador= new Jugador;
                $jugador->persona_id=$persona->id;
                $jugador->fechanacimiento=$request->fechanacimiento;
                $jugador->equipo_id=$request->equipo_id;
                $jugador->save();
                break;
            
            case 'arbitro':
                $arbitro= new Arbitro;
                $arbitro->persona_id=$persona->id;
                $arbitro->save();
                break;
            
            default:
                # code...
                break;
        }



        return redirect()->route('persona.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return view('persona.show',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return view('persona.editar', compact('persona')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(storePersonaRuequest $request, Persona $persona)
    {
        $persona->nombre= $request->nombre; //
        $persona->apellidop= $request->apellidop; //
        $persona->apellidom= $request->apellidom; //
        $persona->ci= $request->ci; //
        $persona->expedido= $request->expedido; //
        $persona->telefono= $request->telefono; //
        $persona->save();
        return redirect()->route('persona.show',[$persona]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return response()->json(['respuesta'=>'Eliminado correctamente']);
    }
}
