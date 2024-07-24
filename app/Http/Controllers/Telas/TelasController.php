<?php

namespace App\Http\Controllers\Telas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelasController extends Controller
{
    //
    public function entrada() {
        return view('telas.Entrada');
    }

    public function login() {
        return view('telas.Login');
    }

    public function redefinir() {
        return view('telas.RedefinirSenha');
    }
}
