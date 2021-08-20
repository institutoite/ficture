<div class="row">
    <div class="col-6">
       {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  EQUIPO LOCAL  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="form-floating mb-3">
            <select class="form-control @error('partido_id') is-invalid @enderror"  name="partido_id" id="partido_id">
                <option value=""> Elija partido </option>
                    @foreach ($partidos as $partido)
                        @isset($anotacion)     
                            <option  value="{{$partido->id}}" {{$partido->id==$anotacion->partido_id ? 'selected':''}}>{{App\Models\Equipo::findOrFail($anotacion->partido->equipo_id)->nombre.' VS '.App\Models\Equipo::findOrFail($partido->equipo2_id)->nombre}}</option>     
                        @else
                            <option value="{{ $partido->id }}" {{ old('partido_id') == $partido->id ? 'selected':'' }} >{{ App\Models\Equipo::findOrFail($partido->equipo_id)->nombre.' VS '.App\Models\Equipo::findOrFail($partido->equipo2_id)->nombre }}</option> 
                        @endisset 
                    @endforeach
            </select>
            <label for="partido_id">partido Local</label>
            @error('partido_id')
                <div class="text-danger">{{$errors->first('partido_id')}}</div>
            @enderror
        </div>
    </div>
    <div class="col-6">
       {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  EQUIPO LOCAL  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="form-floating mb-3">
            <select class="form-control @error('jugador_id') is-invalid @enderror"  name="jugador_id" id="jugador_id">
                <option value=""> Elija jugador </option>
                    @foreach ($jugadores as $jugador)
                        @isset($anotacion)     
                            <option  value="{{$jugador->id}}" {{$jugador->id==$anotacion->jugador_id ? 'selected':''}}>{{$jugador->persona->nombre}}</option>     
                        @else
                            <option value="{{ $jugador->id }}" {{ old('jugador_id') == $jugador->id ? 'selected':'' }} >{{ $jugador->persona->nombre }}</option> 
                        @endisset 
                    @endforeach
            </select>
            <label for="jugador_id">jugador Local</label>
            @error('jugador_id')
                <div class="text-danger">{{$errors->first('jugador_id')}}</div>
            @enderror
        </div>
    </div>
    
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  EQUIPO LOCAL  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="form-floating mb-3">
            <select class="form-control @error('tipo_id') is-invalid @enderror"  name="tipo_id" id="tipo_id">
                <option value=""> Elija tipo </option>
                    @foreach ($tipos as $tipo)
                        @isset($anotacion)     
                            <option  value="{{$tipo->id}}" {{$tipo->id==$anotacion->tipo_id ? 'selected':''}}>{{$tipo->descripcion}}</option>     
                        @else
                            <option value="{{ $tipo->id }}" {{ old('tipo_id') == $tipo->id ? 'selected':'' }} >{{ $tipo->descripcion }}</option> 
                        @endisset 
                    @endforeach
            </select>
            <label for="tipo_id">tipo Local</label>
            @error('tipo_id')
                <div class="text-danger">{{$errors->first('tipo_id')}}</div>
            @enderror
        </div>


<div class="form-floating mb-3">
    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" value="{{old('descripcion',$anotacion->descripcion ?? '')}}">
    <label for="descripcion">descripcion</label>
    @error('descripcion')
        <div class="text-danger">{{$errors->first('descripcion')}}</div>
    @enderror
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
