@extends('app')
@section('content')
@if (count($cart) == 0)
    <p>Your cart is currently empty</p>
@else
    <table class="table table-border">
      <thead>
      <tr>
          <th></th>
          <th>Name</th>
          <th>Price</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($cart as $item)
        <tr>
        <td><a href="/cart/remove/{{ $item->id }}">x</a></td>
        <td>{{ $item->product->name }}</td>
        <td>${{ $item->product->price }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>

@endif
@endsection