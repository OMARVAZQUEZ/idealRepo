@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Carga de Archivos</div>

                    <div class="panel-body">

                        <form action="{{ url('filesUpload') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                           
                                <div class="col-md-4">
                                    <label for="">IFE</label>
                                    <input type="file" class="form-control" name="IFE" id="IFE">
                                </div>
                                <div class="col-md-4">
                                    <label for="">IFE REVERSO</label>
                                    <input type="file" class="form-control" name="IFEREVERSO" id="IFEREVERSO">
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">CURP</label>
                                        <input type="file" class="form-control" name="CURP" id="CURP">
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">COMPROBANTE DE DOMICILIO</label>
                                        <input type="file" class="form-control" name="COMPROBANTE" id="COMPROBANTE">
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">SOLICITUD</label>
                                        <input type="file" class="form-control" name="SOLICITUD" id="SOLICITUD">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">AVISO</label>
                                        <input type="file" class="form-control" name="AVISO" id="AVISO">
                                    </div>
                                </div>
                                
                              
                              
                              <div class=" lg-3">
                                    <div class="form-group">
                                     <label for="">Tipo de servicio</label>
                                          <select class="form-control" id="tiposervicio">
                                                  <option value="DoblePlay">Doble Play</option>
                                                  <option value="Activacion">Activacion</option>
                                                  <option value="Upsel">Upsel</option>
                                         </select>
                                     </div>
                               </div>
<!--                                 <div class=" lg-3"> -->
<!--                                     <div class="form-group"> -->
<!--                                      <label for="">Contrato</label> -->
<!--                                           <select class="form-control"> -->
<!--                                                   <option value="Linea Nueva">Linea Nueva</option> -->
<!--                                                   <option value="Portabilidad">Portabilidad</option> -->
                                                  
<!--                                          </select> -->
<!--                                      </div> -->
<!--                                </div> -->
<!--                                 <div class=" lg-3"> -->
<!--                                     <div class="form-group"> -->
<!--                                      <label for="">Tipo de Linea</label> -->
<!--                                           <select class="form-control"> -->
<!--                                                   <option value="Comercial">Comercial</option> -->
<!--                                                   <option value="Residencial">Residencial</option> -->
                                                  
<!--                                          </select> -->
<!--                                      </div> -->
<!--                                </div> -->
<!--                                <div class=" lg-3"> -->
<!--                                     <div class="form-group"> -->
<!--                                      <label for="">Paquetes</label> -->
<!--                                           <select class="form-control"> -->
<!--                                             <option value="Comercial">Basico</option> -->
<!--                                                   <option value="Residencial">Completo</option> -->
<!--                                          </select> -->
<!--                                      </div> -->
<!--                                </div> -->
                               
              
                 		
                                <button class="btn" type="submit">Enviar</button>
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
