@extends('layout.app')
@section('titulo', 'AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/perfil.css">
    <div class="container">
        <form id="perfil-form" method="POST" action="{{ route('login.sair') }}">
            {{ csrf_field() }}
            <h1>Perfil</h1>

            <div class="input-container">
                <input id="nome" placeholder="Nome" type="text" name="nome" value="{{$usuario->nome}}" required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon" />
            </div>

            <div class="input-container">
                <input id="email" placeholder="Email" type="email" name="email"  value="{{ $usuario->email }}" readonly required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon" />
            </div>

            <div class="input-container">
                <input id="password" placeholder="Senha" type="password" name="senha" value="{{ $usuario->senha }}"  readonly>
                <img id="toggle-password" width="20" height="20" src="/img/show_password_icon.png" alt="Toggle Password Visibility" />
            </div>

            <div class="register-link">
                <p><a href="{{route('perfil.editar' , $usuario->id)}}">Editar</a></p>
            </div>

            <button type="submit" class="submit-button">Sair</button>
        </form>
        <a href="{{route('sobrenos')}}"> <button type="submit" class="submit-button">Voltar</button></a>
    </div>
    <script src="/js/perfil.js"></script>
@endsection
