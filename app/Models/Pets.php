<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;

    protected $table = 'pets';

    protected $fillable = [
        'uuid', 'pet_name', 'pet_type', 'image'
    ];

    public function details()
    {
        return $this->hasOne(PetsDetails::class, 'uuid', 'uuid');
    }

    public function meta()
    {
        return $this->hasOne(PetsMeta::class, 'uuid', 'uuid');
    }
}
