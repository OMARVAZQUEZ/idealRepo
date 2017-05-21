<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiciosModel extends Model
{
    protected $table='servicios';
    public function  geturlAttribute($value){

        return "https://s3.amazonaws.com/".env('AWS_BUCKET')."/".$value;
    }

}
