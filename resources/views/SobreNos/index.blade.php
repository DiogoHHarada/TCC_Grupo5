@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo') 
    <link rel="stylesheet" href="/css/sobrenos.css">

    <!-- Primeira Seção -->
    <div class="grid-layout">
        <div class="retangulo11">
            <h1 class="jump">Atm Vision Project</h1>
            <p>
                Uma torre metelógica construída com arduíno e com um site mostrando em tempo real os resultados obtidos pela torre.
            </p>
        </div>
        <div class="retangulo22">
            <img src="/img/img_project.jpg" alt="Project Photo">
        </div>
    </div>

    <!-- Animação 1-->
    <div class="animation">
        <div class="scroll-wrapper">
            <div class="scroll-text">- atmos vision - atmos vision - atmos vision - atmos vision - atmos vision - atmos vision </div>
        </div>
    </div>

    <!-- Segunda Seção -->
    <div class="grid-layout">
        <!-- The Team -->
        <div class="retangulo2">
            <img src="/img/img_team.jpg" alt="Team Photo">
        </div>
        <div class="retangulo1 light">
            <h1 class="jump">Atm Vision Team</h1>
            <p>
                Uma torre metelógica construída com harduíno e com um site mostrando em tempo real os resultados obtidos pela torre.
            </p>
        </div>

        <!-- Project Manager -->
        <div class="retangulo1">
            <h1 class="jump">Orientador Atm Vision</h1>
            <p>
                Uma torre metelógica construída com harduíno e com um site mostrando em tempo real os resultados obtidos pela torre.
            </p>
        </div>
        <div class="retangulo2">
            <img src="images/team_folder/img_andre.jpg" alt="Team Photo">
        </div>

        <!-- UX/UI Designer -->
        <div class="retangulo2">
            <img src="images/team_folder/img_matheus.jpg" alt="Team Photo">
        </div>
        <div class="retangulo1 light">
            <h1 class="jump">Product Owner</h1>
            <p>
                Uma torre metelógica construída com harduíno e com um site mostrando em tempo real os resultados obtidos pela torre.
            </p>
        </div>

        <!-- Developer Manager -->
        <div class="retangulo1">
            <h1 class="jump">Designer Interface</h1>
            <p>
                Uma torre metelógica construída com harduíno e com um site mostrando em tempo real os resultados obtidos pela torre.
            </p>
        </div>
        <div class="retangulo2">
            <img src="images/team_folder/img_ellen.jpg" alt="Team Photo">
        </div>

        <!-- Animação 2-->
        <div class="animation">
            <div class="scroll-wrapper">
                <div class="scroll-text">- atmos vision - atmos vision - atmos vision - atmos vision - atmos vision - atmos vision </div>
            </div>
        </div>
    </div>

    <!-- Identificação -->
    <div class="identidade">
        <div class="retangulo-identidade"></div>
        <div class="retangulo-identidade"></div>
        <div class="retangulo-identidade"></div>
        <div class="retangulo-identidade"></div>        
    </div>
    <script src="/js/sobrenos.js"></script>
@endsection