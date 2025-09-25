<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posto de Gasolina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light d-flex flex-column justify-content-center align-items-center vh-100">
    
    <div class="text-center mb-4">
        <img src="{{ asset('images/logo-posto.png') }}" alt="Logo Posto" width="180">
        <h1 class="mt-3 text-success">Bem-vindo ao Posto de Gasolina</h1>
        <p class="text-muted">Sistema de controle de vendas</p>
    </div>

    <div class="d-flex gap-3">
        <a href="{{ route('login') }}" class="btn btn-success btn-lg">Entrar</a>
        <a href="{{ route('register') }}" class="btn btn-outline-success btn-lg">Cadastrar</a>
    </div>

</body>
</html>