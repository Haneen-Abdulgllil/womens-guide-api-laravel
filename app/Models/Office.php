<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Licence;

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

    
    public function licences()
    {
        return $this->belongsToMany(Licence::class ,'licence_office')->withTimestamps();
    } 

    public function work_fields()
    {
        return $this->belongsToMany(WorkField::class ,'work_field_office')->withTimestamps();
    }
    
    public function departments()
    {
        return $this->belongsToMany(Department::class);
    } 
}
