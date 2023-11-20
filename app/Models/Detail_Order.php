<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Order extends Model
{
    use HasFactory;
    public function temporary_orders()
    {
        return $this->belongsTo(Temporary_Order::class, 'temporary_order_id', 'id');
    }
    
    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }
}
