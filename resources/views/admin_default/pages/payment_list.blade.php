@extends('master')

@section('title', '| Payment List')

@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="box box-success">
        <div class="box-header with-border">
            <h4>List Payment</h4>
        </div>
        <div class="box-body">
            <tbody>
                <table class="table table-bordered">
                    <tr>
                        <th width="20%">Customer ID</th>
                        <th width="20%">Check Number</th>
                        <th width="20%">Payment Date</th>
                        <th width="20%">Amount</th>
                        <th>Actions</th>
                    </tr>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->customer_id }}</td>
                        <td>{{ $payment->check_number }}</td>
                        <td>{{ $payment->payment_date }}</td>
                        <td>{{ $payment->amount }}</td>
                        <th><a class="btn btn-primary" href="{{ url("admin/payments/$payment->id/edit") }}"><i class="fa fa-edit"></i>Edit</a></th>
                    </tr>
                @endforeach
                </table>
            </tbody>
        </div>
    </div>
  </div>
</div>
@endsection