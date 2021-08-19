@extends('adminlte::page')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
@stop


@section('title', 'Crear Partido')

@section('content_header')
    
@stop
@section('content')
    <div class="card">
        <div class="card-header bg-success">
            CREAR PARTIDO
        </div>
        <div class="card-body">
            <form method="post" action="{{route('partido.guardar')}}">
                @csrf
                @include('partido.form')
                @include('include.boton')
            </form>
        </div>
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            $("#equipo_id" ).change(function() {
                let equipo_id=$(this).val();
                $.ajax({
                    url : '../oponentes/'+equipo_id,
                    success : function(respuesta) {
                       console.log(respuesta); 
                    },
                    error : function(xhr, status) {
                        console.log('fallé')
                    },
                });
            });
        });
    </script>
@stop
        