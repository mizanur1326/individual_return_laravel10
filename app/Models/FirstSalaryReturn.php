<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstSalaryReturn extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'nid', 'dob', 'etin', 'circle', 'taxes_zone', 
        'assessment_year', 'spouse', 'address', 'telephone', 'mobile', 
        'email', 'past_savings', 'ornaments', 'vehicle', 'furniture', 
        'financial_assets', 'land_house'
    ];
}
