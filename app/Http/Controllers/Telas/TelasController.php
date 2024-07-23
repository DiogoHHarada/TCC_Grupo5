<?php

namespace App\Http\Controllers\Telas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelasController extends Controller
{
    //
    public function entrada() {
        return view('telas.entrada');
    }

    public function login() {
        return view('telas.login');
    }
}
