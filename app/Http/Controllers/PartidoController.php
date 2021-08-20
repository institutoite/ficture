<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Arbitro;
use App\Models\Cancha;
use App\Models\Equipo;
use App\Models\Campeonato;
use Illuminate\Support\Facades\DB;



class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos=DB::table('equipo_equipo')->get();
        return view('partido.index',compact('partidos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos=Equipo::all();
        $canchas=Cancha::all();
        $arbitros=Arbitro::all();
        $campeonatos = Campeonato::all();

        return view('partido.create',compact('equipos','canchas','arbitros','campeonatos')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $equipo=Equipo::findOrFail($request->equipo_id);
        $datos=[
            "cancha_id" =>$request->cancha_id,
            "arbitro_id" =>$request->arbitro_id,
            "campeonato_id" => $request->campeonato_id,
            "fecha" =>$request->fecha,
            "hora" =>$request->hora,
        ];
        //$book->authors()->attach($authorId, ['best_seller' => true]);
        $equipo->oponentes()->attach($request->equipo2_id,$datos);

        return redirect()->route('partido.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partido= DB::table('equipo_equipo')
                ->where('id', $id)
                ->get()->first();
        $equipos = Equipo::all();
        $canchas = Cancha::all();
        $arbitros = Arbitro::all();
        $campeonatos = Campeonato::all();
        $oponentes = Equipo::where('id', '<>', $partido->equipo_id)->first()->get();
        return view('partido.editar',compact('oponentes','partido', 'equipos', 'canchas', 'arbitros', 'campeonatos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function CrearPartido(Request $request){
        dd($request->all());
    }


}
