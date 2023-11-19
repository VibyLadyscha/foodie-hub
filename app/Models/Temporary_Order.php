<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporary_Order extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }
}
