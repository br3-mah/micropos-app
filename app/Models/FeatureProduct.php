<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'bid_key',
        'price',
        'days',
        'is_paid',
        'status'
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
