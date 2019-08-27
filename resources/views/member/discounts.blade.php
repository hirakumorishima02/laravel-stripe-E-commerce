@extends('layouts.app')
@section('content')

<h4>Discounts Coupon Page</h4>
<table class="table striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Coupon</th>
      <th scope="col">Coupon ID</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>初回購入割引</td>
      <td><input value="MFcT2qRs" onclick="this.select(0,this.value.length)"></td>
      <td>10% Descount</td>
    </tr>
    <tr>
      <td>2回目購入割引</td>
      <td><input value="22IYuWhq" onclick="this.select(0,this.value.length)"></td>
      <td>5% Descount</td>
    </tr>
    <tr>
      <td>1周年記念割引</td>
      <td><input value="YUF9Gmtc" onclick="this.select(0,this.value.length)"></td>
      <td>5% Descount</td>
    </tr>
  </tbody>
</table>
@endsection