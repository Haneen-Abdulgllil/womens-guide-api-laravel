<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubWorkField;
use App\Models\Office;
use App\Models\Beneficiary;

class WorkField extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function sub_work_field()
    {
        return $this->hasMany(SubWorkField::class,'work_field','id');
    } 

    public function beneficiaries()
    {
        return $this->hasMany(Beneficiary::class,'work_field','id');
    } 

    public function offices()
    {
        return $this->belongsToMany(Office::class, 'work_field_office')->withTimestamps();
    }
}
