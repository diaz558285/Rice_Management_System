<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rice extends Model
{
    protected $table = 'rice';
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];
}
