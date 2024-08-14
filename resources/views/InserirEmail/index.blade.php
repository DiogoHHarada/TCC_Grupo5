@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="css/InserirEmail.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
    <div class="container">

        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div style="color: red;">
                {{ session('error') }}
            </div>
        @endif
        
        <form id="login-form" action="{{ route('InserirEmail.enviar')}}" method="POST">
            @csrf
            <h1>Confirme que é você<span class="pendulum">!</span></h1>
            <div class="input-container">
                <input id="email" name="email" placeholder="Digite seu email" type="email" required>
                <img id="toggle-new-password" width="20" height="20" src="/img/user_icon.png" alt="Toggle Password Visibility" />
            </div>
        
            <button type="submit" class="submit-button">Enviar</button>

            <div class="return-link">
                <a href="#">Voltar para a tela principal</a>
            </div>
        </form>
    </div>
    <script src="/js/InserirEmail.js"></script>
@endsection