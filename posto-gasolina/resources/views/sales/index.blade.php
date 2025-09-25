@extends('layouts.app')

@section('content')
<h1>Vendas</h1>

<table border="1" cellpadding="10">
    <tr>
        @if(Auth::user()->role == 'admin')
        <th>Frentista</th>
        @endif
        <th>Produtos</th>
        <th>Total</th>
        <th>Data</th>
    </tr>
    @foreach($sales as $sale)
        <tr>
            @if(Auth::user()->role == 'admin')
            <td>{{ $sale->user->name }}</td>
            @endif
            <td>
                @foreach($sale->items as $item)
                    {{ $item->product->name }} x {{ $item->quantity }}<br>
                @endforeach
            </td>
            <td>R$ {{ $sale->total }}</td>
            <td>{{ $sale->created_at }}</td>
        </tr>
    @endforeach
</table>
@endsection