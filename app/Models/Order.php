<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function temporary_orders()
    {
        return $this->hasOne(TemporaryOrder::class, 'temporary_order_id', 'id');
    }

    public function payments()
    {
        return $this->hasOne(Payment::class, 'payment_id', 'id');
    }

}
