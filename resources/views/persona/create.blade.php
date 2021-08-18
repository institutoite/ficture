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
                        $('#campofechanacimiento').removeClass('d-none');

                        $.ajax({
                            url : '../listar/equipos',
                            success : function(respuesta) {
                                console.log(respuesta);
                                $('#campoequipo').removeClass('d-none');
                                for (let i = 0; i < respuesta.length; i++) {
                                    $('#equipo').append("<option value='"+ respuesta[i].id +"'>"+ respuesta[i].nombre +"</option>");
                                }
                            },
                            error : function(xhr, status) {
                                console.log('fallé')
                            },
                        });

                        
                    }
                    if(rol=="presidente"){
                        $('#campoequipo').addClass('d-none');
                        $('#campofechanacimiento').addClass('d-none');
                    }
                    if(rol=="arbitro"){
                        $('#campoequipo').addClass('d-none');
                        $('#campofechanacimiento').addClass('d-none');
                    }
            });
        });
    </script>
@stop
        