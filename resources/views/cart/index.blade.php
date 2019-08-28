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
    <div class="form-group">
      <div class="row">
        <div class="col-xs-12">
          <label for="card-number" class="control-label">
            Credit Card Number
          </label>
        </div>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="card-number"
            name="cardnumber"
            placeholder="Valid Card Number"
            required autofocus data-stripe="number"
            value="
            {{ App::environment() == 'local' ? '4242424242424242' : '' }}
            ">
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-xs-4">
          <label for="card-month">Expiration Date</label>
        </div>
        <div class="col-xs-8">
          <label for="card-cvc">Security Code</label>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <input type="text" size="3"
            class="form-control"
            name="exp_month"
            data-stripe="exp-month"
            placeholder="MM"
            id="card-month"
            value="{{ App::environment() == 'local' ? '12' : '' }}"
            required>
        </div>
        <div class="col-xs-2">
          <input type="text" size="4"
            class="form-control"
            name="exp_year" data-stripe="exp-year"
            placeholder="YYYY" id="card-year"
            value="{{ App::environment() == 'local' ? '2020' : '' }}"
            required>
        </div>
        <div class="col-xs-2">
          <input type="text"
            class="form-control" id="card-cvc"
            placeholder=""
            size="6"
            value="{{ App::environment() == 'local' ? '111' : '' }}"
            >
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <label for="billing_name" class="control-label">
            Billing Name
          </label>
        </div>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="billing_name"
            placeholder="John Williams"
            autofocus data-stripe="number"
            name="billing_name"
            value="
            {{ App::environment() == 'local' ? 'John Williams' : '' }}
            ">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <label for="billing_address" class="control-label">
            Billing Address
          </label>
        </div>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="billing_address"
            placeholder="24"
            autofocus data-stripe="number"
            name="billing_address"
            value="
            {{ App::environment() == 'local' ? '24' : '' }}
            ">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <label for="billing_city" class="control-label">
            Billing City
          </label>
        </div>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="billing_city"
            placeholder="Bayswater Perth"
            autofocus data-stripe="number"
            name="billing_city"
            value="
            {{ App::environment() == 'local' ? 'Bayswater Perth' : '' }}
            ">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <label for="billing_state" class="control-label">
            Billing State
          </label>
        </div>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="billing_state"
            placeholder="Westan Australlia"
            autofocus data-stripe="number"
            name="billing_state"
            value="
            {{ App::environment() == 'local' ? 'Westan Australlia' : '' }}
            ">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <label for="billing_zip" class="control-label">
            Billing Zip
          </label>
        </div>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="billing_zip"
            placeholder="6053"
            autofocus data-stripe="number"
            name="billing_zip"
            value="
            {{ App::environment() == 'local' ? '6053' : '' }}
            ">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <label for="billing_country" class="control-label">
            Billing Country
          </label>
        </div>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="billing_country"
            placeholder="Australlia"
            autofocus data-stripe="number"
            name="billing_country"
            value="
            {{ App::environment() == 'local' ? 'Australlia' : '' }}
            ">
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