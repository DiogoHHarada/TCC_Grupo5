@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo')  
    <link rel="stylesheet" href="/css/Cadastro.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap');
    </style>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="container">
        <form id="cadastro-form" action="{{route('Cadastro.store')}}" method="POST">
            @csrf
            <h1>Bem vindo<span class="pendulum">!</span></h1>
            <div class="input-container">
                <input id="nome" placeholder="Nome" type="text" name="nome" required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon" />
            </div>

            <div class="input-container">
                <input id="email" placeholder="Email" type="email"  name="email" required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon" />
            </div>

            <div class="input-container">
                <input id="password" placeholder="Senha" type="password" name="senha" required>
                <img id="toggle-password" width="20" height="20" src="/img/show_password_icon.png"
                    alt="Toggle Password Visibility" />
            </div>

            <div class="input-container">
                <!--comparação de senha-->
                <input id="passwordconf" placeholder="Confirmar Senha" type="password" naeme="" required>
                <img id="toggle-passwordconf" width="20" height="20" src="/img/show_password_icon.png"
                    alt="Toggle Password Visibility" />
            </div>

            <div class="input-container">
                <input id="emailrec" placeholder="Email para recuperar senha" type="email" required>
                <img width="20" height="20" src="/img/user_icon.png" alt="User Icon" />
            </div>

            <button type="submit" class="submit-button">Cadastrar</button>

            <div class="register-link">
                <p>Já está cadastrado? <a href="{{route('Login')}}">Login</a></p>
            </div>

        </form>
    </div>
    
    <script src="/js/Cadastro.js"></script>
@endsection