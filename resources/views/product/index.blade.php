@extends('layouts.app')
@section('content')
<div class="section">
    <div class="row">
        <div class="col s12">
            <div class="section">
                <div class="col s12">
                    <span class="title">Our Products</span>
                </div>
                @foreach($products as $product)
                <div class="col s12 m6 l4">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <a href="products/{{ $product->id }}">
                          <img width="305" height="229" src="https://adbeus.com/wp-content/uploads/2016/11/prrnmzis3siruz2gv6tm-305x229.jpg" class="responsive-img wp-post-image">
                          <span class="card-title home">{{ $product->name }}</span>
                          <p class="card-title home">${{ $product->price }}</p>
                        </a>
                      </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection