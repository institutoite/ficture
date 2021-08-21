<div class="row">
    <div class="col-6">
       {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  EQUIPO LOCAL  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="form-floating mb-3">
            <select class="form-control @error('equipo_id') is-invalid @enderror"  name="equipo_id" id="equipo_id">
                <option value=""> Elija equipo </option>
                    @foreach ($equipos as $equipo)
                        @isset($partido)     
                            <option  value="{{$equipo->id}}" {{$equipo->id==$partido->equipo_id ? 'selected':''}}>{{$equipo->nombre}}</option>     
                        @else
                            <option value="{{ $equipo->id }}" {{ old('equipo_id') == $equipo->id ? 'selected':'' }} >{{ $equipo->nombre }}</option> 
                        @endisset 
                    @endforeach
            </select>
            <label for="equipo_id">Equipo Local</label>
            @error('equipo_id')
                <div class="text-danger">{{$errors->first('equipo_id')}}</div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        
         {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  EQUIPO VISITANTE  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="form-floating mb-3">
            <select class="form-control @error('equipo2_id') is-invalid @enderror"  name="equipo2_id" id="equipo2_id">
                <option value=""> Elija equipo </option>
                    @isset($partido)
                        @foreach ($oponentes as $oponente)
                            <option  value="{{$oponente->id}}" {{$oponente->id==$partido->equipo2_id ? 'selected':''}}>{{$oponente->nombre}}</option>     
                        @endforeach
                    @endisset
            </select>
            <label for="equipo2_id">Equipo Visitante</label>
            @error('equipo2_id')
                <div class="text-danger">{{$errors->first('equipo2_id')}}</div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
       {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  EQUIPO LOCAL  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="form-floating mb-3">
            <input type="number"  class="form-control @error('gol1') is-invalid @enderror" id="gol1" name="gol1" value="{{old('gol1',$partido->gol1 ?? '')}}">
            <label for="gol1">Goles Local</label>
            @error('gol1')
                <div class="text-danger">{{$errors->first('gol1')}}</div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        
         {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  EQUIPO VISITANTE  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="form-floating mb-3">
            <input type="number" class="form-control @error('gol2') is-invalid @enderror" id="gol2" name="gol2" value="{{old('gol2',$partido->gol2 ?? '')}}">
            <label for="gol2">Goles Visitante</label>
            @error('gol2')
                <div class="text-danger">{{$errors->first('gol2')}}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-floating mb-3">
    <select class="form-control @error('campeonato_id') is-invalid @enderror"  name="campeonato_id" id="campeonato_id">
        <option value=""> Elija campeonato </option>
            @foreach ($campeonatos as $campeonato)
                @isset($partido)     
                    <option  value="{{$campeonato->id}}" {{$campeonato->id==$partido->campeonato_id ? 'selected':''}}>{{$campeonato->campeonato}}</option>     
                @else
                    <option value="{{ $campeonato->id }}" {{ old('campeonato_id') == $campeonato->id ? 'selected':'' }} >{{ $campeonato->campeonato }}</option> 
                @endisset 
            @endforeach
    </select>
    <label for="campeonato_id">Seleccione Campeonato</label>
    @error('campeonato_id')
        <div class="text-danger">{{$errors->first('campeonato_id')}}</div>
    @enderror
</div>



{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  cancha  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <select class="form-control @error('cancha_id') is-invalid @enderror"  name="cancha_id" id="cancha_id">
        <option value=""> Elija cancha </option>
            @foreach ($canchas as $cancha)
                @isset($partido)     
                    <option  value="{{$cancha->id}}" {{$cancha->id==$partido->cancha_id ? 'selected':''}}>{{$cancha->nombre}}</option>     
                @else
                    <option value="{{ $cancha->id }}" {{ old('cancha_id') == $cancha->id ? 'selected':'' }} >{{ $cancha->nombre }}</option> 
                @endisset 
            @endforeach
    </select>
    <label for="cancha_id">cancha Local</label>
    @error('cancha_id')
        <div class="text-danger">{{$errors->first('cancha_id')}}</div>
    @enderror
</div>

{{-- {{ dd($arbitros) }} --}}

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  arbitro  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <select class="form-control @error('arbitro_id') is-invalid @enderror"  name="arbitro_id" id="arbitro_id">
        <option value=""> Elija arbitro </option>
            @foreach ($arbitros as $arbitro)
                @isset($partido)     
                    <option  value="{{$arbitro->id}}" {{$arbitro->id==$partido->arbitro_id ? 'selected':''}}>{{$arbitro->persona->nombre}}</option>     
                @else
                    <option value="{{ $arbitro->id }}" {{ old('arbitro_id') == $arbitro->id ? 'selected':'' }} >{{ $arbitro->persona->nombre }}</option> 
                @endisset 
            @endforeach
    </select>
    <label for="arbitro_id">arbitro Local</label>
    @error('arbitro_id')
        <div class="text-danger">{{$errors->first('arbitro_id')}}</div>
    @enderror
</div>


<div class="row">
    <div class="col-6">
       
        <div class="form-floating mb-3">
            <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha" name="fecha" value="{{old('fecha',$partido->fecha ?? '')}}">
            <label for="fecha">fecha</label>
            @error('fecha')
                <div class="text-danger">{{$errors->first('fecha')}}</div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="form-floating mb-3">
            <input type="time" class="form-control @error('hora') is-invalid @enderror" id="hora" name="hora" value="{{old('hora',$partido->hora ?? '')}}">
            <label for="hora">hora</label>
            @error('hora')
                <div class="text-danger">{{$errors->first('hora')}}</div>
            @enderror
        </div>
    </div>
</div>










































{{-- 


<div class="form-floating mb-3">
    <input type="text" class="form-control @error('campeonato') is-invalid @enderror" id="campeonato" name="campeonato" value="{{old('campeonato',$campeonato->campeonato ?? '')}}">
    <label for="campeonato">Nombre campeonato</label>
    @error('campeonato')
        <div class="text-danger">{{$errors->first('campeonato')}}</div>
    @enderror
</div>












<div class="form-floating mb-3">
    <select class="form-control @error('categoria_id') is-invalid @enderror"  name="categoria_id" id="categoria_id">
        <option value=""> Elija Categoria</option>
            @foreach ($categorias as $categoria)
                @isset($campeonato)     
                    <option  value="{{$categoria->id}}" {{$categoria->id==$campeonato->categoria_id ? 'selected':''}}>{{$categoria->categoria}}</option>     
                @else
                    <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected':'' }} >{{ $categoria->categoria }}</option>
                @endisset 
            @endforeach
    </select>
    <label for="categoria_id">Categoria</label>
    @error('categoria_id')
        <div class="text-danger">{{$errors->first('categoria_id')}}</div>
    @enderror
</div>
 --}}
