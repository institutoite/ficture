<?php

namespace App\Http\Controllers;

use App\Models\Cancha;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCanchaRequest;
class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canchas=Cancha::all();
        return view('cancha.index',compact('canchas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cancha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCanchaRequest $request)
    {
        $cancha=new Cancha;
        $cancha->nombre = $request->nombre;
        $cancha->direccion=$request->direccion;
        $cancha->capacidad=$request->capacidad;
        $cancha->save();

        return redirect()->route('cancha.index',$cancha);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function show(Cancha $cancha)
    {
        return view('cancha.show',compact('cancha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancha $cancha)
    {
        return view('cancha.editar',compact('cancha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancha $cancha)
    {
        $cancha = new Cancha;
        $cancha->nombre = $request->nombre;
        $cancha->direccion = $request->direccion;
        $cancha->capacidad = $request->capacidad;
        $cancha->save();

        return redirect()->route('cancha.show', $cancha);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancha $cancha)
    {
        $cancha->delete();
        return response()->json(['respuesta' => 'Eliminado correctamente']);
    }
}
