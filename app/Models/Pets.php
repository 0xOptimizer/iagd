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
        return $this->hasOne(PetDetail::class, 'uuid', 'uuid');
    }

    public function meta()
    {
        return $this->hasOne(PetMeta::class, 'uuid', 'uuid');
    }

    public function files()
    {
        return $this->hasOne(PetFiles::class, 'uuid', 'uuid');
    }
}