@extends('master')

@section('title', '| Payment Details')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header">
                <h4><strong>Payment Details</strong></h4>
            </div>
            <div class="box-body">
                <form class="form-horizontal">
                    <div class="form-group{{ $errors->has('customer_id') ? ' has-error' : ''}}">
                        <label for="" class="col-sm-4 control-label">Customer ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="customer_id" class="form-control" value="{{ $payment->customer_id }}" readonly>
                            @if($errors->has('customer_id'))
                                <span class="help-block"><strong>* {{ $errors->first('customer_id') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('check_number') ? ' has-error' : ''}}">
                        <label for="" class="col-sm-4 control-label">Payment Check Number</label>
                        <div class="col-sm-8">
                            <input type="text" name="check_number" class="form-control" value="{{ $payment->check_number }}" readonly>
                            @if ($errors->has('check_number'))
                                <span class="help-block"><strong>* {{ $errors->first('check_number') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('payment_date') ? ' has-error' : ''}}">
                        <label for="" class="col-sm-4 control-label">Payment Date</label>
                        <div class="col-sm-4">
                            <input type="date" name="payment_date" class="form-control" value="{{ $payment->payment_date }}" readonly>
                            @if ($errors->has('payment_date'))
                                <span class="help-block"><strong>* {{ $errors->first('payment_date') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('amount') ? ' has-error' : ''}}">
                        <label for="" class="col-sm-4 control-label">Amount</label>
                        <div class="col-sm-8">
                            <input type="text" name="amount" class="form-control" value="{{ $payment->amount }}" readonly>
                            @if ($errors->has('amount'))
                                <span class="help-block"><strong>* {{ $errors->first('amount') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <a href="{{ route('admin.payments.edit', $payment->id ) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection