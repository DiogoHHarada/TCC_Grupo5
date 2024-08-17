<!DOCTYPE html>
<html lang="en">
        <head> <link rel="stylesheet" href="/css/Cabecalho.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> @yield('titulo') </title>
    </head>
    <body>
    
    <header class="header">
        <div class="menu-icon">
            <img src="/img/menu_icon.png" alt="Menu">
            <div class="dropdown-content principal">
                <div class="dropdown-group">
                    <span class="dropdown-title">Clima</span>
                    <a href="#">Previsão do Tempo</a>
                    <a href="#">Mapas Climáticos</a>
                </div>
                <div class="dropdown-group">
                    <span class="dropdown-title">Home</span>
                    <a href="{{ route('SobreNos')}}">Sobre</a>
                    <a href="#">Contato</a>
                </div>
                <div class="dropdown-group">
                    <span class="dropdown-title">Cadastro</span>
                    <a href="{{ route('Cadastro')}}">Novo Usuário</a>
                    <a href="{{ route('Login')}}">Login</a>
                </div>
                <div class="dropdown-group">
                    <span class="dropdown-title">Gráficos</span>
                    <a href="#">Temperatura</a>
                    <a href="#">Umidade</a>
                </div>
            </div>
        </div>
        <nav class="nav-menu">
            <div class="dropdown">
                <a href="#">Clima</a>
                <div class="dropdown-content">
                    <a href="#">Previsão do Tempo</a>
                    <a href="#">Mapas Climáticos</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#">Home</a>
                <div class="dropdown-content">
                    <a href="{{ route('SobreNos')}}">Sobre</a>
                    <a href="#">Contato</a>
                </div>
            </div>
            <a href="#" class="logo">atmovision</a>
            <div class="dropdown">
                <a href="#">Cadastro</a>
                <div class="dropdown-content">
                    <a href="{{ route('Cadastro')}}">Novo Usuário</a>
                    <a href="{{ route('Login')}}">Login</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#">Gráficos</a>
                <div class="dropdown-content">
                    <a href="#">Temperatura</a>
                    <a href="#">Umidade</a>
                </div>
            </div>
        </nav>
        <div class="user-icon">
            <img src="/img/user_icon (1).png" alt="Conta">
        </div>
    </header>
