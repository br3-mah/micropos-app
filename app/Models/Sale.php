<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id', //customer
        'str_amount',
        'amount',
        'quantity',
        'status'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function customer(){
        return $this->belongsTo(User::class);
    }
}
