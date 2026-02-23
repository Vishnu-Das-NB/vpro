<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationUsers extends Model
{
    /** @use HasFactory<\Database\Factories\OrganizationUsersFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'organization_id',
        'user_id',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
