@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Carga de Archivos</div>

                    <div class="panel-body">

                        <form action="{{ url('filesUpload') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="lg-3">
                                    <label for="">Archivo 1</label>
                                    <input type="file" class="form-control" name="IFE" id="IFE">
                                </div>
                                <div class=" lg-3">
                                    <div class="form-group">
                                        <label for="">Archivo 2</label>
                                        <input type="file" class="form-control" name="CURP" id="CURP">
                                    </div>
                                </div>
                                <div  class="form-group col-md-3">
                              
                              
                              <div class=" lg-3">
                                    <div class="form-group">
                                          <select class="selectpicker">
                                                  <option value="DoblePlay">Doble Play</option>
                                                  <option value="Activacion">Activacion</option>
                                                  <option value="Upsel">Upsel</option>
                                         </select>
                                     </div>
                               </div>
              
                 		
                                <button class="btn" type="submit">Enviar.</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
