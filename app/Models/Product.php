<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function detail_orders()
    {
        return $this->belongsTo(Detail_Order::class, 'detail_order_id', 'id');
    }
}
