<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro;

class GraficoController extends Controller
{
    //
    public function diario() {

        // Obtendo o maior e menor valor de temperatura nas Últimas horas (exemplo: Últimas 6 horas)
        $maxTemp = Registro::where('data_hora', '>=', now()->subHours(6))->max('temperatura');
        $minTemp = Registro::where('data_hora', '>=', now()->subHours(6))->min('temperatura');
        
        // Obtendo o Último registro de temperatura e umidade
        $ultimoRegistro = Registro::latest('data_hora')->first();

        return view('graficodiario.index', [
            'maxTemp' => $maxTemp ?? 'N/A',
            'minTemp' => $minTemp ?? 'N/A',
            'temperaturaAtual' => $ultimoRegistro->temperatura ?? 'N/A',
            'umidadeAtual' => $ultimoRegistro->umidade ?? 'N/A',
            'historico' => Registro::orderBy('data_hora', 'desc')->take(5)->get(),  // Últimos 5 registros
        ]);
       
    }
    
    public function semanal() {
        // Obtendo as médias diárias de temperatura e umidade
      $weeklyData = Registro::selectRaw('DATE(data_hora) as date, MAX(temperatura) as max_temp, MIN(temperatura) as min_temp, AVG(temperatura) as avg_temp, AVG(umidade) as avg_humidity')
        ->groupByRaw('DATE(data_hora)')
        ->orderBy('date', 'desc')
        ->limit(7)
        ->get();

        $maxTemperature = $weeklyData->max('max_temp');
        $minTemperature = $weeklyData->min('min_temp');
        $averageTemperature = $weeklyData->avg('avg_temp');
        $averageHumidity = $weeklyData->avg('avg_humidity');

        return view('graficosemanal.index', compact('weeklyData', 'averageTemperature', 'averageHumidity', 'maxTemperature', 'minTemperature'));
    } 
} 