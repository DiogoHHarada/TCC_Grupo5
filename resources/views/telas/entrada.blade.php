@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/entrada.css">
    <div class="container">
        <div class="content">
                <h1>Bem vindo<span class="pendulum">!</span></h1>
                <div class="box-logo"><img ></div>
                <div class="layout-button">
                    <button type="submit" class="button register">Cadastrar</button> 
                    <button type="submit" class="button login">Entrar</button>
                </div>
                <p class="return-link">Voltar para página principal</p>
        </div>
    </div>
    <script src="/js/entada.js"></script>
@endsection