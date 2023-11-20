<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 
        'product_id', 
        'payment_id', 
        'order_total_quantity', 
        'order_total_price'
    ];

    // Set nilai default untuk payment_id
    protected $attributes = [
        'payment_id' => 0,
    ];

    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function temporary_orders()
    {
        return $this->hasOne(Temporary_Order::class, 'temporary_order_id', 'id');
    }
}
