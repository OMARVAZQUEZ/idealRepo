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
                                    <input type="file" class="form-control" name="IFE" id="IFE" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="">IFE REVERSO</label>
                                    <input type="file" class="form-control" name="IFEREVERSO" id="IFEREVERSO" required>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">CURP</label>
                                        <input type="file" class="form-control" name="CURP" id="CURP" required>
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">COMPROBANTE DE DOMICILIO</label>
                                        <input type="file" class="form-control" name="COMPROBANTE" id="COMPROBANTE" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">SOLICITUD</label>
                                        <input type="file" class="form-control" name="SOLICITUD" id="SOLICITUD" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">AVISO</label>
                                        <input type="file" class="form-control" name="AVISO" id="AVISO" required>
                                    </div>
                                </div>
                                
                              
                              
                              <div class="col-md-6">
                                    <div class="form-group">
                                     <label for="">Tipo de servicio</label>
                                          <select class="form-control" id="tiposervicio" name="tiposervicio" >
                                                  <option value="DoblePlay">Doble Play</option>
                                                  <option value="Activacion">Activacion</option>
                                                  <option value="Upsel">Upsel</option>
                                         </select>
                                     </div>
                               </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                     <label for="">Contrato</label>
                                          <select class="form-control" id="contrato" name="contrato">
                                                  <option value="Linea Nueva">Linea Nueva</option>
                                                  <option value="Portabilidad">Portabilidad</option>
                                                  
                                         </select>
                                     </div>
                               </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                     <label for="">Tipo de Linea</label>
                                          <select class="form-control" id="linea" name="linea">
                                                  <option value="Comercial">Comercial</option>
                                                  <option value="Residencial">Residencial</option>
                                                  
                                         </select>
                                     </div>
                               </div>
                                
                              
                               <div class="col-md-6">
                                    <div class="form-group">
                               		 <label for="">Paquetes</label>
                               		  <select class="form-control" id="paquete" name="paquete">
                                      <optgroup label="RESIDENCIAL">
                                        <option value="CAMBIO DE DOMICILIO">CAMBIO DE DOMICILIO</option>
                                          <option value="INFINITUM 10MB">INFINITUM 10MB(S/INTERNET)</option>
                                          <option value="INFINITUM 20MB">INFINITUM 20MB(S/INTERNET)</option>
                                          <option value="INFINITUM 50MB">INFINITUM 50MB(S/INTERNET)</option>
                                          <option value="INFINITUM 100MB">INFINITUM 100MB(S/INTERNET)</option>
                                          
                                           <option value="LINEA SIN PAQUETE">LINEA SIN PAQUETE</option>
                                           <option value="PAQUETE $389">PAQUETE $389</option>
                                           <option value="PAQUETE $1499">PAQUETE $1499</option>
                                           <option value="PAQUETE $333">PAQUETE $333</option>
                                           <option value="PAQUETE $599">PAQUETE $599</option>
                                           <option value="PAQUETE $999">PAQUETE $999</option>
                                                
                                      </optgroup>
                                      <optgroup label="COMERCIAL">
                                       <option value="CAMBIO DE DOMICILIO">CAMBIO DE DOMICILIO</option>
                                        <option value="LINEA SIN PAQUETE">LINEA SIN PAQUETE</option>
                                        <option value="LINEA SIN PAQUETE">LINEA SIN PAQUETE</option>
                                           <option value="PAQUETE NEGOCIO $1499">PAQUETE NEGOCIO $1499</option>
                                           <option value="PAQUETE NEGOCIO $1789">PAQUETE NEGOCIO $1789</option>
                                           <option value="PAQUETE NEGOCIO $2289">PAQUETE NEGOCIO $2289</option>
                                           <option value="PAQUETE NEGOCIO $399">PAQUETE  NEGOCIO $399</option>
                                           <option value="PAQUETE NEGOCIO $549">PAQUETE  NEGOCIO $549</option>
                                           <option value="PAQUETE NEGOCIO  $999">PAQUETE NEGOCIO $999</option>
                                           
                                      </optgroup>
                                    </select>    
             					  </div>
                              </div>
                 		
                                <button class="btn" type="submit">Enviar</button>
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
