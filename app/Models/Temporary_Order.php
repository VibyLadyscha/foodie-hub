<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporary_Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
        'note',
        'price'
    ];
    
    public function orders()
    {
        return $this->hasOne(Order::class, 'order_id', 'id');
    }
    public function payments()
    {
        return $this->hasOne(Payment::class, 'payment_id', 'id');
    }
    public function detail_orders()
    {
        return $this->hasMany(Detail_Order::class, 'detail_order_id', 'id');
    }
}
