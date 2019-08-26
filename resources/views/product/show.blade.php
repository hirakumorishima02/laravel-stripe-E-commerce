@extends('app')
@section('content')
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
	{!! Form::open(['url' => '/cart/store']) !!}
	<input
	  type="hidden"
	  name="product_id" 
	  value="{{ $product->id }}"/>
	<button 
	  type="submit" 
	  class="btn btn-primary">Add to Cart
	</button>
	{!! Form::close() !!}
@endsection