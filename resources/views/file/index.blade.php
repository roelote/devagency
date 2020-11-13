@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div>Files</div>
            <div><a class="btn btn-danger" href="{{ route('file.create') }}">Agregar File</a></div>
        </div>
    </div>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <table id="files" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Código</th>
                    <th>Tour</th>
                    <th>Nombre Pasajero</th>
                    <th>Email</th>
                    <th>Start date</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($file as $f)
                    <tr>
                        <td>{{$f->id}}</td>
                        <td>{{$f->code}}</td>
                        <td>{{$f->tour_name}}</td>
                        <td>{{$f->passenger_name}}</td>
                        <td>{{$f->email}}</td>
                        <td>
                            
                            <a class="btn btn-sm btn-danger" href="{{route('file.show',$f->code)}}"><i class="far fa-eye"></i> Ver</a>
                            <a class="btn btn-sm btn-success" href="{{route('file.pdf',$f->code)}} "><i class="far fa-file-pdf"></i> PDF</a>
                            <a class="btn btn-sm btn-info" href="#"><i class="far fa-edit"></i> Editar</a>
                            <a class="btn btn-sm btn-danger" href="#"><i class="far fa-trash-alt"></i> Eliminar</a>
                        </td>
                        
                    </tr>
                @endforeach   
            </tbody>
        
        </table>

    </div>
</div>

@stop

@section('js')
     <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> </script> 
     <script src=" https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"> </script> 
     <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js "></script>
     <script>
         $(document).ready(function() {
                $('#files').DataTable({
                    responsive:true,
                    autoWidth:false,
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ registros por página",
                        "zeroRecords": "Nada encontrado - disculpa",
                        "info": "Nostrando la página _PAGE_ de _PAGES_",
                        "infoEmpty": "No records available",
                        "infoFiltered": "(filtrado de _MAX_ registros totales)",
                        "search":"Buscar"
                    }
                });
            } );
     </script>
     
     
@stop

