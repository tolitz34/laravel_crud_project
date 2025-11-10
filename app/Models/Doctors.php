<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable = [
        'docname',
        'email',
        'phone',
    ];

    // You can add any additional methods or relationships here if needed
}
