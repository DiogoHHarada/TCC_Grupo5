@extends('layout.app')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/login.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>
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

    <form action="{{ route('inseriremail.verificar.code') }}" method="POST">
        @csrf   
        <h1>Verificação de Código<span class="pendulum">!</span></h1>
            <div class="input-container">
                <input type="email" name="email" value="{{ old('email', $email) }}" readonly required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon"/>
            </div>

            <div class="input-container">
                <input id="password" type="password" name="code" placeholder="Digite o código de verificação:"required>
                <img id="toggle-password" width="20" height="20" src="/img/show_password_icon.png" alt="Toggle Password Visibility" />
            </div>

            <button type="submit" class="submit-button">Verificar Código</button>
        </div>
        <script src="/js/login.js'"></script>
    </form>
    
@endsection
