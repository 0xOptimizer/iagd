<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NydusLoungeLink extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'nydus_lounge_link';

    protected $fillable = [
        'nydus_initiate_token',
        'nydus_network_token',
        'callback_url',
        'database_id',
        'user_uuid',
        'iagd_number',
        'old_iagd_number',
        'email_address',
        'isGoogle',
        'profile_image',
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'birth_date',
        'contact_number',
        'address',
        'is_email_verified',
        'is_premium',
        'status',
        'timezone',
        'referred_by'
    ];
}