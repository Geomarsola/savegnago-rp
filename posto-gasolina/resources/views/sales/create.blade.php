@extends('layouts.app')

@section('content')
<h1>Registrar Venda</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form action="{{ route('sales.store') }}" method="POST">
    @csrf
    @foreach($products as $product)
        <div>
            <label>{{ $product->name }} (R$ {{ $product->price }})</label>
            <input type="number" name="products[{{ $product->id }}][quantity]" min="0" value="0">
            <input type="hidden" name="products[{{ $product->id }}][id]" value="{{ $product->id }}">
            <input type="hidden" name="products[{{ $product->id }}][price]" value="{{ $product->price }}">
        </div>
    @endforeach
    <button type="submit">Registrar Venda</button>
</form>
@endsection