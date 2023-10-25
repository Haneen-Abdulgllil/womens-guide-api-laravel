<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'address',
        'google_map',
        'required_actions',
        'required_actions',
        'website_url',
        'logo',
        'facebook_account',
        'linkedin_account',
        'email',
        'phone_number',
        'status',
    ];
}
