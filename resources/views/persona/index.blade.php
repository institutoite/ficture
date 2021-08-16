@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Personas</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header bg-success">
            LISTA DE PERSONAS
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOP</th>
                        <th>APELLIDOM</th>
                        <th>CARNET</th>
                        <th>TELEFONO</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ $persona->id }}</td>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->apellidop }}</td>
                            <td>{{ $persona->apellidom }}</td>
                            <td>{{ $persona->ci." ".$persona->expedido}}</td>
                            <td>{{ $persona->telefono }}</td>
                            <td>  
                                <a href=""><i class="fas fa-edit text-primary"></i></a>
                                <a href=""><i class="fas fa-eye text-success"></i></a>
                                <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>                
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
        