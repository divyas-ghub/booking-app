<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    // ✅ ADD ALL FIELDS HERE
    protected $fillable = [
        'name',
        'description',
        'price',
        'duration_mins',
        'is_active'
    ];
     protected $casts = [
        'price' => 'decimal:2',
    ];
}
