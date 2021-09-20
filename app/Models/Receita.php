<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
   protected $fillable = ['id', 'descricao','observacao', 'created_at','updated_at'];
}