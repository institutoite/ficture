
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  nombre %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$persona->nombre ?? '')}}">
    <label for="nombre">Nombre</label>
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  apellido paterno %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="apellidop" name="apellidop">
    <label for="apellidop">Apellido paterno</label>
</div>


{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  apellido maternor %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="apellidom" name="apellidom">
    <label for="apellidom">Apellido materno</label>
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  carnet %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="ci" name="ci">
    <label for="ci">Carnet</label>
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  EXPEDIDO %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
            <div class="form-floating mb-3 text-gray">
                <select class="form-control @error('expedido') is-invalid @enderror"  name="expedido" id="expedido">
                    <option value=""> Elija Expedido</option>
                        @isset($persona)
                            <option value="SCZ" @if($persona->expedido == 'SCZ') {{'selected'}} @endif>Santa Cruz</option>
                            <option value="LPZ" @if($persona->expedido == 'LPZ') {{'selected'}} @endif>La Paz</option>
                            <option value="CBBA" @if($persona->expedido == 'CBBA') {{'selected'}} @endif>Cochabamba</option>

                            <option value="BEN" @if($persona->expedido == 'BEN') {{'selected'}} @endif>Beni</option>
                            <option value="TAR" @if($persona->expedido == 'TAR') {{'selected'}} @endif>Tarija</option>
                            <option value="PND" @if($persona->expedido == 'PND') {{'selected'}} @endif>Pando</option>

                            <option value="ORU" @if($persona->expedido == 'ORU') {{'selected'}} @endif>Oruro</option>
                            <option value="POT" @if($persona->expedido == 'POT') {{'selected'}} @endif>Potosí</option>
                            <option value="CHU" @if($persona->expedido == 'CHU') {{'selected'}} @endif>Chuquisaca</option>
                        @else 
                            <option value="SCZ" @if(old('expedido') == 'SCZ') {{'selected'}} @endif>Santa Cruz</option>
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
            </div>
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%  TELEFONO %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="form-floating mb-3">    
    <input type="text" class="form-control" id="telefono" name="telefono">
    <label for="telefono">telefono</label>
</div>