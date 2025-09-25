<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posto de Gasolina</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container-home">
        <!-- Logo -->
        <img src="{{ asset('images/foto3.jpg') }}" alt="Auto Posto Savegnago" class="logo">

        <!-- Botões -->
        @if(Auth::check())
            <p>Olá, {{ Auth::user()->name }}</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn" type="submit">Sair</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn">Login</a>
            <a href="{{ route('register') }}" class="btn">Registrar</a>
        @endif
    </div>
</body>
</html>