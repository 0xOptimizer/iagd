<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;

    protected $table = "species";

    protected $fillable = [
        'uuid',
        'name',
        'scientific_name',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

}
