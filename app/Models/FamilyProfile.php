<?php

namespace App\Models;

use App\Models\Household;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FamilyProfile extends Model
{
    use HasFactory;
    protected $table = 'family_profiles';
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

    public function households(){
        return $this->hasMany(Household::class,);
    }




}
