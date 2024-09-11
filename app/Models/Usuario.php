<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Usuario as Authenticatable;

class Usuario extends Model
{
    protected $fillable = ['id','nome', 'email' , 'senha' , 'verificacao_codigo'];
}
