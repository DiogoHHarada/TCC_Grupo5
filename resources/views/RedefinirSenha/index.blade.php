@extends('layout.app')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/RedefinirSenha.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
    <div class="container">
        <form id="login-form" action = "{{ route('redefinirsenha.redefinir' , $usuario->id)}}" method="POST">
            @csrf
            @method('PUT')
            <h1>Redefinindo sua senha<span class="dots"></span></h1>
            <div class="input-container">
                <input id="new-password" placeholder="Nova senha" type="password" name="password" required>
                <img id="toggle-new-password" width="20" height="20" src="/img/show_password_icon.png" alt="Toggle Password Visibility" />
            </div>
            <div class="input-container">
                <input id="confirm-password" placeholder="Confirme a senha" type="password" name="password_confirmation" required>
                <img id="toggle-confirm-password" width="20" height="20" src="/img/show_password_icon.png" alt="Toggle Password Visibility" />
            </div>
            <div id="error-message" class="error-message"></div>
            <button type="submit" class="submit-button">Redefinir</button>
            <div class="register-link">
                <a href="#">Voltar para a tela principal</a>
            </div>
        </form>
    </div>
    <script src="/js/redefinirsenha.js"></script>
@endsection