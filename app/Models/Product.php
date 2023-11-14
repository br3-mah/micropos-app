<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description', 
        'category_id',  
        'price',
        'barcode',
        'sku',
        'type',
        'status',
        'can_show',
        'qty',
        'image',

        'vat',
        'tax_class',
        'disc_type',
        'disc_value',
        'fixed_price',
        'avatar_remove',
        'user_id',
        "tags",
        "shelf_qty",
        "warehouse_qty",
        "allow_backorder",

        "weight",
        "width",
        "height",
        "length",
        "meta_title",
        "meta_keywords",
        "is_approved"
    ];

    
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function variants(){
        return $this->hasMany(ProductVariation::class);
    }
    
    public function photos(){
        return $this->hasMany(ProductImage::class);
    }
    public function categories(){
        return $this->hasMany(ProductCategory::class);
    }
    public function tags(){
        return $this->hasMany(ProductTag::class);
    }
    public function featured(){
        return $this->hasMany(FeatureProduct::class);
    }
    
    public static function mytotActiveProducts(){
        try {
            $total1 = Product::where('user_id', auth()->user()->id)->sum('shelf_qty');
            $total2 = Product::where('user_id', auth()->user()->id)->sum('warehouse_qty');
            return $total1 + $total2;
        } catch (\Throwable $th) {
            return 0;
        }
    }

    
    public static function totSold(){
        try {
            $orders = Order::with(['order_items.products.user' => function ($query) {
                $query->where('id', auth()->user()->id);
            }])->get();
            
            $totalPrice = $orders->sum(function ($order) {
                return $order->order_items->sum('qty');
            });
            
            return $totalPrice;
        } catch (\Throwable $th) {
            return 0;
        }
    }
}


