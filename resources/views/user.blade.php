@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Mis archivos</div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Ruta</th>
                                <th>Folio</th>
                                <th>Creado el</th>
                                <th>Estatus</th>
                            </tr>
                            </thead>
                            <tbody>
                             @foreach($data  as $item)
                                <tr>
    								<td>
                                        {{$item->tipo}}
                                    </td>
                                    <td>
                                     <a href="{{$url}}{{$item->url}}"> <i class=" fa fa-download"> Ver</i>
                                       
                                        </a>
                                    </td>
								
                                    <td>
                                        {{$item->folio}}
                                    </td>
                                    <td>
                                        {{$item->created_at}}
                                    </td>
                                    <td>
                                        {{$item->estatus}}
                                    </td>
                                </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
