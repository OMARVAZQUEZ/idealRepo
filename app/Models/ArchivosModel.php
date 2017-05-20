<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivosModel extends Model
{
    protected $table='archivos';
    public function  geturlAttribute($value){

        return "https://s3.amazonaws.com/".env('AWS_BUCKET')."/".$value;
    }

}
