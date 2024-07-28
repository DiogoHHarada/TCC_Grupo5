<!DOCTYPE html>
<html>
<head>
    <title>Verificar Código</title>
</head>
<body>
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
        <label for="email">E-mail:</label>
        <input type="email" name="email" value="{{ $email }}" readonly required>
        <label for="code">Digite o código de verificação:</label>
        <input type="text" name="code" required>
        <button type="submit">Verificar Código</button>
    </form>
</body>
</html>
