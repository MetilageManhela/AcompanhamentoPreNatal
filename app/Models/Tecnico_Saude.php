<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnico_Saude extends Model
{
   protected $fillable = ['id', 'nome','sexo','nr_bi', 'dataNascimento','morada','estadoCivil', 'created_at','updated_at'];
}





