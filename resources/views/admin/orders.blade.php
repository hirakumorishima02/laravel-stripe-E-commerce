@extends('layouts.app')
@section('content')
<h2>Admin Orders Page</h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">order_number</th>
      <th scope="col">email</th>
      <th scope="col">billing_name</th>
      <th scope="col">billing_address</th>
      <th scope="col">billing_city</th>
      <th scope="col">billing_state</th>
      <th scope="col">billing_zip</th>
      <th scope="col">billing_country</th>
      <th scope="col">order date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <td>{{$order->order_number}}</td>
      <td>{{$order->email}}</td>
      <td>{{$order->billing_name}}</td>
      <td>{{$order->billing_address}}</td>
      <td>{{$order->billing_city}}</td>
      <td>{{$order->billing_state}}</td>
      <td>{{$order->billing_zip}}</td>
      <td>{{$order->billing_country}}</td>
      <td>{{$order->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  {!! Form::close() !!}
@endsection