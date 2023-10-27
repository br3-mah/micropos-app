<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'order_id',
        'driver_id',
        'user_id',
        'delivery_date',
        'delivery_type',
        'tracking_number',
        'notes'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function customer(){
        return $this->belongsTo(User::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
