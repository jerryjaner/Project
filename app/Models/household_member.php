<?php

namespace App\Models;

use App\Models\FamilyProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class household_member extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_profile_id',
        'name',
        'age',
        'sex',
        'relationship',
        'educational_level',
        'occupation',
    ];

    public function Familyprofile(){

        return $this->belongsTo(FamilyProfile::class,  'family_profile_id', 'id')->withDefault();
    }

}
