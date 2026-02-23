<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'start',
        'end',
        'priority',
        'status',
        'organization_id',
        'user_id',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id');
    }
    public function tasks()
    {
        return $this->belongsToMany(Task::class,'project_tasks','project_id','task_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'project_users','project_id','user_id');
    }
    public function meetings()
    {
        return $this->belongsToMany(Meeting::class, 'project_meetings','project_id','meeting_id');
    }
    public function teams()
    {
        return $this->belongsToMany(Teams::class, 'project_teams','project_id','team_id');
    }
    public function documents()
    {
        return $this->belongsToMany(Document::class, 'project_documents','project_id','document_id');
    }
    public function projectUsers()
    {
        return $this->hasMany(ProjectUser::class, 'project_id');
    }
    public function projectTasks()
    {
        return $this->hasMany(ProjectTask::class, 'project_id');
    }
    public function projectMeetings()
    {
        return $this->hasMany(ProjectMeeting::class, 'project_id');
    }
    public function projectTeams()
    {
        return $this->hasMany(ProjectTeam::class, 'project_id');
    }
    public function projectDocuments()
    {
        return $this->hasMany(ProjectDocument::class, 'project_id');
    }
}
