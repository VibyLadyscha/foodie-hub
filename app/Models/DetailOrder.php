<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'temporary_order_id',
        'product_id',
        'quantity',
        'note',
        'price'
    ];

    public function temporary_orders()
    {
        return $this->belongsTo(TemporaryOrder::class, 'temporary_order_id', 'id');
    }
    
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
