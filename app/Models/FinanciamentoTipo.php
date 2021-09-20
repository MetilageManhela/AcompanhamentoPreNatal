<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanciamentoTipo extends Model
{
    protected $fillable=['id','percentagem','nome','descricao'];
}
