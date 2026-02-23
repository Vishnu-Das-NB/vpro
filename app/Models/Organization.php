<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    /** @use HasFactory<\Database\Factories\OrganizationFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'organization_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'organization_users','organization_id','user_id');
    }

    public function organizationUsers()
    {
        return $this->hasMany(OrganizationUsers::class, 'organization_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
