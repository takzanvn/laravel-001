@extends('master')

@section('title', '| Edit Payment')

@section('breadcrumb')
    <a href="{{ route('admin.payments.index') }}">Payments</a><a href="#"> / <i class="fa fa-edit"></i> Edit</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-warning">
                <div class="box-header">
                    <h4><strong>Edit Payment</strong></h4>
                </div>
                <div class="box-body">
                    <form action="{{ route('admin.payments.update', $payment->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="" class="control-label col-sm-4 text-left">Customer ID</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $payment->customer_id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-sm-4">Payment Check Number</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value={{ $payment->check_number }}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-sm-4">Payment Date</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" value="{{ $payment->payment_date}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-sm-4">Amount</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $payment->amount }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection