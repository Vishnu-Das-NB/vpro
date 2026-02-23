<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meeting extends Model
{
    /** @use HasFactory<\Database\Factories\MeetingFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'start',
        'end',
        'priority',
        'status',
        'user_id',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_meetings','meeting_id','project_id');
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'task_meetings','meeting_id','task_id');
    }
    public function projectMeetings()
    {
        return $this->hasMany(ProjectMeeting::class, 'meeting_id');
    }
    public function taskMeetings()
    {
        return $this->hasMany(TaskMeeting::class, 'meeting_id');
    }
}
