<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyBranch extends Model
{
    use HasFactory, SoftDeletes; 

    // Define the attributes that are mass assignable
    protected $fillable = [
        'company_id',
        'branch_name',
        'color',
        'color2',
        'color3',
        'tpin',
        'about',
        'address',
        'address2',
        'address3',
        'address3',
        'province',
        'city',
        'phone',
        'phone2',
        'phone3',
        'email',
        'email1',
        'email2',
        'logo',
        'logo2',
        'logo3',
        'website',
        'website2',
        'reg_no',
        'contact_person',
        'contact_person_phone',
    ];

    // Define the attributes that should be cast to native types
    protected $casts = [
        'deleted_at' => 'datetime', // Cast deleted_at to a datetime
    ];

    // Define any relationships here

    /**
     * Get the user that owns the company.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the type associated with the company.
     */
    public function type()
    {
        // return $this->belongsTo(CompanyType::class, 'type_id'); // Assuming you have a CompanyType model
    }
}
