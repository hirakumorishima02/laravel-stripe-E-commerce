@extends('layouts.app')
@section('content')
<div class="row">
    <div class='input-field col s10 m10 l8 offset-s1 offset-m1 offset-l2'>
    	<h4>{{ $product->name }}</h4>

		<img width="100%" src="{{ $product->file_path }}" class="responsive-img wp-post-image">

		<p>{{ $product->description }}</p>

		<p>${{ $product->price }}</p>

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
    </div>
</div>
@endsection