@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
@stop


@section('title', 'mostrar TIPO')

@section('content_header')
    
@stop
@section('content')

    <div class="card">
        <div class="card-header bg-success">
            EDITAR TIPO
        </div>

        <div class="card-body">
            <form method="post" action="{{route('tipo.update',$tipo)}}">
                {{ method_field('PATCH') }}
                @csrf
                @include('tipo.form')
                @include('include.boton')
            </form>
        </div>
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
@stop
        