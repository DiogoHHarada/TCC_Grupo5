@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/Login.css">
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

    <form action="{{ route('InserirEmail.verificar.code') }}" method="POST">
        @csrf
        <!--<label for="email">E-mail:</label>
        <input type="email" name="email" value="{{ $email }}" readonly required>
        <label for="code">Digite o cÃ³digo de verificaÃ§Ã£o:</label>
        <input type="text" name="code" required>
        <button type="submit">Verificar CÃ³digo</button> -->
        
        <h1>Verificação de Código<span class="pendulum">!</span></h1>
            <div class="input-container">
                <input type="email" name="email" value="{{ $email }}" readonly required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon"/>
            </div>

            <div class="input-container">
                <input id="password" type="password" name="code" placeholder="Digite o código de verificação:"required>
                <img id="toggle-password" width="20" height="20" src="/img/show_password_icon.png" alt="Toggle Password Visibility" />
            </div>

            <button type="submit" class="submit-button">Verificar Código</button>
        </div>
        <script src="/js/Login.js'"></script>
    </form>
    
@endsection
