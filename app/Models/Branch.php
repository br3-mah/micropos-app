<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'name',
        'code',
        'about',
        'address',
        'address2',
        'address3',
        'province',
        'city',
        'phone',
        'phone2',
        'phone3',
        'email',
        'contact_person',
        'contact_person_phone',
    ];
}
