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
            MOSTRAR EQUIPO
            <a class="btn btn-warning float-right" href="{{route('equipo.index')}}">Ver lista</a>
        </div>
        <div class="card-body">
            <table id="personas" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ATRIBUTO</th>
                        <th>DATO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{$equipo->id}}</td>
                    </tr>
                    <tr>
                        <td>NOMBRE</td>
                        <td>{{$equipo->nombre}}</td>
                    </tr>
                    <tr>
                        <td>DIRECCION</td>
                        <td>{{$equipo->direccion}}</td>
                    </tr>
                    <tr>
                        <td>ESCUDO</td>
                        <td>{{$equipo->escudo}}</td>
                    </tr>
                    <tr>
                        <td>COLORES</td>
                        <td>{{$equipo->colores}}</td>
                    </tr>
                    <tr>
                        <td>FUNDACION</td>
                        <td>{{$equipo->fundacion}}</td>
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
        