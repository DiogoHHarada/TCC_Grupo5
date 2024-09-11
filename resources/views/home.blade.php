@extends('layout.app')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/home.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
    <div class="container">
        <div class="content">
                <h1>Bem vindo<span class="pendulum">!</span></h1>
                <img src="/img/logo_tcc.jpg" class="logo" alt="logo">
                <div class="layout-button">
                    <a href="{{route('cadastro')}}"><button type="submit" class="button register" >Cadastrar</button></a>  
                    <a href="{{route('login')}}"> <button type="submit" class="button login">Entrar</button></a>
                </div>
                <a class="return-link" href="#">Ir para página principal</a>
        </div>
    </div>
    <script src="/js/home.js"></script>
@endsection