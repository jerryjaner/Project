<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyProfile extends Model
{
    use HasFactory;
    protected $fillable = [

        'firstname',
        'lastname',
        'middlename',
       ' image',
        'address',
        'birthdate',
        'age',
        'civil_status',
        'monthly_income',
        'occupation',
        'educational_level',
        'spouse_name',
        'spouse_age',
        'spouse_occupation',
        'spouse_education_level',
        'spouse_monthly_income',
        'no_households',
        'no_family',
        'households_members',
        'occupancy_status',
        'occupany_period',
        'interview_date',

    ];

     //Relationship
     public function HouseHoldMember(){

        return $this->hasmany(household_member::class, 'family_profile_id', 'id')->withDefault();
    }
}
