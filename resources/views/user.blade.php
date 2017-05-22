@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                           
                             @foreach($user  as $item)
                                <tr>
    								<td>
                                        {{$item->tipo}}
                                    </td>
                                    <td>
                                        <a href="{{$item->url}}"> <i class=" fa fa-download"> Descargar</i>
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
