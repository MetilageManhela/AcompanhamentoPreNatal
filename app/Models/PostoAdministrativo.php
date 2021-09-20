<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Distrito;

class PostoAdministrativo extends Model
{
     protected $fillable=['id','nomePostoAdministrativo','distrito_id'];
      
     public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }
}
