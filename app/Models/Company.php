<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes if you're using soft deletes

class Company extends Model
{
    use HasFactory, SoftDeletes; // Add SoftDeletes if you want soft delete functionality

    // Define the table associated with the model if it's not the plural form of the model name
    protected $table = 'companies'; // Optional, only needed if your table name is not 'companies'

    // Define the attributes that are mass assignable
    protected $fillable = [
        'name',
        'about',
        'phone',
        'phone2',
        'email',
        'logo',
        'website',
        'type_id',
        'user_id',
    ];

    // Define the attributes that should be cast to native types
    protected $casts = [
        'deleted_at' => 'datetime', // Cast deleted_at to a datetime
    ];

    // Define any relationships here

    /**
     * Get the user that owns the company.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the type associated with the company.
     */
    public function type()
    {
        // return $this->belongsTo(CompanyType::class, 'type_id'); // Assuming you have a CompanyType model
    }

    // You can add other relationships or methods as needed
}
