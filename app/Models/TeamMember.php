<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    /** @use HasFactory<\Database\Factories\TeamMemberFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'team_id',
        'user_id',
        'created_by',
    ];

    public function team()
    {
        return $this->belongsTo(Teams::class, 'team_id');
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
