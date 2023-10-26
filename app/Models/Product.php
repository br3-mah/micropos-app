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
}


