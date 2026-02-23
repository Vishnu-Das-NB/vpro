<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
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
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_tasks','task_id','project_id');
    }
    public function documents()
    {
        return $this->belongsToMany(Document::class, 'task_documents','task_id','document_id');
    }
    public function meetings()
    {
        return $this->belongsToMany(Meeting::class, 'task_meetings','task_id','meeting_id');
    }
    public function taskLogs()
    {
        return $this->hasMany(TaskLogs::class, 'task_id');
    }

    public function taskDocuments()
    {
        return $this->hasMany(TaskDocument::class, 'task_id');
    }
    public function taskMeetings()
    {
        return $this->hasMany(TaskMeeting::class, 'task_id');
    }

    public function projectTask()
    {
        return $this->hasOne(ProjectTask::class, 'task_id');
    }
}
