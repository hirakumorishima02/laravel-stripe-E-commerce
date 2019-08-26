@extends('app')
@section('content')
    <h2>All Products</h2>
    <ul>
        @foreach($products as $product)
        <li><a href='products/{{ $product->id }}'>{{ $product->name }}</a></li>
        @endforeach
    </ul>
@endsection