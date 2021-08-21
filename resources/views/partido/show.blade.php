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
            <a class="btn btn-warning float-right" href="{{route('partido.index')}}">Ver lista</a>
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
                        <td>{{ $partido->id }}</td>
                    </tr>
                    <tr>
                        <td>EQUIPO LOCAL</td>
                        <td>{{ App\Models\Equipo::findOrFail($partido->equipo_id)->nombre }}</td>
                    </tr>
                    </tr>
                    <tr>
                        <td>EQUIPO VISITANTE</td>
                        <td>{{  App\Models\Equipo::findOrFail($partido->equipo2_id)->nombre }}</td>
                    </tr>
                    <tr>
                        <td>ARBITRO</td>
                        <td>{{ App\Models\Arbitro::findOrFail($partido->arbitro_id)->persona->nombre }}</td>
                        </tr>
                    <tr>
                        <td>CAMPEONATO</td>
                        <td>{{ App\Models\Campeonato::findOrFail($partido->campeonato_id)->campeonato }}</td>
                    </tr>
                    <tr>
                        <td>CANCHA</td>
                        <td>{{ App\Models\Cancha::findOrFail($partido->cancha_id)->nombre }}</td>
                    </tr>
                    <tr>
                        <td>FECHA DEL PARTIDO</td>
                        <td>{{ $partido->fecha }}</td>
                    </tr>
                    <tr>
                        <td>HORA DEL PARTIDO</td>
                        <td>{{ $partido->hora }}</td>
                    </tr>
                    <tr>
                        <td>GOLES DE {{App\Models\Equipo::findOrFail($partido->equipo_id)->nombre}} </td>
                        <td>{{ $partido->gol1 }}</td>
                    </tr>
                    <tr>
                        <td>GOLES de  {{App\Models\Equipo::findOrFail($partido->equipo2_id)->nombre}}</td>
                        <td>{{ $partido->gol2 }}</td>
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
               
            });
        });
    </script>
@stop
        