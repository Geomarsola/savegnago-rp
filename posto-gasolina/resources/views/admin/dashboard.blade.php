@extends('layouts.app')

@section('content')
<h1>Dashboard do Administrador</h1>

<h2>Total de Vendas por Frentista</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Frentista</th>
        <th>Total Vendido (R$)</th>
    </tr>
    @foreach($salesByUser as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>
                R$ {{ $user->sales->sum('total') }}
            </td>
        </tr>
    @endforeach
</table>

<h2>Total de Vendas por Produto</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Produto</th>
        <th>Quantidade Vendida</th>
        <th>Total (R$)</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->saleItems->sum('quantity') }}</td>
            <td>{{ $product->saleItems->sum(function($item){ return $item->quantity * $item->price; }) }}</td>
        </tr>
    @endforeach
</table>
@endsection