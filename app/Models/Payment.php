<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = 'payments';

    protected $fillable = [
        'customer_id',
        'check_number',
        'payment_date',
        'amount'
    ];
}
