<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiado extends Model
{
     protected $table = 'beneficiados';
     protected $fillable = ['id', 'nome','morada', 'email','nuit', 'distrito','provincia','endereco','postoAdministrativo','sexo'];
     
     
       public function provincia()
    {
        return $this->belongsTo(Provincia::class); 
    }
}
