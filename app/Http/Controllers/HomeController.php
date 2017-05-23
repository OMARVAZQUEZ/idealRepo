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
    public function solicitudes()
    {
         $user = DB::table('servicios')
        ->join('archivos', 'servicios.folio', '=', 'archivos.folio')
        ->select('archivos.created_at','archivos.tipo','archivos.url', 'servicios.*')
        ->get();
        
       
        $data['user']=$user;
        $urls="https://s3.amazonaws.com/".env('AWS_BUCKET')."/";
        return view('solicitudes')->with('data', $data)->with('url', $urls);
    }
}
