<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Licence;
use App\Models\Office;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'office_id',
        'status',
    ];

    public function licences()
    {
        return $this->hasMany(Licence::class, 'department','id');
    }
    public function office()
    {
        return $this->belongsTo(Office::class, 'office_id','id');
    }
}
