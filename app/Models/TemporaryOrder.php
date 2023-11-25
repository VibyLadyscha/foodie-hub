<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'temporary_quantity',
        'temporary_price'
    ];
    
    public function orders()
    {
        return $this->hasOne(Order::class, 'order_id', 'id');
        
    }
    public function detail_orders()
    {
        return $this->hasMany(DetailOrder::class, 'temporary_order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
