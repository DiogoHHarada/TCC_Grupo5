@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/Login.css">
    <div class="container">
        <form id="login-form">
            <h1>Entre na sua conta</h1>
            <div class="input-container">
                <input id="email" placeholder="Email" type="email" required>
                <img width="20" height="20" src="images/white_user_icon.png" alt="User Icon"/>
            </div>

            <div class="input-container">
                <input id="password" placeholder="Senha" type="password" required>
                <img width="20" height="20" src="images/white_password_icon.png" alt="Password Icon"/>
                <a href="#">Esqueci minha senha</a>
            </div>

            <button type="submit" class="submit-button">Entrar</button>

            <div class="register-link">
                <p>Não está cadastrado ? <a href="#">Cadastrar</a></p>
            </div>
        </form>
    </div>
    <script src="/js/Login.js"></script>
@endsection