@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Solicitudes Capturadas</div>

                    <div class="panel-body">
                    <table class="table table-responsive-hover">
                        
                            <thead>
                            <tr>
                            	<th>Servicio</th>
                            	<th>Contrato</th>
                            	<th>Linea</th>
                            	<th>Paquete</th>
                            	<th>Folio</th>
                            	<th>Estatus</th>
                            </tr>
                            </thead>
                            <tbody>
                           
                             @foreach($data  as $item)
                                <tr>
    								<td>
                                     {{$item->servicio}}
                                    </td>
<!--                                     <td> -->
<!--                                         <a href="{{$url}}{{$item->url}}"> <i class=" fa fa-download"> Descargar</i> -->
<!--                                         </a> -->
<!--                                     </td> -->
								
                                    <td>
                                      {{$item->contrato}}
                                    </td>
                                    <td>
                                      {{$item->linea}}
                                    </td>
                                    <td>
                                      {{$item->paquete}}
                                    </td>
                                    <td>
                                     {{$item->folio}}
                                    </td>
                                    <td>
                                     {{$item->estatus}}
                                    </td>
                                    <td>
                                      <form  method="POST" action="{{url('update')}}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                      <button type="submit">Activar</button>
                                      </form>
                                    </td>
                                    
                                    
                                </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                        
                         <table class="table table-hover">
                            <thead>
                            <tr>
                            	<th>Servicio</th>
                            	<th>Tipo</th>
                            	<th>Folio</th>
                            	<th>Ver</th>
                            </tr>
                            </thead>
                            <tbody>
                           
                             @foreach($archivos  as $item)
                                <tr>
    								<td class="table-success">
                                     {{$item->servicio}}
                                    </td >
                                    <td  class="table-warning">
                                      {{$item->tipo}}
                                    </td>
                                     <td class="table-danger">
                                      {{$item->folio}}
                                    </td>
                                    <td>
                                        <a href="{{$url}}{{$item->url}}"> <i class=" fa fa-download"> Descargar</i>
                                        </a>
                                    </td>
								
                                   
<!--                                     <td> -->
<!--                                       <form  method="POST" action="{{url('update')}}"> -->
<!--                                         {{ csrf_field() }} -->
<!--                                         <input type="hidden" name="id" value="{{ $item->id }}"> -->
<!--                                       <button type="submit">Activar</button> -->
<!--                                       </form> -->
<!--                                     </td> -->
                                    
                                    
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
