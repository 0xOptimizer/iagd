<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeciesMeta extends Model
{
    use HasFactory;

    protected $table = "species_meta";

    protected $fillable = [
        'species_id',
        'count',
        'latest_entry'
    ];

}
