@extends('layout.app')
@section('titulo','AtmoVision')
@section('conteudo')  
    <link rel="stylesheet" href="/css/Cadastro.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="container">
        <form id="perfil-form" method="POST" action="{{ route('perfil.atualizar', $usuario->id) }}">
            {{ csrf_field() }}
            @method('PUT')
            <h1>Perfil</h1>

            <div class="input-container">
                <input id="nome" placeholder="Nome" type="text" name="nome" value="{{ old('nome', $usuario->nome) }}" >
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon" />
                @error('nome')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="input-container">
                <input id="email" placeholder="Email" type="email" name="email"  value="{{old('email' ,$usuario->email) }}" readonly >
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon" />
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="input-container">
                <input id="password" placeholder="Senha" type="password" name="senha" >
                <img id="toggle-password" width="20" height="20" src="/img/show_password_icon.png"
                alt="Toggle Password Visibility" />
            </div>

            <div class="input-container">
                <!--comparação de senha-->
                <input id="passwordconf" placeholder="Confirmar Senha" type="password" name="senha_confirmation" >
                <img id="toggle-passwordconf" width="20" height="20" src="/img/show_password_icon.png"
                    alt="Toggle Password Visibility"/>
            </div>

            <button type="submit" class="submit-button">Alterar</button>
        </form>
        <a href="{{route('login.perfil')}}"> <button type="submit" class="submit-button">Voltar</button></a>
    </div>
    <script src="/js/cadastro.js"></script>
@endsection