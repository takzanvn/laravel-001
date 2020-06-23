<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public $timestamps = false;
    
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'phone',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'country',
        'sales_rep_employee_id',
        'credit_limit'
    ];

    public function salesRepByEmployee() {
        return $this->belongsTo(Employee::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }
}
