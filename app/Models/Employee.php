<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employees';

    protected $fillable = [
        'last_name',
        'first_name',
        'extension',
        'email',
        'job_title'
    ];
}
