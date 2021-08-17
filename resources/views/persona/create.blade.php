@extends('adminlte::page')
@section('css')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
@stop


@section('title', 'mostrar persona')

@section('content_header')
    
@stop
@section('content')
    <div class="card">
        <div class="card-header bg-success">
            MOSTRAR PERSONA
        </div>
        <div class="card-body">
            <form method="post" action="{{route('persona.guardar')}}">
                @csrf
                @include('persona.form')
                @include('include.boton')
            </form>
        </div>
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            $("#rol" ).change(function() {
                let rol=$(this).val();
                    if(rol=="jugador"){
                        html=""; 
                        html+="<div class='form-floating mb-3'>";    
                        html+="<input type='date' class='form-control @error('fechanacimiento') is-invalid @enderror' id='fechanacimiento' name='fechanacimiento' value='{{old('fechanacimiento',$persona->fechanacimiento ?? '')}}'>";
                        html+="<label for='fechanacimiento'>Fecha Nacimiento</label>";
                        html+="@error('fechanacimiento')";
                        html+="<div class='text-danger'>{{$errors->first('fechanacimiento')}}</div>";
                        html+="@enderror";
                        html+="</div>";
                        $('#guardar').before(html);
                    }
            });
        });
    </script>
@stop
        