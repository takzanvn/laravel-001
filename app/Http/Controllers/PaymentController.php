<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Payment;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = DB::table('payments')->limit(10)->orderby('payment_date')->get();
        return view('admin_default.pages.payment_list', ['payments' => $payments] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_default.pages.payment_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required|numeric|exists:payments',
            'check_number' => 'required|numeric|unique:payments',
            'payment_date' => 'required|date',
            'amount' => 'required|numeric'
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $payment = Payment::create($request->all());
        $save = $payment->save();
        if ($save) {
            return redirect()->route('admin.payments.show', $payment->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payment = Payment::find($id);
        return view('admin_default.pages.payment_show', ['payment' => $payment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $payment = Payment::find($id);
        return view('admin_default.pages.payment_edit', ['payment' => $payment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $payment = Payment::find($id)->fill($request->all());
        $save = $payment->save();
        if ($save) {
            return redirect()->route('admin.payments.show', $id);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Payment::find($id)->delete();
        if ($payment) {
            return redirect()->route('payments.index');
        }
    }
}
