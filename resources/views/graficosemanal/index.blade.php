@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo') 
    <link rel="stylesheet" href="/css/graficosemanal.css">
    <link rel="stylesheet" href="/css/cabecalho.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
    <div class="main-container">
        <div class="container left-panel">
            <div class="temperature-summary">
                <div class="max-temp">Máx: {{ $maxTemperature }}°C</div>
                <div class="min-temp">Min: {{ $minTemperature }}°C</div>
            </div>
            <table class="font-table-color">
                @foreach($weeklyData as $data)
                <tr>
                    <th>{{ \Carbon\Carbon::parse($data->date)->format('d/m') }}</th>
                    <td class="right-side">{{ number_format($data->avg_temp, 1) }}°C</td>
                </tr>
                @endforeach
               
               
            </table>
            <div class="button-group">
                <a href="{{route('grafico.diario')}}"> <button class="daily">Diário </button> </a>
                <button class="weekly">Semanal(atual)</button>
            </div>
        </div>
        <div class="right-panel">
        <h1 class="colegio">Colégio Técnico</h1>
            <p class="location">Bauru, SÃO PAULO</p>
            <div class="current-temperature">{{ number_format($averageTemperature, 1) }}°C</div>
            <div class="conditions">
                 Umidade: {{ number_format($averageHumidity, 1) }}%<br>
               
            </div>
        <div class="container">
            <h2 class = "font-table-color">Gráfico (hoje)</h2>
            <div class="img"><iframe src="http://localhost:3000/d-solo/ae1nb2o7j41kwf/semanal?orgId=1&from=now-7d&to=now&panelId=1" width="550" height="240" frameborder="0"></iframe></div>  
        </div>
    </div>
    </div>
@endsection