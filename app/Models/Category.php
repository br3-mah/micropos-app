<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  
        'description',
        'meta-title',
        'meta-description',
        'meta-keyword',
        'status',
        'avatar'
    ];

    public function product(){
        return $this->hasMany(ProductCategory::class);
    }
}
