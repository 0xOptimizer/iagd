<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalMeta extends Model
{
    use HasFactory;

    protected $table = "global_meta";

    public $timestamps = false;

    protected $fillable = [
        'meta_key',
        'meta_value'
    ];

}
