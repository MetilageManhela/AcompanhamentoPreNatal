<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\Projecto;
class Distrito extends Model
{
    protected $fillable=['abreviacao','nomeDistrito','provincia_id','id'];
      public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }
    
    public function postoAdministrativos(){
    return $this->hasMany('App\Models\PostoAdministrativo');
    }
   

    
}
