<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Redirections extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "redirections";

    protected $fillable = [
        'uuid',
        'request_from',
        'redirect_to',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
