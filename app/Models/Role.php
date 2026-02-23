<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        "user_id",
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles', 'role_id', 'user_id');
    }
    public function userRoles()
    {
        return $this->hasMany(UserRole::class, 'role_id');
    }
}
