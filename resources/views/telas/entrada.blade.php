@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/Entrada.css">
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
       <div class="container">
            <div class="content">
                    <h1>Bem vindo<span class="pendulum">!</span></h1>
                    <img src="/img/logo_tcc.jpg" class="logo" alt="logo">
                    <div class="layout-button">
                        <button type="submit" class="button register">Cadastrar</button> 
                        <button type="submit" class="button login">Entrar</button>
                    </div>
                    <a class="return-link" href="#">Ir para página principal</a>
            </div>
        </div>
    <script src="/js/Entada.js"></script>
@endsection