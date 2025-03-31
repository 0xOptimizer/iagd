<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetsInquiries extends Model
{
    use HasFactory;

    protected $table = 'pets_inquiries';

    protected $fillable = [
        'inquiry_uuid', 'pet_name', 'image', 'pet_type', 'breed', 'date_of_birth', 
        'gender', 'markings', 'colors_body', 'colors_eye', 'weight', 'height', 
        'pet_location', 'owner', 'co_owner', 'owner_location', 'owner_contact', 
        'owner_email', 'status', 'created_by', 'date_added', 'updated_by', 
        'date_updated', 'deleted_by', 'date_deleted'
    ];
}