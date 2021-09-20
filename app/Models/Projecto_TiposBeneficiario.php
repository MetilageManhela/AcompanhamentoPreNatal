<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projecto_TiposBeneficiario extends Model
{
    protected $fillable=['projecto_id','provincia_id','id'];
    
         public function projecto()
 {
    return $this->belongsTo('App\Models\Projecto');
 }
       public function distrito()
 {
    return $this->belongsTo('App\Models\Distrito');
    
 }
      public function provincia()
 {
    return $this->belongsTo('App\Models\Provincia');
    
 }
}
