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
                          <img width="100%" src="{{ $product->file_path }}" class="responsive-img wp-post-image">
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