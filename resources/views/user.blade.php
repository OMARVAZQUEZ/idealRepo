@extends('layouts.app')

@section('content')
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Ideal</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Subir Solicitud</a>
                    </li>
                    <li>
                        <a href="#">Servicios Capturados</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

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
                                        <a href="{{$url}}{{$item->url}}"> <i class=" fa fa-download"> Descargar</i>
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
