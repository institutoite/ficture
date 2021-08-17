
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  nombre %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{old('nombre',$persona->nombre ?? '')}}">
    <label for="nombre">Nombre equipo</label>
    @error('nombre')
        <div class="text-danger">{{$errors->first('nombre')}}</div>
    @enderror
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%   direccion %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{old('direccion',$persona->direccion ?? '')}}">
    <label for="direccion">Direccion</label>
    @error('direccion')
        <div class="text-danger">{{$errors->first('direccion')}}</div>
    @enderror
</div>


{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%   escudo %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('escudo') is-invalid @enderror" id="escudo" name="escudo" value="{{old('escudo',$persona->escudo ?? '')}}">
    <label for="escudo">Escudo</label>
    @error('escudo')
        <div class="text-danger">{{$errors->first('escudo')}}</div>
    @enderror
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  colores  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('colores') is-invalid @enderror" id="colores" name="colores" value="{{old('colores',$persona->colores ?? '')}}">
    <label for="colores">Colores</label>
    @error('colores')
        <div class="text-danger">{{$errors->first('colores')}}</div>
    @enderror
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  TELEFONO %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">    
    <input type="date" class="form-control @error('fundacion') is-invalid @enderror" id="fundacion" name="fundacion" value="{{old('fundacion',$persona->fundacion ?? '')}}">
    <label for="fundacion">fundacion</label>
    @error('fundacion')
        <div class="text-danger">{{$errors->first('fundacion')}}</div>
    @enderror
</div>