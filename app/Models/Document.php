<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    /** @use HasFactory<\Database\Factories\DocumentFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'link',
        'user_id',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function projectDocuments()
    {
        return $this->hasMany(ProjectDocument::class, 'document_id');
    }
    public function taskDocuments()
    {
        return $this->hasMany(TaskDocument::class, 'document_id');
    }
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_documents', 'document_id', 'project_id');
    }
    public function task()
    {
        return $this->belongsTo(Task::class,'task_documents','document_id','task_id');
    }
}
