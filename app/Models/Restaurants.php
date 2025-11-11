<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $fillable = [
        'name', 'description', 'image', 'address', 'phone',
        'delivery_fee', 'delivery_time', 'minimum_order', 'is_active', 'rating'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'delivery_fee' => 'decimal:2',
        'minimum_order' => 'decimal:2',
        'rating' => 'decimal:1',
    ];

    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
