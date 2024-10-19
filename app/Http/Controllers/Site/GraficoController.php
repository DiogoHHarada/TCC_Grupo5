<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GraficoController extends Controller
{
    //
    public function diario() {
        return view('graficodiario.index');
    }

    public function semanal() {
        return view('graficosemanal.index');
    }
}
