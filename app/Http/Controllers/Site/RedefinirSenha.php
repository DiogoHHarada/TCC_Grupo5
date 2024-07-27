<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedefinirSenha extends Controller
{
    //
    public function index() {
        // a visão que pede usuário e senha
        
        return view('RedefinirSenha.index');
    }
}
