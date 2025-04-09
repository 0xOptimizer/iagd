<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PetsFile extends Model
{
    use SoftDeletes;

    protected $table = 'pets_files';

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
    ];
}