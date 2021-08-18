
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  nombre %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{old('nombre',$cancha->nombre ?? '')}}">
    <label for="nombre">Nombre cancha</label>
    @error('nombre')
        <div class="text-danger">{{$errors->first('nombre')}}</div>
    @enderror
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%   direccion %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{old('direccion',$cancha->direccion ?? '')}}">
    <label for="direccion">Direccion</label>
    @error('direccion')
        <div class="text-danger">{{$errors->first('direccion')}}</div>
    @enderror
</div>


{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%   capacidad  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('capacidad') is-invalid @enderror" id="capacidad" name="capacidad" value="{{old('capacidad',$cancha->capacidad ?? '')}}">
    <label for="capacidad">capacidad</label>
    @error('capacidad')
        <div class="text-danger">{{$errors->first('capacidad')}}</div>
    @enderror
</div>
