<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestante extends Model
{
    protected $fillable = ['id', 'nr_bi','nome','dataNascimento','morada','estadoCivil','nrFilhos','created_at','updated_at'];
    				

}
