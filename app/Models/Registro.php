<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = ['id','temperatura', 'umidade' , 'dir_vento' , 'vel_vento', 'data_hora'];
}

