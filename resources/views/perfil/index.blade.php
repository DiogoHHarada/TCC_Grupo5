@extends('layout.app')
@section('titulo', 'AtmoVision')
@section('conteudo')
    <link rel="stylesheet" href="/css/perfil.css">
    <div class="container">
        <form id="perfil-form" method="POST" action="{{ route('login.sair') }}">
            {{ csrf_field() }}
            <h1>Perfil</h1>

            <div class="input-container">
                <input id="email" placeholder="Email" type="email" name="email"  value="{{ $usuario->email }}" readonly required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon" />
            </div>

            <div class="input-container">
                <input id="password" placeholder="Senha" type="password" name="senha" value="********"  readonly>
                <img id="toggle-password" width="20" height="20" src="/img/show_password_icon.png" alt="Toggle Password Visibility" />
            </div>

            <div class="input-container">
                <input id="emailrec" placeholder="Email para recuperar senha" type="email" name="email_rec" value="{{ $usuario->email }}" readonly>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon" />
            </div>

            <div class="register-link">
                <p><a href="#">Editar</a></p>
            </div>

            <button type="submit" class="submit-button">Sair</button>
        </form>
    </div>
    <script src="/js/perfil.js"></script>
@endsection
