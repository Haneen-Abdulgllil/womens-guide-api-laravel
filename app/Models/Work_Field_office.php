<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_Field_office extends Model
{
    use HasFactory;
    protected $table = 'work_field_office';
    protected $fillable = [
        'work_field_id',
        'office_id',
    ];
}
