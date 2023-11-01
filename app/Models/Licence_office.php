<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence_office extends Model
{
    use HasFactory;
    protected $table = 'licence_office';
    protected $fillable = [
        'licence_id',
        'office_id',
    ];
}
