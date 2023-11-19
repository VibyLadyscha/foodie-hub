<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function temporary_orders()
    {
        return $this->belongsTo(Temporary_Order::class, 'product_id', 'id');
    }
}
