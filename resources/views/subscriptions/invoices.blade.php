@extends('app')
@section('content')
<table class="table">
    @foreach ($user->invoices() as $invoice)
        <tr>
            <td>{{ $invoice->date() }}</td>
            <td>{{ $invoice->total() }}</td>
            <td><a href="/invoices/download/{{ $invoice->id }}">Download Receipt</a></td>
        </tr>
    @endforeach
</table>
{!! Form::open(['route' => 'plans.swap', 'class' => 'form-horizontal']) !!}
  <select name="plan_id" class="form-control" id="plan_id">
    <option value="plan_FduAwOAXHAUV4D">Trial / $10 per month</option>
    <option value="plan_Fdu9EtdLJBzXnS">Regular / $30 per month</option>
    <option value="plan_Fdu92JzwGqspER">Premium / $50 per month</option>
  </select>
  <button type="submit" class="btn btn-default">Swap Plans</button>
{!! Form::close() !!}

@if (session('message'))
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-warning">
                {{ session('message') }}
            </div>
        </div>
    </div>
@endif

{!! Form::open(['route' => 'plans.cancel', 'class' => 'form-inline']) !!}
    <select>
        @foreach ($user->invoices() as $invoice)
        <option>{{ $invoice->date() }}{{ $invoice->total() }}</option>
        @endforeach
    </select>
  <button type="submit" class="btn btn-danger">Cancel</button>
{!! Form::close() !!}
@endsection