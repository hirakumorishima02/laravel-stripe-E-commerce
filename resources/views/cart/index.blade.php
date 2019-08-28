@extends('layouts.app')
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
<div class="payment-errors alert alert-danger"
style="display: none;">
</div>
{!! Form::open([
  'route' => 'cart.complete',
  'class' => 'form',
  'id' => 'purchase-form'
]) !!}

<!---------------------------------------------------------------------
                            Billing Information
--------------------------------------------------------------------->
<div class="row">
  <div class="col s6 m5 l4">
    <label for="billing_name" class="control-label">Billing Name</label>
    <input type="text"
      class="form-control"
      name='billing_name'
      id="billing_name"
      required autofocus data-stripe="billing_name"
      value="John Williams">
  </div>
</div>


<div class='row'>
  <div class='col s4 m3'>
          <label for="billing_address">Billing Adress</label>
          <input type="text" size="3"
            class="form-control"
            name="billing_address"
            data-stripe="billing_address"
            id="billing_address"
            value="24 Wholley st"
            required>
  </div>
    <div class='col s4 m4'>
          <label for="card-month">Billing City</label>
          <input type="text" size="4"
            class="form-control"
            name="billing_city" data-stripe="billing_city"
            id="billing_city"
            value="Bayswater Perth"
            required>
  </div>
  <div class='col s4 m2'>
          <label for="billing_zip" class="billing_zip">
            Billing Zip
          </label>
          <input type="text"
            name='billing_zip'
            class="form-control"
            id="billing_zip"
            placeholder="Coupon Code"
            autofocus data-stripe="billing_zip"
            name="billing_zip"
            value="6053">
  </div>
  <div class='col s4 m2'>
          <label for="billing_state">Billing State</label>
          <input type="text"
            name='billing_state'
            class="form-control" id="billing_state"
            data-stripe="billing_state"
            size="6"
            value="Westen Australlia"
            required
            >
  </div>
  <div class='col s4 m2'>
          <label for="billing_country">Billing Country</label>
          <input type="text"
            name='billing_country'
            class="form-control" id="billing_country"
            data-stripe="billing_country"
            size="6"
            value="Australlia"
            required
            >
  </div>
</div>

<!---------------------------------------------------------------------
                            Credit Card Information
--------------------------------------------------------------------->
<div class="form-group">
  <div class="row">
    <div class='col s7 m5'>
      <label for="card-number" class="control-label">
        Credit Card Number
      </label>
      <input type="text"
        class="form-control"
        id="card-number"
        name="cardnumber"
        placeholder="Valid Card Number"
        required autofocus data-stripe="number"
        value="4242424242424242">
    </div>
  </div>
</div>


<div class="form-group">
  <div class="row">
    <div class='col s4 m2'>
      <label for="card-month">Expiration Date</label>
      <input type="text" size="3"
        class="form-control"
        name="exp_month"
        data-stripe="exp-month"
        placeholder="MM"
        id="card-month"
        value="{{ App::environment() == 'local' ? '12' : '' }}"
        required>
    </div>
    <div class='col s4 m2'>
      <label for="card-cvc">Expiration Year</label>
      <input type="text" size="4"
        class="form-control"
        name="exp_year" data-stripe="exp-year"
        placeholder="YYYY" id="card-year"
        value="{{ App::environment() == 'local' ? '2020' : '' }}"
        required>
    </div>
    <div class='col s4 m2'>
      <label for="card-month">CVC</label>
      <input type="text"
        class="form-control" id="card-cvc"
        placeholder=""
        size="6"
        value="{{ App::environment() == 'local' ? '111' : '' }}"
        >
    </div>
  </div>
  </div>
  </div>
</div>
<div class="center-block form-actions">
  <button type="submit" class="submit-button btn btn-primary btn-lg">
    Complete Order
  </button>
</div>
{!! Form::close() !!}
@include('subscriptions.form')
@endif
@endsection