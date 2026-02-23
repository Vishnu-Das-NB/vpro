<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectMeeting extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectMeetingFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'project_id',
        'meeting_id',
        'user_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function meeting()
    {
        return $this->belongsTo(Meeting::class, 'meeting_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
