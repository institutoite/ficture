@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
@stop


@section('title', 'mostrar persona')

@section('content_header')
    
@stop
@section('content')
    
    <div class="card">
        <div class="card-header bg-success">
            MOSTRAR CAMPEONATO
            <a class="btn btn-warning float-right" href="{{route('campeonato.index')}}">Ver lista</a>
        </div>
        <div class="card-body">
            <table  class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ATRIBUTO</th>
                        <th>DATO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{$campeonatito->id}}</td>
                    </tr>
                    <tr>
                        <td>NOMBRE</td>
                        <td>{{$campeonatito->campeonato}}</td>
                    </tr>
                    <tr>
                        <td>FECHAINICIO</td>
                        <td>{{$campeonatito->fechainicio->diffForHumans()}}</td>
                    </tr>
                    <tr>
                        <td>FECJAFIN</td>
                        <td>{{$campeonatito->fechafin->diffForHumans()}}</td>
                    </tr>
                    <tr>
                        <td>CATEGORIA</td>
                        <td>{{$campeonatito->categoria}}</td>
                    </tr>
                    <tr>
                        <td>CREADO</td>
                        <td>{{$campeonatito->created_at}}</td>
                    </tr>
                    <tr>
                        <td>ACTUALIZADO</td>
                        <td>{{$campeonatito->updated_at}}</td>
                    </tr>
                </tbody>
            </table>                
        </div>
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#personas').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                "columns":{
                    data:"id",
                    data:"nombre",
                    data:"apellidop",
                    data:"apellidom",
                    data:"ci",
                    data:"expedido",
                    data:"telefono"
                }
            });
        });
    </script>
@stop
        