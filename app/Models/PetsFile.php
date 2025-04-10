<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetsFile extends Model
{
    use HasFactory;

    protected $table = "pets_files";

    protected $fillable = [
        'uuid',
        'attached_to_uuid',
        'file_name',
        'file_path',
        'file_type',
        'file_size',
        'file_extension',
        'file_mime_type',
        'file_hash',
        'status',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
