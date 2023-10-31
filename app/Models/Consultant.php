<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status',
        'facebook_account',
        'linkedin_account',
        'email',
        'phone_number',
    ];
}
