@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo')    
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
    <link rel="stylesheet" href="/css/graficodiario.css">
    <link rel="stylesheet" href="/css/cabecalho.css">
    <div class="main-container">
            <div class="container left-panel">
                <div class="temperature-summary">
                    <div class="max-temp">Máx.: 35°C</div>
                    <div class="min-temp">Min.: 19°C</div>
                </div>
                <table class="font-table-color">
                    <tr>
                        <th heigh="50">Agora</th>
                        <td class="right-side">18°C</td>
                    </tr>
                    <tr>
                        <th heigh="50">14h00</th>
                        <td class="right-side">17°C</td>
                    </tr>
                    <tr>
                        <th heigh="50">15h00</th>
                        <td class="right-side">16°C</td>
                    </tr>
                    <tr>
                        <th heigh="50">16h00</th>
                        <td class="right-side">16°C</td>
                    </tr>
                    <tr>
                        <th heigh="50">17h00</th>
                        <td class="right-side">17°C</td>
                    </tr>
                    <tr>
                        <th heigh="50">18h00</th>
                        <td class="right-side">18°C</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="see-more"><a href="#">Ver mais...</a></td>
                    </tr>
                </table>
                <div class="button-group">
                    <button class="daily">Diário(atual)</button>
                    <button class="weekly">Semanal</button>
                </div>
            </div>
            <div class="right-panel">
            <h1 class="colegio">Colégio Técnico</h1>
                <p class="location">Bauru, SÃO PAULO</p>
                <div class="current-temperature">17°C</div>
                <div class="conditions">
                    Chuva: 0%; Umidade: 43%<br>
                    Domingo de sol; Vento: 6 km/h
                </div>
            <div class="container2">
                <h2 class = "font-table-color">Gráfico (hoje)</h2>
                <div class="img">
                    <!--<img src="/mnt/data/GraficoHoje.jfif" alt="Gráfico de temperatura do dia" width="100%">-->
                </div> 
            </div>
        </div>
    </div>
@endsection