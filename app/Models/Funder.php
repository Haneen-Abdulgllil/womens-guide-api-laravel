<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FunderResource;

class Funder extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'our_products',
        'funding_conditions',
        'required_documents',
        'our_features',
        'guarantees',
        'financing_ceilings',
        'facebook_account',
        'linkedin_account',
        'email',
        'phone_number',
        'funder_resource_id',
        'status',
    ];

    public function funder_resource()
    {
        return $this->belongsTo(FunderResource::class, 'funder_resource_id', 'id');
    }
}
