<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teams extends Model
{
    /** @use HasFactory<\Database\Factories\TeamsFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function members()
    {
        return $this->belongsToMany(User::class, 'team_members', 'team_id', 'user_id');
    }
    public function projects()
    {
        return $this->hasMany(Project::class, 'project_teams', 'team_id', 'project_id');
    }
}
