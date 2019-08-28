@extends('layouts.app')
@section('content')
<div class="payment-errors alert alert-danger"
  style="display: none;">
</div>
<h4>{{ $plan_name }}</h4>
<div class='subscription-forms'>
  {!! Form::open([
    'route' => 'plans.process',
    'class' => 'form',
    'id' => 'purchase-form'
  ]) !!}
      <input type="hidden" name="plan_id" value="{{ $planId }}" id="plan_id">
        <div class="row">
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
    <div class='col s4 m2'>
            <label for="card-month">Expiration Month</label>
            <input type="text" size="3"
              class="form-control"
              name="exp_month"
              data-stripe="exp-month"
              placeholder="MM"
              id="card-month"
              value="12"
              required>
    </div>
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
        <button type="submit" class="submit-button btn btn-primary btn-lg">
          Subscribe
        </button>
  {!! Form::close() !!}
</div>
@include('subscriptions.form')
@endsection