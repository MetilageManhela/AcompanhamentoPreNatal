<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Financiador;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\BeneficiarioTipo;
use App\Models\File;
class Projecto extends Model

{
      public function financiador()
     {
       return $this->belongsTo(Financiador::class);
     }
    
     protected $fillable=['id','descricao','arquivos','observacao','dataInicio','objectivo','dataTermino','financiador_id','orcamento','moeda'];
     
     //many to many Projecto provincias
      public function provincias()
    {
     return $this->belongsToMany(Provincia::class,'projecto__provincias__distritos');
    }
    
      public function distritos()
    {
     return $this->belongsToMany(Distrito::class,'projecto__provincias__distritos');
    }
      public function tiposBeneficiario()
     {
     return $this->belongsToMany(BeneficiarioTipo::class,'projecto__tipos_beneficiarios');
     }
     
      public function files()
     {
     return $this->hasMany(File::class);
    }
    //um projecto tem varios fornecedores
     public function financiadores()
     {
     return $this->belongsToMany(Financiador::class,'projecto__financiadors');
     }
    
}

  