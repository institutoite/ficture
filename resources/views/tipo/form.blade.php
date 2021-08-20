
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  nombre %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" value="{{old('descripcion',$tipo->descripcion ?? '')}}">
    <label for="descripcion">descripcion</label>
    @error('descripcion')
        <div class="text-danger">{{$errors->first('descripcion')}}</div>
    @enderror
</div>
