<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayAccount extends Model
{
    // Managed by User
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'method',
        'account_bank',
        'account_name',
        'account_number',
        'account_cvc',
        'account_exp',
        'account_sort',
        'phone',
        'network',
        'code',
    ];

    public function features(){
        return $this->hasMany(PlanFeature::class);
    }
}
