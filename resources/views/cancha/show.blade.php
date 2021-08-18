@extends('adminlte::page')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
@stop


@section('title', 'mostrar cancha')

@section('content_header')
    
@stop
@section('content')
    <div class="card">
        <div class="card-header bg-success">
            MOSTRAR CANCHA
            <a class="btn btn-warning float-right" href="{{route('cancha.index')}}">Ver lista</a>
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
                        <td>{{$cancha->id}}</td>
                    </tr>
                    <tr>
                        <td>NOMBRE</td>
                        <td>{{$cancha->nombre}}</td>
                    </tr>
                    <tr>
                        <td>DIRECCION</td>
                        <td>{{$cancha->direccion}}</td>
                    </tr>
                    <tr>
                        <td>CAPACIDAD</td>
                        <td>{{$cancha->capacidad}}</td>
                    </tr>
                    <tr>
                        <td>CREADO</td>
                        <td>{{$cancha->created_at}}</td>
                    </tr>
                    <tr>
                        <td>ACTUALIZADO</td>
                        <td>{{$cancha->updated_at}}</td>
                    </tr>
                </tbody>
            </table>                
        </div>
    </div>
@stop

        