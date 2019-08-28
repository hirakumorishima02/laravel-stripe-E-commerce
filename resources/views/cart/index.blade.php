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
<div class='subscription-forms'>
  {!! Form::open([
    'route' => 'plans.process',
    'class' => 'form',
    'id' => 'purchase-form'
  ]) !!}
<div class="row">
  <div class="col-xs-12">
    <label for="billing_name" class="control-label">
      Billing Name
    </label>
  </div>
  <div class="col s4 ">
    <input type="text"
      class="form-control"
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
              class="form-control" id="billing_state"
              data-stripe="billing_state"
              size="6"
              value="Australlia"
              required
              >
    </div>
</div>
<div class="col-xs-12">
  <label for="card-number" class="control-label">
    Credit Card Number
  </label>
</div>
<div class="col s4 ">
  <input type="text"
    class="form-control"
    id="card-number"
    placeholder="Valid Card Number"
    required autofocus data-stripe="number"
    value="4242424242424242">
</div>
</div>
<div class='row'>
        <div class="col-xs-2">
          <input type="text" size="3"
            class="form-control"
            name="exp_month"
            data-stripe="exp-month"
            placeholder="MM"
            id="card-month"
            value="{{ App::environment() == 'local' ? '12' : '' }}"
            required>
  <div class='col s4 m2'>
        <label for="card-month">Expiration Year</label>
        <input type="text" size="4"
          class="form-control"
          name="exp_year" data-stripe="exp-year"
          placeholder="YYYY" id="card-year"
          value="2020"
          required>
</div>
<div class='col s4 m2'>
        <label for="card-cvc">Security Code</label>
        <input type="text"
          class="form-control" id="card-cvc"
          placeholder=""
          size="6"
          value="111"
          required
          >
</div>
<div class='col s4 m3'>
        <label for="coupon" class="control-label">
          Coupon Code
        </label>
        <input type="text"
          class="form-control"
          id="coupon"
          placeholder="Coupon Code"
          autofocus data-stripe="number"
          name="coupon"
          value="MFcT2qRs">
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