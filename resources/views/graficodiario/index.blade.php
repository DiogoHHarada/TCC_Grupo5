@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo')    
    <link rel="stylesheet" href="/css/graficodiario.css">
    <link rel="stylesheet" href="/css/cabecalho.css">
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
    
    <div class="main-container">
            <div class="container left-panel">
                <div class="temperature-summary">
                    <div class="max-temp">Máx:  {{ $maxTemp }}°C</div>
                    <div class="min-temp">Min:  {{ $minTemp }}°C</div>
                </div>

                 <table class="font-table-color">
                @foreach($historico as $registro)
                    <tr>
                        <th height="50">{{ \Carbon\Carbon::parse($registro->data_hora)->format('H\h00') }}</th>
                        <td class="right-side">{{ $registro->temperatura }}°C</td>
                    </tr>
                @endforeach
                
            </table>
       
                <div class="button-group">
                    <button class="daily">Diário(atual)</button>
                  <a href="{{route('grafico.semanal')}}"> <button class="weekly">Semanal</button> </a>  
                </div>
            </div>
            <div class="right-panel">
            <h1 class="colegio">Colégio Técnico</h1>
                <p class="location">Bauru, SÃO PAULO</p>
                <div class="current-temperature">{{ $temperaturaAtual }}°C</div>
                <div class="conditions">
                    Umidade: {{ $umidadeAtual }}%<br>
                    
                </div>
            <div class="container2">
                <h2 class = "font-table-color">Gráfico (hoje)</h2>
                <div class="img">
                <iframe src="http://localhost:3000/d-solo/be11xdrgidy4gb/tcc?orgId=1&from=1728374541000&to=1728375621000&panelId=1" width="550" height="240" frameborder="0"></iframe>
                </div> 
            </div>
        </div>
    </div>
@endsection