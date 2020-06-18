<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    //
    protected $table = 'product_lines';

    protected $fillable = [
        'text_description',
        'html_description',
        'image'
    ];
}