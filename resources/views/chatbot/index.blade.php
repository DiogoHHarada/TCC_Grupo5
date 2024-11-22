@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo') 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
    <link rel="stylesheet" href="/css/chatbot.css">
    <link rel="stylesheet" href="/css/cabecalho.css">
    <div class="dropdown">
        <div class="chat-container">
            <div class="messages" id="message-container">
                    <div class="message received fade-in">Como posso te ajudar?</div>
            </div>
            <div class="buttons">
                <button onclick="addMessageTemperatura()">Temperatura</button>
                <button onclick="addMessageUmidade()">Umidade</button>
                <button onclick="addMessageGrafico()">Gráfico</button>
                <a href="{{ route('sobrenos')}}"><button>Sair</button></a>
            </div>
        </div>
    </div>
    <script src="/js/chatbot.js"></script>
@endsection