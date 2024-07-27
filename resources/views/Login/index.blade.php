@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/Login.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
    <div class="container">
        <form id="login-form">
            <h1>Bem vindo novamente<span class="pendulum">!</span></h1>
            <div class="input-container">
                <input id="email" placeholder="Email" type="email" required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon"/>
            </div>

            <div class="input-container">
                <input id="password" placeholder="Senha" type="password" required>
                <img id="toggle-password" width="20" height="20" src="/img/show_password_icon.png" alt="Toggle Password Visibility" />
                <a href="{{ route('InserirEmail')}}" class="lost">Esqueci minha senha</a>
            </div>

            <button type="submit" class="submit-button">Entrar</button>

            <div class="register-link">
                <p>Não está cadastrado ? <a href="#">Cadastrar</a></p>
            </div>

        </form>
    </div>
    <script src="/js/Login.js"></script>
@endsection