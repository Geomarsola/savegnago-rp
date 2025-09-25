@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <!-- Cabeçalho -->
    <div class="text-center mb-4">
        <h1 class="text-primary fw-bold">Painel do Posto</h1>
        <p class="text-muted">Bem-vindo, <strong>{{ Auth::user()->name }}</strong>!</p>
    </div>

    <!-- Cards do Painel -->
    <div class="row">
        <!-- Produtos -->
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Produtos Disponíveis</h5>
                </div>
                <div class="card-body">
                    @if($products->count() > 0)
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Produto</th>
                                    <th>Categoria</th>
                                    <th>Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-muted">Nenhum produto cadastrado ainda.</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Ações -->
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Ações Rápidas</h5>
                </div>
                <div class="card-body d-grid gap-2">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Gerenciar Produtos</a>
                    <a href="{{ route('sales.index') }}" class="btn btn-outline-success">Registrar Venda</a>
                    <a href="{{ route('logout') }}" class="btn btn-outline-danger"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sair
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection