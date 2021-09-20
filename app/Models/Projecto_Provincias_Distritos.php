<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projecto_Provincias_Distritos extends Model
{
    protected $fillable=['projecto_id','beneficiario_tipo_id','id'];
    
         public function projecto()
         {
        return $this->belongsTo('App\Models\Projecto');
         }
         
       public function tipoBeneficiario()
        {
        return $this->belongsTo('App\Models\BeneficiarioTipo');
    
        }
   
}
