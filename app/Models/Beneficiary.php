<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WorkField;

class Beneficiary extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'project_name',
        'work_field',
        'status',
    ];

    public function work_field()
    {
        return $this->belongsTo(WorkField::class, 'work_field', 'id');
    }
}
