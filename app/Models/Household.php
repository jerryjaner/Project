<?php

namespace App\Models;

use App\Models\FamilyProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Household extends Model
{
    use HasFactory;
    protected $table = 'households';
    protected $fillable = [
        'family_profile_id',
        'name',
        'age',
        'sex',
        'relationship',
        'educational_level',
        'occupation',
    ];

    public function familyProfile(){

        return $this->belongsTo(FamilyProfile::class,)->withDefault();
    }
}
