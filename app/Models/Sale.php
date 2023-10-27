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


    public static function avgSale(){
        try {
            $orders = Order::with(['order_items.products.user' => function ($query) {
                $query->where('id', auth()->user()->id);
            }])->get();
            
            $totalPrice = $orders->sum(function ($order) {
                return $order->order_items->sum('price');
            });
            
            return $totalPrice;
        } catch (\Throwable $th) {
            return 0;
        }
    }
    public static function spentTotal(){
        try {
            $orders = Order::with('order_items')->where('user_id', auth()->user()->id)->get();
        
            $totalPrice = $orders->sum(function ($order) {
                return $order->order_items->sum('price');
            });
            
            return $totalPrice;
        } catch (\Throwable $th) {
            return 0;
        }
    }
}
