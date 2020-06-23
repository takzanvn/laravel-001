<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public $timestamps = false;
    
    protected $fillable = [
        'last_name',
        'first_name',
        'extension',
        'email',
        'job_title'
    ];

    public function office() {
        return $this->belongsTo(Office::class);
    }

    public function salesRepToCustomers() {
        return $this->hasMany(Customer::class, 'sales_rep_employee_id');
    }

    public function reportBy() {
        return $this->hasMany(static::class, 'reports_to');
    }

    public function reportTo() {
        return $this->belongsTo(static::class);
    }
}
