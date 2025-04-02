<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetsMeta extends Model
{
    use HasFactory;

    protected $table = 'pets_meta';

    protected $fillable = [
        'uuid', 'status', 'from_system', 'inserted_by', 'date_inserted', 'created_by', 
        'date_added', 'updated_by', 'date_updated', 'deleted_by', 'date_deleted'
    ];
}