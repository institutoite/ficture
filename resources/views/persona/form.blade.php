
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  nombre %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{old('nombre',$persona->nombre ?? '')}}">
    <label for="nombre">Nombre</label>
    @error('nombre')
        <div class="text-danger">{{$errors->first('nombre')}}</div>
    @enderror
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  apellido paterno %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('apellidop') is-invalid @enderror" id="apellidop" name="apellidop" value="{{old('apellidop',$persona->apellidop ?? '')}}">
    <label for="apellidop">Apellido paterno</label>
    @error('apellidop')
        <div class="text-danger">{{$errors->first('apellidop')}}</div>
    @enderror
</div>


{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  apellido maternor %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('apellidom') is-invalid @enderror" id="apellidom" name="apellidom" value="{{old('apellidom',$persona->apellidom ?? '')}}">
    <label for="apellidom">Apellido materno</label>
    @error('apellidom')
        <div class="text-danger">{{$errors->first('apellidom')}}</div>
    @enderror
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  carnet %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control @error('ci') is-invalid @enderror" id="ci" name="ci" value="{{old('ci',$persona->ci ?? '')}}">
    <label for="ci">Carnet</label>
    @error('ci')
        <div class="text-danger">{{$errors->first('ci')}}</div>
    @enderror
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  EXPEDIDO %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
            <div class="form-floating mb-3 text-gray">
                <select class="form-control @error('expedido') is-invalid @enderror"  name="expedido" id="expedido">
                    <option value=""> Elija Expedido</option>
                        @isset($persona)
                            <option value="SC" @if($persona->expedido == 'SC') {{'selected'}} @endif>Santa Cruz</option>
                            <option value="LPZ" @if($persona->expedido == 'LPZ') {{'selected'}} @endif>La Paz</option>
                            <option value="CBBA" @if($persona->expedido == 'CBBA') {{'selected'}} @endif>Cochabamba</option>

                            <option value="BEN" @if($persona->expedido == 'BEN') {{'selected'}} @endif>Beni</option>
                            <option value="TAR" @if($persona->expedido == 'TAR') {{'selected'}} @endif>Tarija</option>
                            <option value="PND" @if($persona->expedido == 'PND') {{'selected'}} @endif>Pando</option>

                            <option value="ORU" @if($persona->expedido == 'ORU') {{'selected'}} @endif>Oruro</option>
                            <option value="POT" @if($persona->expedido == 'POT') {{'selected'}} @endif>Potosí</option>
                            <option value="CHU" @if($persona->expedido == 'CHU') {{'selected'}} @endif>Chuquisaca</option>
                        @else 
                            <option value="SC" @if(old('expedido') == 'SC') {{'selected'}} @endif>Santa Cruz</option>
                            <option value="LPZ" @if(old('expedido') == 'LPZ') {{'selected'}} @endif>La Paz</option>
                            <option value="CBBA" @if(old('expedido') == 'CBBA') {{'selected'}} @endif>Cochabamba</option>

                            <option value="BEN" @if(old('expedido') == 'BEN') {{'selected'}} @endif>Beni</option>
                            <option value="TAR" @if(old('expedido') == 'TAR') {{'selected'}} @endif>Tarija</option>
                            <option value="PND" @if(old('expedido') == 'PND') {{'selected'}} @endif>Pando</option>

                            <option value="ORU" @if(old('expedido') == 'ORU') {{'selected'}} @endif>Oruro</option>
                            <option value="POT" @if(old('expedido') == 'POT') {{'selected'}} @endif>Potosí</option>
                            <option value="CHU" @if(old('expedido') == 'CHU') {{'selected'}} @endif>Chuquisaca</option>
                        @endisset 
                            
                        
                </select> 
                <label for="expedido">Elija departamento de expedido</label>
                @error('expedido')
                    <div class="text-danger">{{$errors->first('expedido')}}</div>
                @enderror
            </div>
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  TELEFONO %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">    
    <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{old('telefono',$persona->telefono ?? '')}}">
    <label for="telefono">telefono</label>
    @error('telefono')
        <div class="text-danger">{{$errors->first('telefono')}}</div>
    @enderror
</div>

<div class="form-floating mb-3 text-gray">
    <select class="form-control @error('rol') is-invalid @enderror"  name="rol" id="rol">
        <option value=""> Elija Papel</option>
            @isset($persona)
                <option value="presidente" @if($persona->rol == 'presidente') {{'selected'}} @endif>Presidente</option>
                <option value="jugador" @if($persona->rol == 'jugador') {{'selected'}} @endif>Jugador</option>
                <option value="arbitro" @if($persona->rol == 'arbitro') {{'selected'}} @endif>Arbitro</option>
            @else 
                <option value="presidente" @if(old('rol') == 'presidente') {{'selected'}} @endif>Presidente</option>
                <option value="jugador" @if(old('rol') == 'docente') {{'selected'}} @endif>Jugador</option>
                <option value="arbitro" @if(old('rol') == 'arbitro') {{'selected'}} @endif>Arbitro</option>
            @endisset
    </select>
    <label for="rol">papel*</label>
</div> 