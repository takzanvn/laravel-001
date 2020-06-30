@extends('master')

@section('title', '| Create Payment')

@section('breadcrumb')

@endsection

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="box box-success">
            <div class="box-header">
                <h4><strong>Create Payment</strong></h4>
            </div>
            <div class="box-body">
                <form action="{{ route('admin.payments.store') }}" method="post" class="form-horizontal">
                    @csrf
                    @method('POST')
                    <div class="form-group{{ $errors->has('customer_id') ? ' has-error' : ''}}">
                        <label for="" class="col-sm-4 control-label">Customer ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="customer_id" class="form-control" value="{{ old('customer_id') }}">
                            @if($errors->has('customer_id'))
                                <span class="help-block"><strong>* {{ $errors->first('customer_id') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('check_number') ? ' has-error' : ''}}">
                        <label for="" class="col-sm-4 control-label">Payment Check Number</label>
                        <div class="col-sm-8">
                            <input type="text" name="check_number" class="form-control" value="{{ old('check_number') }}">
                            @if ($errors->has('check_number'))
                                <span class="help-block"><strong>* {{ $errors->first('check_number') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('payment_date') ? ' has-error' : ''}}">
                        <label for="" class="col-sm-4 control-label">Payment Date</label>
                        <div class="col-sm-4">
                            <input type="date" name="payment_date" class="form-control" value="{{ old('payment_date') }}">
                            @if ($errors->has('payment_date'))
                                <span class="help-block"><strong>* {{ $errors->first('payment_date') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('amount') ? ' has-error' : ''}}">
                        <label for="" class="col-sm-4 control-label">Amount</label>
                        <div class="col-sm-8">
                            <input type="text" name="amount" class="form-control" value="{{ old('amount') }}">
                            @if ($errors->has('amount'))
                                <span class="help-block"><strong>* {{ $errors->first('amount') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <button class="btn btn-success"><i class="fa fa-save"></i> Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection