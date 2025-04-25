<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\PetsDetails;
use App\Models\PetsMeta;
use App\Models\PetsFile;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pets extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'pets';
    public $timestamps = false;

    protected $fillable = [
        'uuid', 'pet_name', 'pet_type', 'image'
    ];

    /**
     * Get all of the images for the Pets
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(PetsFile::class, 'attached_to_uuid', 'uuid');
    }

    public function details()
    {
        return $this->hasOne(PetsDetails::class, 'uuid', 'uuid');
    }

    public function meta()
    {
        return $this->hasOne(PetsMeta::class, 'uuid', 'uuid');
    }

    public function files()
    {
        return $this->hasMany(PetsFile::class, 'attached_to_uuid', 'uuid');
    }
}
