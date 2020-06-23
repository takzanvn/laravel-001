<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'offices';

    public $timestamps = false;
    
    protected $fillable = [
        'city',
        'phone',
        'address_line1',
        'state',
        'country',
        'postal_code'
    ];

    public function employees() {
        return $this->hasMany(Employee::class);
    }
}
