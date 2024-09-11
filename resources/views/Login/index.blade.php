@extends('layout.app')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/login.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
    <div class="container">
        <form id="login-form" action="{{route('login.entrar')}}" method="post">
            @csrf
            <h1>Bem vindo novamente<span class="pendulum">!</span></h1>
            <div class="input-container">
                <input id="email" placeholder="Email" type="email" name="email" required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon"/>
            </div>

            <div class="input-container">
                <input id="password" placeholder="Senha" type="password" name="senha" required>
                <img id="toggle-password" width="20" height="20" src="/img/show_password_icon.png" alt="Toggle Password Visibility" />
                <a href="{{ route('inseriremail')}}" class="lost">Esqueci minha senha</a>
            </div>

            <button type="submit" class="submit-button">Entrar</button>

            <div class="register-link">
                <p>Não está cadastrado ? <a href="{{ route('cadastro')}}">Cadastrar</a></p>
                <a class="return-link" href="#">Ir para página principal</a>

            </div>

        </form>
    </div>
    <script src="/js/login.js"></script>
@endsection