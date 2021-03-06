<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArchivosModel;
use App\Models\ServiciosModel;
use App\User;
use App\Models;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    
    
    
    public function misarchivos()
    {
        $user_id = Auth::user()->id;
        $data = DB::table('servicios')
        ->orderBy('servicios.id','asc')
        ->groupBy('servicios.folio')
        ->where('servicios.user_id' ,'=',$user_id )
        ->join('archivos', 'servicios.folio', '=', 'archivos.folio')
        ->select('archivos.created_at','archivos.tipo','archivos.url', 'servicios.*')
        ->get();
        
        
        
        $archivos = DB::table('servicios')
        ->where('servicios.user_id' ,'=',$user_id )
        ->join('archivos', 'servicios.folio', '=', 'archivos.folio')
        ->select('archivos.created_at','archivos.tipo','archivos.url', 'servicios.*')
        ->orderBy('archivos.id')
        ->get();
        //$data['user']=$user;
        $url="https://s3.amazonaws.com/".env('AWS_BUCKET')."/";
        return view('user')->with('data', $data)->with('url', $url)->with('archivos', $archivos);
        
        
    }
    public function solicitudes()
    {
        
       $data = DB::table('servicios')
       ->orderBy('servicios.id','asc')
       ->groupBy('servicios.folio')
        ->join('archivos', 'servicios.folio', '=', 'archivos.folio')
        ->join('users', 'servicios.user_id', '=', 'users.id')
        ->select('archivos.created_at','archivos.tipo','archivos.url', 'servicios.*','users.name')
        ->get();
        
        
        
        $archivos = DB::table('servicios')
        ->join('archivos', 'servicios.folio', '=', 'archivos.folio')
        ->select('archivos.created_at','archivos.tipo','archivos.url', 'servicios.*')
        ->orderBy('archivos.id')
        ->get();
        //$data['user']=$user;
        
        $url="https://s3.amazonaws.com/".env('AWS_BUCKET')."/";
        return view('solicitudes')->with('data', $data)->with('url', $url)->with('archivos', $archivos);
        
    }
    public function update(request $request)
    {
        
     // $last=ServiciosModel::all()->last()->id;
        //$flight = App\ServiciosModel::find(1);
       
      $id = $request->id;
      $servicios = new ServiciosModel();
      $affectedRows = ServiciosModel::where('id', '=', $id)->update(array('estatus' => "AUTORIZADA"));
      return redirect('solicitudes')->with('key', 'You have done successfully');
      
        
        
//         $user = DB::table('servicios') ->select('archivos.created_at','archivos.tipo','archivos.url', 'servicios.*')
//         ->get();
//         $servicios->estatus = 'AUTORIZADA';
//         $servicios->save();
        
        
        //return view('solicitudes')->with('data', $data)->with('url', $url);
    
    }
}
