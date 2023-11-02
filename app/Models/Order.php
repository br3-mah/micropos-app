<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "billing_first_name",
        "billing_last_name",
        "billing_email",
        "billing_country",
        "billing_address_1",
        "billing_city",
        "billing_state",
        "billing_phone",
        "billing_postcode",
        "shipping_first_name",
        "shipping_last_name",
        "shipping_company",
        "shipping_country",
        "shipping_address_1",
        "shipping_address_2",
        "shipping_city",
        "shipping_postcode",
        "order_comments",
        "payment_method",
        "order_uuid",
        "order_referer",
        "order_status",
        "total_paid",
        "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
    public function order_items(){
        return $this->hasMany(OrderItem::class, 'order_id');
    }




    public static function mytotOrders(){
        try {
            $total = Order::where('user_id', auth()->user()->id)->count();
            return $total;
        } catch (\Throwable $th) {
            return 0;
        }
    }

    
}
