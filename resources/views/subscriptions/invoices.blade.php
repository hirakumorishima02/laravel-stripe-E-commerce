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
@endsection