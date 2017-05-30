<?php

namespace App\Http\Controllers;

use App\Models\ArchivosModel;
use App\Models\ServiciosModel;
use App\User;
use App\Models;
use DB;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class FilesUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('servicios')
        ->join('archivos', 'servicios.folio', '=', 'archivos.folio')
        ->select('archivos.created_at','archivos.tipo','archivos.url', 'servicios.*')
        ->get();
   
        
        
        $user = DB::table('servicios')
        ->join('archivos', 'servicios.folio', '=', 'archivos.folio')
        ->select('archivos.created_at','archivos.tipo','archivos.url', 'servicios.*')
        ->get();
        //$user=User::where('id',Auth::user()->id)->with(['archivos'])->first();
        //$data['user']=$user;
        $url="https://s3.amazonaws.com/".env('AWS_BUCKET')."/";
        return view('user')->with('data', $data)->with('url', $url);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $this->procesarArchivos('IFE',$request);
        $this->procesarArchivos('CURP',$request);
        $this->procesarArchivos('RFC',$request);
        $this->procesarArchivos('IFEREVERSO',$request);
        $this->procesarArchivos('COMPROBANTE',$request);
        $this->procesarArchivos('SOLICITUD',$request);
        $this->procesarArchivos('AVISO',$request);
        $this->servicioDatos('tiposervicio',$request);
        return redirect('filesUpload');
    }

    public function procesarArchivos($name,$request){
        if ($request->hasFile($name)) {
            $file = $request->file($name);
            $disk = Storage::disk('s3');
            $destinationfiles = "pruebas";
            $fileNameOrigin = $file->getClientOriginalName();
            $filename = str_random(20) . "_" . $fileNameOrigin;
            $destino = $destinationfiles . '/' . $filename;
            $disk->put($destino, file_get_contents($file));
            $fecha =Carbon::now()->format('d');
            //models
            $archivos = new ArchivosModel();
            $servicios = new ServiciosModel();
            
            //guardar datos
            
            $last=ServiciosModel::all()->last()->id;
            
                $folio=$last+1;
              
            
            
            $archivos->url = $destino;
            $archivos->tipo=$name;
            $archivos->user_id = Auth::user()->id;
            $archivos->folio= ('F/'.$folio);
            $archivos->save();
        }
        }
        
    

    public function servicioDatos($name,$request){
        $servicios = new ServiciosModel();
       
            $last=ServiciosModel::all()->last()->id;
            
                $folio=$last+1;
        $fecha =Carbon::now()->format('d');
        
        
        $servicio = $request->input('tiposervicio');
        $contrato = $request->input('contrato');
        $linea    = $request->input('linea');
        $paquete  = $request->input('paquete');
        
        
        $servicios->servicio=$servicio;
        $servicios->contrato=$contrato;
        $servicios->linea=$linea;
        $servicios->paquete=$paquete;
        $servicios->estatus="PENDIENTE";
        $servicios->user_id = Auth::user()->id;
        $servicios->folio= ('F/'.$folio);
  
        $servicios->save();
    
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
