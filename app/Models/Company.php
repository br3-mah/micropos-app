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
        'user_id',
        'name',
        'slogan',
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
        'type',
        'category',
        'date_born',
        'reg_no',
        'contact_person',
        'contact_person_phone',
    ];

    // Define the attributes that should be cast to native types
    protected $casts = [
        'deleted_at' => 'datetime', // Cast deleted_at to a datetime
    ];

    public static function addCompany($data)
    {
        // Prepare an array to hold the company data
        $companyData = [
            'user_id' => auth()->user()->id, // Always present
        ];
    
        // Only add fields to the array if they are set
        if (isset($data['name'])) {
            $companyData['name'] = $data['name'];
        }
        if (isset($data['slogan'])) {
            $companyData['slogan'] = $data['slogan'];
        }
        if (isset($data['color'])) {
            $companyData['color'] = $data['color'];
        }
        if (isset($data['color2'])) {
            $companyData['color2'] = $data['color2'];
        }
        if (isset($data['color3'])) {
            $companyData['color3'] = $data['color3'];
        }
        if (isset($data['tpin'])) {
            $companyData['tpin'] = $data['tpin'];
        }
        if (isset($data['about'])) {
            $companyData['about'] = $data['about'];
        }
        if (isset($data['address'])) {
            $companyData['address'] = $data['address'];
        }
        if (isset($data['address2'])) {
            $companyData['address2'] = $data['address2'];
        }
        if (isset($data['address3'])) {
            $companyData['address3'] = $data['address3'];
        }
        if (isset($data['province'])) {
            $companyData['province'] = $data['province'];
        }
        if (isset($data['city'])) {
            $companyData['city'] = $data['city'];
        }
        if (isset($data['phone'])) {
            $companyData['phone'] = $data['phone'];
        }
        if (isset($data['phone2'])) {
            $companyData['phone2'] = $data['phone2'];
        }
        if (isset($data['phone3'])) {
            $companyData['phone3'] = $data['phone3'];
        }
        if (isset($data['email'])) {
            $companyData['email'] = $data['email'];
        }
        if (isset($data['email2'])) {
            $companyData['email2'] = $data['email2'];
        }
        if (isset($data['logo'])) {
            $companyData['logo'] = $data['logo'];
        }
        if (isset($data['logo2'])) {
            $companyData['logo2'] = $data['logo2'];
        }
        if (isset($data['logo3'])) {
            $companyData['logo3'] = $data['logo3'];
        }
        if (isset($data['website'])) {
            $companyData['website'] = $data['website'];
        }
        if (isset($data['website2'])) {
            $companyData['website2'] = $data['website2'];
        }
        if (isset($data['type'])) {
            $companyData['type'] = $data['type'];
        }
        if (isset($data['category'])) {
            $companyData['category'] = $data['category'];
        }
        if (isset($data['date_born'])) {
            $companyData['date_born'] = $data['date_born'];
        }
        if (isset($data['reg_no'])) {
            $companyData['reg_no'] = $data['reg_no'];
        }
        if (isset($data['contact_person'])) {
            $companyData['contact_person'] = $data['contact_person'];
        }
        if (isset($data['contact_person_phone'])) {
            $companyData['contact_person_phone'] = $data['contact_person_phone'];
        }
    
        // Create the company record with only the set fields
        return Company::create($companyData);
    }
    

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
