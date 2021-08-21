<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border: 1px solid #000;
            border-collapse: collapse;
            font-size: 10px;
            }
            th, td {
            width: 25%;
            text-align: left;
            vertical-align: top;
            border: 1px solid #000;
            border-collapse: collapse;
            padding: 0.3em;
            caption-side: bottom;
            }
            caption {
            padding: 0.3em;
            color: #fff;
                background: #000;
            }
            th {
            background: #eee;
            }
    </style>
</head>
<body>
    <img src="{{asset('vendor/adminlte/dist/img/AdminLTELogo.png')}}" width="60" height="60" alt="">
    
    <table class="table">
        <tbody>
            <tr>
                <td>Nombre Capeonato</td>
                <td>{{$campeonato->campeonato}}</td>
            </tr>
            <tr>
                <td>Fecha Inicio</td>
                 <td>{{$campeonato->fechainicio->isoFormat('D-MM-YYYY')}}</td>
            </tr>
            <tr>
                <td>Fecha Fin</td>
                 <td>{{$campeonato->fechafin->isoFormat('D-MM-YYYY')}}</td>
            </tr>
            <tr>
                <td>Categoria</td>
                 <td>{{$campeonato->categoria}}</td>
            </tr>
        </tbody>
    </table>
<br>
{{-- {{dd($partidos)}} --}}
    <table id="partidos" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>LOCAL</th>
                <th>VISITANTE</th>
                <th>ARBITRO</th>
                <th>RESULTADO</th>
                <th>CANCHA</th>
                <th>FECHA</th>
                <th>HORA</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($partidos as $partido)
                <tr>
                    <td>{{ $partido->id }}</td>
                    <td>{{ App\Models\Equipo::find($partido->equipo_id)->nombre }}</td>
                    <td>{{ App\Models\Equipo::find($partido->equipo2_id)->nombre }}</td>
                    <td>{{ App\Models\Arbitro::find($partido->arbitro_id)->persona->nombre }}</td>
                    <td>{{ $partido->gol1.' - '.$partido->gol2}}</td>
                    <td>{{ App\Models\Cancha::find($partido->cancha_id)->nombre}}</td>
                    <td>{{ $partido->fecha}}</td>
                    <td>{{ $partido->hora}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>    
    

</body>
</html>