<?php

namespace App\Models;

use App\Models\WorkField;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubWorkField extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'work_field',
        'status',
    ];

    public function work_field()
    {
        return $this->belongsTo(WorkField::class,'work_field','id');
    } 
}
