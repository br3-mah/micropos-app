<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes if you're using soft deletes

class Billing extends Model
{
    use HasFactory, SoftDeletes; // Add SoftDeletes if you want soft delete functionality

    // Define the table associated with the model if it's not the plural form of the model name
    protected $table = 'billings'; // Optional, only needed if your table name is not 'billings'

    // Define the attributes that are mass assignable
    protected $fillable = [
        'amount',
        'desc',
        'exp_date',
        'user_id',
        'plan_id',
    ];

    // Define the attributes that should be cast to native types
    protected $casts = [
        'exp_date' => 'datetime', // Cast exp_date to a datetime
        'deleted_at' => 'datetime', // Cast deleted_at to a datetime
    ];

    // Define any relationships here

    /**
     * Get the user that owns the billing.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the plan associated with the billing.
     */
    public function plan()
    {
        // return $this->belongsTo(Plan::class, 'plan_id'); // Assuming you have a Plan model
    }

    // You can add other relationships or methods as needed
}
