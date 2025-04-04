<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetsDetails extends Model
{
    use HasFactory;

    protected $table = 'pets_details';

    protected $fillable = [
        'uuid', 'breed', 'iagd_number', 'stars', 'owner', 'owner_uuid', 'co_owner', 
        'co_owner_uuid', 'location', 'breeder', 'animal_facility', 'gender', 
        'date_of_birth', 'markings', 'colors_body', 'colors_eye', 'weight', 'height', 
        'icgd_number', 'link', 'male_parent', 'male_parent_uuid', 'female_parent', 
        'female_parent_uuid', 'display_status'
    ];
}