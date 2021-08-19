<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\StoreCampeonatoRequest;

class CampeonatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campeonatos=Campeonato::join('categorias','categorias.id','=','campeonatos.categoria_id')
                                ->select('campeonatos.id','campeonato','fechainicio','fechafin','categorias.categoria')
                                ->get();
        return view('campeonato.index',compact('campeonatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categoria::all();
        return view('campeonato.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampeonatoRequest $request)
    {
        // dd($request->all());
        $campeonato=new Campeonato;
        $campeonato->campeonato= $request->campeonato;
        $campeonato->fechainicio= $request->fechainicio;
        $campeonato->fechafin= $request->fechafin;
        $campeonato->categoria_id= $request->categoria_id;
        $campeonato->save();

        return redirect()->route('campeonato.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function show(Campeonato $campeonato)
    {
        $campeonatito=Campeonato::join('categorias','categorias.id','=','campeonatos.categoria_id')
                    ->select('campeonatos.id','campeonatos.campeonato','fechainicio','fechafin','categorias.categoria')
                    ->where('campeonatos.id','=',$campeonato->id)
                    ->get()->first();
        //dd($campeonatito);
        return view('campeonato.show',compact('campeonatito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function edit(Campeonato $campeonato)
    {
        $categorias=Categoria::all();
        return view('campeonato.editar',compact('campeonato','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campeonato $campeonato)
    {
        
        $campeonato->campeonato = $request->campeonato;
        $campeonato->fechainicio = $request->fechainicio;
        $campeonato->fechafin = $request->fechafin;
        $campeonato->categoria_id = $request->categoria_id;
        $campeonato->save();

        return redirect()->route('campeonato.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campeonato  $campeonato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campeonato $campeonato)
    {
        $campeonato->delete();
        return response()->json(['ok'=>'Eliminado correctamente']);
    }
}
