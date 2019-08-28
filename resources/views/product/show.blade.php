@extends('layouts.app')
@section('content')
<div class="row">
    <div class='col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
    	<h4>{{ $product->name }}</h4>
    </div>
    <div class='input-field col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
		<p>{{ $product->description }}</p>
    </div>
    <div class='input-field col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
		<p>${{ $product->price }}</p>
    </div>
    <div class='input-field col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
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