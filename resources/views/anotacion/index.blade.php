@extends('adminlte::page')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
@stop


@section('title', 'Anotaciones')
@section('plugins.Sweetalert2', true)


@section('content_header')
    <h1>Anotaciones</h1>
@stop
@section('content')

    {{-- {{dd($partidos)}} --}}
    <div class="card">
        <div class="card-header bg-success">
            LISTA DE ANOTACIONES
            <a class="btn btn-warning float-right" href="{{route('anotacion.create')}}">Crear Anotacion</a>
        </div>
        <div class="card-body">
            <table id="anotaciones" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DESCRIPTION</th>
                        <th>PARTIDO</th>
                        <th>JUGADOR</th>
                        <th>TIPO</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anotaciones as $anotacion)
                        <tr>
                            <td>{{ $anotacion->id }}</td>
                            <td>{{ $anotacion->descripcion }}</td>
                            <td>{{ App\Models\Equipo::find($anotacion->partido->equipo_id)->nombre.' Vs '.App\Models\Equipo::find($anotacion->partido->equipo2_id)->nombre}}</td>
                            <td>{{ App\Models\Jugador::find($anotacion->jugador_id)->persona->nombre }}</td>
                            <td>{{ App\Models\Tipo::find($anotacion->tipo_id)->descripcion }}</td>
                            <td>  
                                <a href="{{route('anotacion.edit',$anotacion->id)}}"><i class="fas fa-edit text-primary"></i></a>
                                <a href="{{route('anotacion.show',$anotacion->id)}}"><i class="fas fa-eye text-success"></i></a>
                                
                                <form action="" class="d-inline formulario">
                                    @csrf 
                                    @method("delete")
                                    <button name="btn-eliminar" type="submit" class="btn eliminar" title="Eliminar esta persona">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
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
            let tabla=$('#anotaciones').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
            });
            $('table').on('click','.eliminar',function(e){
                e.preventDefault();
                var id=$(this).closest('tr').find('td').first().html();
                console.log(id);
                var fila=$(this).closest('tr');
                Swal.fire({
                        title: 'Estas seguro(a) de eliminar este registro?',
                        text: "Si eliminas el registro no lo podras recuperar jamás!",
                        icon: 'question',
                        showCancelButton: true,
                        showConfirmButton:true,
                        confirmButtonColor: '#25ff80',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Eliminar..!',
                        position:'center',        
                        }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                url : 'anotaciones/eliminar/'+id,
                                type: 'DELETE',
                                data:{
                                    id:id,
                                    _token:'{{ csrf_token() }}'
                                },
                                success : function(response) {
                                    console.log(response);
                                    fila.remove();
                                    //tabla.ajax.reload();
                                },
                                error : function(xhr, status) {
                                    console.log('falle al eliminar')
                                },
                            });
                        }else{
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 4000,
                                timerProgressBar: true,
                                onOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })
    
                            Toast.fire({
                                icon: 'error',
                                title: 'No se eliminó el registro'
                            })
                        }
                    })
            });
        });
        </script>
@stop

