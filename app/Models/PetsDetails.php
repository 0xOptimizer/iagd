<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetsDetails extends Model
{
    use HasFactory;

    protected $table = 'pets_details';

    public $timestamps = false; // Timestamp disabled : Fix for update_at and created_at column not found when using eloquent collection::create

    protected $fillable = [
        'uuid',
        'breed',
        'iagd_number',
        'stars',
        'owner',
        'owner_uuid',
        'co_owner',
        'co_owner_uuid',
        'pet_location',
        'owner_location',
        'breeder',
        'animal_facility',
        'animal_facility_uuid',
        'gender',
        'date_of_birth',
        'markings',
        'colors_body',
        'colors_eye',
        'weight',
        'height',
        'icgd_number',
        'link',
        'male_parent',
        'male_parent_uuid',
        'female_parent',
        'female_parent_uuid',
        'display_status'
    ];
}
