<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    // Managed by admin
    use HasFactory;
    protected $fillable = [
        'name',  
        'description',
        'duration',
        'duration_type',
        'amount',
        'discount',
    ];

    public function features(){
        return $this->hasMany(PlanFeature::class);
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }
}
