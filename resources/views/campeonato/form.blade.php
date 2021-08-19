
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  nombre de campeonato %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('campeonato') is-invalid @enderror" id="campeonato" name="campeonato" value="{{old('campeonato',$campeonato->campeonato ?? '')}}">
    <label for="campeonato">Nombre campeonato</label>
    @error('campeonato')
        <div class="text-danger">{{$errors->first('campeonato')}}</div>
    @enderror
</div>


<div class="row">
    <div class="col-6">
        {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%   fecha inicio %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="form-floating mb-3">
            <input type="date" class="form-control @error('fechainicio') is-invalid @enderror" id="fechainicio" name="fechainicio" value="{{old('fechainicio',$campeonato->fechainicio ?? '')}}">
            <label for="fechainicio">fechainicio</label>
            @error('fechainicio')
                <div class="text-danger">{{$errors->first('fechainicio')}}</div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%   escudo %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="form-floating mb-3">
            <input type="date" class="form-control @error('fechafin') is-invalid @enderror" id="fechafin" name="fechafin" value="{{old('fechafin',$campeonato->fechafin ?? '')}}">
            <label for="fechafin">fechafin</label>
            @error('fechafin')
                <div class="text-danger">{{$errors->first('fechafin')}}</div>
            @enderror
        </div>
    </div>
</div>








{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  Categoria  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
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

