<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function temporary_orders()
    {
        return $this->hasOne(TemporaryOrder::class, 'temporary_order_id', 'id');
    }
}
