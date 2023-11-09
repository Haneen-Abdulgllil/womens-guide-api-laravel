<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Office;
use App\Models\Department;

class Licence extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'importance',
        'required_documents',
        'procedures',
        // 'issuing_authority',
        'fees',
        'penalties',
        'notes',
        'department',
        // 'offices',
        'status',
    ];

    public function offices()
    {
        return $this->belongsToMany(Office::class, 'licence_office')->withPivot('id')->withTimestamps();
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    } 
}
