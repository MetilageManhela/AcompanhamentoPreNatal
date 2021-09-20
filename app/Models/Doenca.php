<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doenca extends Model
{
    protected $fillable = ['id','descricao', 'created_at','updated_at'];
}
