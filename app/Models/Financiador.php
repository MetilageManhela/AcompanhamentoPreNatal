<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Financiador extends Model
{
     public function projectos(){
    return $this->hasMany('App\Models\Projecto');
    }
    
     protected $fillable=['id','descricao'];
     
     
     
}

