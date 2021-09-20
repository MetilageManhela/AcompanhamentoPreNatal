<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Projecto;
class Provincia extends Model
{
     protected $fillable=['abreviacao','nomeProvincia'];
   
    public function distritos(){
    return $this->hasMany('App\Models\Distrito');
    }
    
    public function beneficiados() {
    return $this->hasMany('App\Models\PostoAdministrativo');
    }
     //many to many---producto distrito
     public function projectos()
    {
     return $this->belongsToMany(Projecto::class,'projecto__provincias__distritos');
    }
    
}
