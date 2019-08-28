@extends('layouts.app')
@section('content')
<h4>Your Subscription Logs</h4>
<table class="striped centered">
    <thead>
        <th>Registration</th>
        <th>Charge</th>
        <th>Receipt</th>
    </thead>
    <tbody>
    @foreach ($user->invoices() as $invoice)
        <tr>
            <td>{{ $invoice->date() }}</td>
            <td>{{ $invoice->total() }}</td>
            <td><a class='btn' href="/invoices/download/{{ $invoice->id }}">Download</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

@if (session('message'))
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
    </div>
</div>
@endif

<div class='input-field'>
    {!! Form::open(['route' => 'plans.swap', 'class' => 'form-horizontal']) !!}
    <div class='row'>
        <div class='col s3 m3'>
          <select name="plan_id" class="form-control select-form" id="plan_id">
            <option value="plan_FduAwOAXHAUV4D">Trial / $10 per month</option>
            <option value="plan_Fdu9EtdLJBzXnS">Regular / $30 per month</option>
            <option value="plan_Fdu92JzwGqspER">Premium / $50 per month</option>
          </select>
        </div>
        <div class='col s3 m3'>
          <button type="submit" class="btn blue">Swap Plans</button>
        </div>
    {!! Form::close() !!}
    
    {!! Form::open(['route' => 'plans.cancel', 'class' => 'form-inline']) !!}
        <div class='col s3 m3'>
        <select class='select-form'>
            @foreach ($user->invoices() as $invoice)
            <option>{{ $invoice->date() }} {{ $invoice->total() }}</option>
            @endforeach
        </select>
        </div>
        <div class='col s3 m3'>
      <button type="submit" class="btn  red">Cancel</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection