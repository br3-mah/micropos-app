<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_id",
        "name",
        "price",
        "qty",
        "subtotal",
        "order_id"
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
