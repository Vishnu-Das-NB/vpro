<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTask extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectTaskFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'project_id',
        'task_id',
        'user_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
