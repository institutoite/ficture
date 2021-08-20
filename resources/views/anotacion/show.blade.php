@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
@stop


@section('title', 'mostrar ANOTACION')

@section('content_header')
    
@stop
@section('content')
    
    <div class="card">
        <div class="card-header bg-success">
            MOSTRAR ANOTACION
            <a class="btn btn-warning float-right" href="{{route('anotacion.index')}}">Ver lista</a>
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
                        <td>{{$anotacion->id}}</td>
                    </tr>
                    <tr>
                        <td>PARTIDO</td>
                        <td>{{App\Models\Equipo::findOrFail($anotacion->partido->equipo_id)->nombre.' VS '.App\Models\Equipo::findOrFail($anotacion->partido->equipo2_id)->nombre}}</td>
                    </tr>
                    <tr>
                        <td>PARTIDO</td>
                        <td>{{$anotacion->descripcion}}</td>
                    </tr>
                    <tr>
                        <td>JUGADOR</td>
                        <td>{{App\Models\Jugador::findOrFail($anotacion->jugador_id)->persona->nombre}}</td>
                    </tr>
                    <tr>
                        <td>TIPO ANOTACION </td>
                        <td>{{App\Models\Tipo::findOrFail($anotacion->tipo_id)->descripcion}}</td>
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
        