<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PetsBreeds extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pets_breed_mix';

    protected $fillable = [
        'uuid',
        'breed',
        'percentage',
        'source',
        'rank_order'
    ];
}