@extends('app')
@section('content')
  <div class="payment-errors alert alert-danger"
    style="display: none;">
  </div>
  {!! Form::open([
    'route' => 'plans.process',
    'class' => 'form',
    'id' => 'purchase-form'
  ]) !!}
    <input type="hidden" name="plan_id" value="{{ $planId }}" id="plan_id">
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
          <label for="coupon" class="control-label">
            Coupon Code
          </label>
        </div>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="coupon"
            placeholder="Coupon Code"
            autofocus data-stripe="number"
            name="coupon"
            value="
            {{ App::environment() == 'local' ? 'MFcT2qRs' : '' }}
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
@endsection